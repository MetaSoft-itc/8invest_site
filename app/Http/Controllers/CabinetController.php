<?php

namespace App\Http\Controllers;

use App\Account;
use App\Calendar;
use App\Deposit;
use App\Income;
use App\News;
use App\Outcome;
use App\Promocode;
use App\Support\Helpers;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Sonata\GoogleAuthenticator\GoogleAuthenticator;
use Sonata\GoogleAuthenticator\GoogleQrUrl;

class CabinetController extends Controller
{

    protected $currencies = [
        Account::CURRENCY_RUB,
        Account::CURRENCY_USD,
        Account::CURRENCY_EUR,
        Account::CURRENCY_BTC_ONE,
        Account::CURRENCY_BTC_TWO,
        Account::CURRENCY_BNB,
        Account::CURRENCY_BUSD,
        Account::CURRENCY_DAI,
        Account::CURRENCY_DOGE,
        Account::CURRENCY_ETH,
        Account::CURRENCY_BTC,
        Account::CURRENCY_XRP,
        Account::CURRENCY_BLD,
        Account::CURRENCY_APY

    ];
    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View|mixed
     */
    public function index()
    {
        if(auth()->guest()) {
            return redirect()->to('/');
        }

        $user = auth()->user();

        $accounts = $user->accounts;

        $start = now()->startOfMonth()->startOfWeek();
        $end = now()->endOfMonth()->endOfWeek();

        $calendar = collect();

        for($current = $start->clone(); $current->getTimestamp() < $end->getTimestamp(); $current->addDay()) {
            $date = Calendar::query()->where('date', '=', $current->format('Y-m-d'))->first();
            $calendar->put($current->format('d-m'), [
                'date' => $current->clone(),
                'value' => $date,
            ]);
        }

        $news = News::query()->latest()->take(3)->get();

        $structure_balance = $this->getStructureBalance($user, $accounts);

        $referalsCount = $this->referalsCount();
        $activeReferals = $this->activeReferals();

        $depositsCount = $user->deposits()->count();
        $activeDepositsCount = $user->deposits()->where('status', Deposit::STATUS_OPENED)->count();
        $closedDepositsCount = $user->deposits()->where('status', Deposit::STATUS_CLOSED)->count();

        $referals = $this->getReferals(true);
        $lastReferals = collect();
        foreach ($referals as $referal) {
            $lastReferals = $lastReferals->merge($referal);
        }

        $referalsBalances = $lastReferals->map(function (User $referal) {
            return [
                Account::CURRENCY_USD => $referal->accounts()->where('currency', \App\Account::CURRENCY_USD)->first()->getBalanceAndDeposits(),
                Account::CURRENCY_EUR => $referal->accounts()->where('currency', \App\Account::CURRENCY_EUR)->first()->getBalanceAndDeposits(),
                Account::CURRENCY_RUB => $referal->accounts()->where('currency', \App\Account::CURRENCY_RUB)->first()->getBalanceAndDeposits(),
                Account::CURRENCY_BTC_ONE => $referal->accounts()->where('currency', \App\Account::CURRENCY_BTC_ONE)->first()->getBalanceAndDeposits(),
                Account::CURRENCY_BTC_TWO => $referal->accounts()->where('currency', \App\Account::CURRENCY_BTC_TWO)->first()->getBalanceAndDeposits(),
            ];
        });

        $referalsBalances = [
            Account::CURRENCY_USD => number_format($referalsBalances->sum(Account::CURRENCY_USD), 2, '.', ' '),
            Account::CURRENCY_EUR => number_format($referalsBalances->sum(Account::CURRENCY_EUR), 2, '.', ' '),
            Account::CURRENCY_RUB => number_format($referalsBalances->sum(Account::CURRENCY_RUB), 2, '.', ' '),
            Account::CURRENCY_BTC_ONE => number_format($referalsBalances->sum(Account::CURRENCY_BTC_ONE), 4, '.', ' '),
            Account::CURRENCY_BTC_TWO => number_format($referalsBalances->sum(Account::CURRENCY_BTC_TWO), 4, '.', ' '),
        ];

        $lastReferals = $lastReferals->sortBy('created_at')->take(3);

        return view('cabinet.new.cabinet', compact('user','referalsBalances', 'accounts', 'calendar', 'news', 'structure_balance', 'referalsCount', 'activeReferals', 'depositsCount', 'activeDepositsCount', 'closedDepositsCount', 'lastReferals'));
        //return view('cabinet.index', compact('user', 'referalsBalances', 'accounts', 'calendar', 'news', 'structure_balance', 'referalsCount', 'activeReferals', 'depositsCount', 'activeDepositsCount', 'closedDepositsCount', 'lastReferals'));
    }

    /**
     * @param $user
     * @param $accounts
     * @return float|int
     */
    protected function getStructureBalance($user, $accounts)
    {
        return Helpers::getStructuralBalance($accounts) + Helpers::getDepositsBalance($user) + Helpers::getReferalsBalance($user);
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View|mixed
     */
    public function account()
    {
        $user = auth()->user();

        $accounts = $user->accounts;

        return view('cabinet.new.account', compact('user', 'accounts'));
    }

    public function showPhrase()
    {
        $user = auth()->user();

        return view('auth.recoveryPhrase', compact('user'));
    }

    public function wallets()
    {
        $user = auth()->user();
        $account = $user->accounts;
        $requisites = $user->requisites()->get()->keyBy(function ($item) {
            return $item->type .'_wallet';
        })->map(function ($item) {
            return $item->value;
        });

        $wallets = $this->currencies;

        foreach ($wallets as $wallet) {
            if(! $requisites->has($wallet .'_wallet')) {
                $requisites->put($wallet .'_wallet', null);
            }
        }

        //$wallets = config('requisites');

        return view('cabinet.new.wallets',compact('user','account','requisites','wallets'));
    }

    public function storeWallets(Request $request){

        $wallets = array_keys(Outcome::getSystems());

/*        $data = $this->validate($request, [
            'fin_password' => ['required', 'string'],
        ]);*/

        $user = auth()->user();

/*        if($data['fin_password'] != $user->fin_password) {
            return back()->with('error', true);
        }*/

        foreach ($wallets as $wallet) {
            if($request->has($wallet .'_wallet')) {
                $user->requisites()->updateOrCreate([
                    'type' => $wallet
                ], [
                    'value' => $request->get($wallet .'_wallet') ?? "",
                ]);
            }
        }

        return back();
    }

    public function withdraw()
    {
        $user = auth()->user();

        $accounts = $user->accounts;

        return view('cabinet.new.withdraw',compact('user','accounts'));
    }

    public function makeWithdraw(Request $req){
        $data = $this->validate($req, [
            'amount'=> ['required', 'min:0.000001','numeric'],
            'currency' =>['required', 'in:'. implode(',', $this->currencies)]
        ]);

        $user = auth()->user();

        $account = $user->accounts->where('currency', $data['currency'])->first();

        if ($account->balance < $data['amount']){
            return back()->withErrors(['balance'=>'Недостаточно денег на балансе']);
        }

        return redirect()->route('cabinet.deals',['mode'=>'outcomes']);
    }

    public function showDepositWallet($id){
        $deposit = DB::table('deposits')->where('id', $id)->first();
        $wallets = config('requisites');
        $comment = config('requisitesComments.'.$deposit->currency);
        $user = auth()->user();
        return view('cabinet.new.deposits.show-wallet', compact('user','wallets', 'deposit','comment'));
    }

    public function showIncome($wallet){
        $wallets = config('requisites.'.Income::enumByString($wallet));
        $user = auth()->user();
        if ($user->is_verified != 2){
            return redirect()->route('cabinet.verification');
        }
        return view('cabinet.new.income', compact('user','wallets','wallet'));
    }

    public function showIncomeReq($id){
        $user = auth()->user();
        if ($user->is_verified != 2){
            return redirect()->route('cabinet.verification');
        }
        $income = DB::table('incomes')->where('id',$id)->first();
        $wallets = config('requisites.'.$income->currency);
        $comment = config('requisitesComments.'.$income->currency);
        return view('cabinet.new.incomeReq', compact('user','income','wallets','comment'));
    }

    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View|mixed
     */
    public function deposits()
    {
        $user = auth()->user();

        $accounts = $user->accounts;

        //return view('cabinet.new.deposits');
        return view('cabinet.new.deposits', compact('accounts', 'user'));
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View|mixed
     */
    public function newDeposit()
    {
        $user = auth()->user();

        $accounts = $user->accounts;

        return view('cabinet.newDeposit', compact('user', 'accounts'));
    }

    /**
     * @return array
     */
    protected function getReferals($active = false)
    {
        return Helpers::getReferals(auth()->user(), $active);
    }

    /**
     * @return int
     */
    protected function referalsCount()
    {
        $referals = $this->getReferals();

        $count = collect($referals)->sum(function ($referals) {
            return $referals->count();
        });

        return $count;
    }

    /**
     * @return mixed
     */
    public function activeReferals()
    {
        $referals = $this->getReferals(true);

        $count = collect($referals)->sum(function ($referals) {
            return $referals->count();
        });

        return $count;
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View|mixed
     */
    public function referals()
    {
        $user = auth()->user();

        $accounts = $user->accounts;

        $referals = [];

        $referals[0] = $user->referals()->get();

        $referals[1] = collect();

        foreach ($referals[0] as $referal) {
            $referals[1] = $referals[1]->merge($referal->referals()->get());
        }

        $referals[2] = collect();

        foreach ($referals[1] as $referal) {
            $referals[2] = $referals[2]->merge($referal->referals()->get());
        }

        $referalsCount = $this->referalsCount();
        $activeReferals = $this->activeReferals();

        $activeReferalsList = $this->getReferals(true);

        return view('cabinet.new.referals', compact('accounts', 'user', 'referals', 'referalsCount', 'activeReferals', 'activeReferalsList'));
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View|mixed
     */
    public function password()
    {
        $user = auth()->user();

        $accounts = $user->accounts;

        $ga = new GoogleAuthenticator();

        if(! session()->has('ga_secret')) {
            $secret = $ga->generateSecret();
            session()->put('ga_secret', $secret);
        } else {
            $secret = session()->get('ga_secret');
        }

        $qr = GoogleQrUrl::generate($user->name, $secret);

        return view('cabinet.new.password', compact('user', 'accounts', 'qr'));
    }

    /**
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Illuminate\Validation\ValidationException
     */
    public function passwordStore(Request $request)
    {
        $user = auth()->user();

        $data = $this->validate($request, [
            'old_password' => ['required', 'string', 'min:2'],
            'password' => ['required', 'string', 'min:2', 'confirmed'],
        ]);

        if(! Hash::check($data['old_password'], $user->password)) {
            return back()->withErrors(['old_password' => 'Текущий пароль введен неверно!']);
        }

        $user->update(['password' => Hash::make($data['password'])]);

        return redirect()->route('cabinet.password')->with('success', true);
    }

    /**
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Illuminate\Validation\ValidationException
     */
    public function finPassword(Request $request)
    {
        $user = auth()->user();

        session()->flash('fin_password_form', true);

        $data = $this->validate($request, [
            'old_password' => ['required', 'string', 'min:2'],
            'password' => ['required', 'string', 'min:2', 'confirmed'],
        ]);

        if($data['old_password'] != $user->fin_password) {
            return back()->withErrors(['old_password' => 'Текущий финансовый пароль введен неверно!']);
        }

        $user->update(['fin_password' => $data['password']]);

        return redirect()->route('cabinet.password')->with('success', true);
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View|mixed
     */
    public function promo()
    {
        $user = auth()->user();

        $accounts = $user->accounts;

        return view('cabinet.promo', compact('user', 'accounts'));
    }

    protected function getRates(){
        $ratesDB = DB::table('exchange_rates')->where('pair','like','%_usdt')->get();
        $rates = [];
        foreach ($ratesDB as $rate){
            array_push($rates,[
                strtoupper(str_replace('_usdt','',$rate->pair)),
                $rate->rate
            ]);
        }
        array_push($rates,['APY',floatval(config('currencies.apy_usdt'))]);
        return $rates;
    }

    public function investFtxbot()
    {
        $user = auth()->user();
        $depositDetails = config('tariffs')['apy'];
        $rates = $this->getRates();
        return view('cabinet.new.deposits.ftx',compact('user','rates','depositDetails'));
    }
    public function isolated()
    {
        $user = auth()->user();
        $depositDetails = config('tariffs')['apy-stacking'];
        $rates = $this->getRates();

        return view('cabinet.new.deposits.isolatedtradingpairs',compact('user','rates', 'depositDetails'));
    }
    public function liquidity()
    {
        $user = auth()->user();
        $depositDetails = config('tariffs')['liquidity'];
        $rates = $this->getRates();

        return view('cabinet.new.deposits.liquiditypools',compact('user','rates','depositDetails'));
    }
    public function stacking()
    {
        $user = auth()->user();
        $depositDetails = config('tariffs')['defi-stacking'];
        $rates = $this->getRates();

        return view('cabinet.new.deposits.stacking',compact('user','rates','depositDetails'));
    }
    public function stock()
    {
        $user = auth()->user();
        $depositDetails = config('tariffs')['landing'];
        $rates = $this->getRates();

        return view('cabinet.new.deposits.stock',compact('user','rates','depositDetails'));
    }
    public function ido()
    {
        $user = auth()->user();
        if($user->special_product == 0){
            return redirect()->route('cabinet');
        }
        $depositDetails = config('tariffs')['ido'];
        $rates = $this->getRates();

        return view('cabinet.new.deposits.ido',compact('user','rates','depositDetails'));
    }
    /**
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Illuminate\Validation\ValidationException
     */
    public function promocode(Request $request)
    {
        $user = auth()->user();

        if($request->hasFile('avatar')) {
            //dd($request);
            $this->changeAvatar($user, $request);
        }

        /*if($user->promocode()->exists()) {
            return back();
        }*/

        $data = $this->validate($request, [
            'promocode' => ['nullable', 'string', 'exists:promocodes,code'],
        ]);

        if(is_null($data['promocode'] ?? null)) {
            return back()->with('success', true);
        }

        $promocode = Promocode::where('code', $data['promocode'])->first();

        $user->update(['promocode_id' => $promocode->id, 'promocode_used' => false]);

        return back()->with('success', true);
    }

    /**
     * @param User $user
     * @param Request $request
     * @throws \Illuminate\Validation\ValidationException
     */
    protected function changeAvatar(User $user, Request $request)
    {
        $this->validate($request, [
            'avatar' => ['nullable', 'image'],
        ]);

        try {
            $path = $request->file('avatar')->store('public/uploads/avatars');
            $path = Str::replaceFirst('public/', 'storage/', $path);

            $user->update(['avatar_url' => $path]);
        } catch (\Exception $exception) {
            \Log::error($exception);
        }
    }
}
