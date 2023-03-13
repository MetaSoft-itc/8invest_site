<?php

namespace App\Http\Controllers;

use App\Account;
use App\Deposit;
use App\Income;
use Illuminate\Http\Request;

class DepositController extends Controller
{
    /**
     * @var array
     */
    protected $currencies = [
        Account::CURRENCY_RUB,
        Account::CURRENCY_USD_PM,
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
        Account::CURRENCY_LTC,
        Account::CURRENCY_TRX,
        Account::CURRENCY_USDT,
        Account::CURRENCY_USDC,
        Account::CURRENCY_DASH,
        Account::CURRENCY_ATOM,
        Account::CURRENCY_BCH,
        Account::CURRENCY_XMR,
        Account::CURRENCY_DOT,
        Account::CURRENCY_UMEE,
        Account::CURRENCY_BLD,
        Account::CURRENCY_APY,
        Account::CURRENCY_RUB_ACC
    ];

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View|mixed
     */
    public function index()
    {
        $user = auth()->user();

        $accounts = $user->accounts;

        $deposits = $user->deposits()->where('status','!=',Deposit::STATUS_CANCELED)->latest('start_time')->get();

        return view('cabinet.new.deposits', compact('user', 'deposits', 'accounts'));
    }

    /**
     * @param Request $request
     * @param Deposit $deposit
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request)
    {
        $minVal = config('currency_limits.'.strtolower($request->input('currency')).'.deposit.min');
        $data = $this->validate($request, [
            'amount' => ['required', 'min:'.$minVal, 'numeric'],
            'pack'=>['required', 'in:'.implode(',',array_keys(config('tariffs')))],
            'days' => ['required', 'min:7', 'numeric'],
            'payment-system'=>['required','in:blockchain,balance'],
            'currency' => ['required', 'string', 'in:'. implode(',', $this->currencies)],
        ]);

        $user = auth()->user();

        if($user->is_verified != 2){
            return redirect()->route('cabinet.verification');
        }

        $percent = config('tariffs.'.$data['pack'].'.percent');
        if ($data['payment-system'] == 'blockchain'){
            $deposit = $user->deposits()->create([
                'name' => config('tariffs.'.$data['pack'].'.title'),
                'amount' => ((float) $data['amount']) * 100000,
                'balance' => ((float) $data['amount']) * 100000,
                'currency' => $data['currency'],
                'start_time' => now(),
                'end_time' => now()->addDays($data['days']),
                'percent' => $percent,
                'status' => Deposit::STATUS_NOT_PAYED,
                'referal_percent' => $this->getReferalsPercent(),
            ]);

            return redirect()->route('cabinet.showWallet', ['id'=>$deposit->id]);
            //view('cabinet.new.deposits.show-wallet',compact('wallets'));
        }


        $data['amount'] = ((float) $data['amount']) * 100000;


        $account = $user->accounts->where('currency', $data['currency'])->first();

        if($account->balance < $data['amount']) {
            return back()->withErrors(['balance' => 'Недостаточно денег на балансе']);
        }

        $account->decrement('balance', $data['amount']);

        $user->deposits()->create([
            'name' => config('tariffs.'.$data['pack'].'.title'),
            'amount' => $data['amount'],
            'balance' => $data['amount'],
            'currency' => $data['currency'],
            'start_time' => now(),
            'end_time' => now()->addDays($data['days']),
            'percent' => $percent,
            'status' => Deposit::STATUS_OPENED,
            'referal_percent' => $this->getReferalsPercent(),
        ]);

        if($user->referal_id !== null && $user->deposits()->count() <= 1) {
//            $user->referal->accounts()->where('currency', Account::CURRENCY_USD)->increment('balance', 10 * 100);
            $user->referal->deposits()->where('status', Deposit::STATUS_OPENED)->increment('referal_percent', Deposit::REFERAL_FIRST_PERCENT);

            if($user->referal->referal !== null) {
//                $user->referal->referal->accounts()->where('currency', Account::CURRENCY_USD)->increment('balance', 5 * 100);
                $user->referal->referal->deposits()->where('status', Deposit::STATUS_OPENED)->increment('referal_percent', Deposit::REFERAL_SECOND_PERCENT);

                if($user->referal->referal->referal !== null) {
//                    $user->referal->referal->referal->accounts()->where('currency', Account::CURRENCY_USD)->increment('balance', 2.5 * 100);
                    $user->referal->referal->referal->deposits()->where('status', Deposit::STATUS_OPENED)->increment('referal_percent', Deposit::REFERAL_THIRD_PERCENT);
                }
            }
        }

        return redirect()->route('cabinet.deposits');
    }

    public function update($deposit, Request $request)
    {
        $user = auth()->user();
        $depositObj = Deposit::query()->whereIn('id',[$deposit]);
        if($request->has('decline')) {
            $depositObj->update(['status' => Deposit::STATUS_CANCELED]);
        } else {
            //make status for confirmation
            $depositObj->update(['status' => Deposit::STATUS_PAYED,'start_time'=>date('Y-m-d',time())]);
        }

        return redirect()->route('cabinet.deposits');
    }

    /**
     * @return float
     */
    protected function getReferalsPercent()
    {
        $user = auth()->user();

        $referals = [];

        $referals[0] = $user->referals()->isDepositet()->get();

        $referals[1] = collect();

        foreach ($referals[0] as $referal) {
            $referals[1] = $referals[1]->merge($referal->referals()->isDepositet()->get());
        }

        $referals[2] = collect();

        foreach ($referals[1] as $referal) {
            $referals[2] = $referals[2]->merge($referal->referals()->isDepositet()->get());
        }

        return ((count($referals[0]) * Deposit::REFERAL_FIRST_PERCENT) + (count($referals[1]) * Deposit::REFERAL_SECOND_PERCENT) + (count($referals[2]) * Deposit::REFERAL_THIRD_PERCENT)) ?? 0;
    }

    /**
     * @param $sum
     * @param string $currency
     * @return float
     */
    protected function getPercent($sum, $currency = Account::CURRENCY_RUB)
    {
        if ($sum < config('tariffs.0.to.'. $currency)) {
            return config('tariffs.0.percent');
        } elseif ($sum >= config('tariffs.1.from.'. $currency) && $sum < config('tariffs.1.to.'. $currency)) {
            return config('tariffs.1.percent');
        } elseif ($sum >= config('tariffs.2.from.'. $currency) && $sum < config('tariffs.2.to.'. $currency)) {
            return config('tariffs.2.percent');
        }

        return config('tariffs.3.percent');
    }
}
