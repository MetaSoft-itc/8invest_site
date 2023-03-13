<?php

namespace App\Http\Controllers;

use App\Account;
use App\Deposit;
use App\Income;
use App\Outcome;
use Illuminate\Http\Request;

class OutcomeController extends Controller
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

        $outcomes = $user->outcomes;

        $accounts = $user->accounts;

        $requisites = $user->requisites()->get()->keyBy('type')->keys()->toArray();

        $hasClosedDeposit = $user->deposits()->where('status', Deposit::STATUS_CLOSED)->exists();

        return view('cabinet.outcome.index', compact('user', 'outcomes', 'accounts', 'requisites', 'hasClosedDeposit'));
    }

    /**
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request)
    {
        $data = $this->validate($request, [
            'amount' => ['required', 'numeric', 'min:0'],
            'currency' => ['required', 'string', 'in:'. implode(',', $this->currencies)],
            'payment_system' => ['required', 'string'],
            'wallet' => ['nullable', 'string'],
            'fin_password' => ['required', 'string'],
        ]);
        //dd($data);

        //$data['payment_system'] = array_search($data['currency'],array_column(Outcome::getSystems(),'short'));

        $user = auth()->user();

        if($user->fin_password != $data['fin_password']) {
            return back()->withErrors("Финансовый пароль указан неверно!");
        }

/*        if(! $user->requisites()->where('type', $data['currency'])->exists()) {
            return back()->withErrors(['payment_system' => 'Дляz выбранного способа не указаны реквизиты']);
        }

        if(empty($data['wallet'])) {
            $data['wallet'] = $user->requisites()->where('type', $data['payment_system'])->first()->value;

            if(empty($data['wallet'])) {
                return back()->withErrors(['payment_system' => 'Для выбранного способа не указаны реквизиты']);
            }
        } else {
            $user->requisites()->firstOrCreate(['type' => $data['payment_system']], [
                'value' => $data['wallet'],
            ])->update([
                'type' => $data['payment_system'],
                'value' => $data['wallet'],
            ]);
        }*/
        if($data['currency'] == 'RUB'){
            if(! $user->requisites()->where('type', Income::enumByString($data['payment_system']))->exists()) {
                return back()->withErrors(['payment_system' => 'Для выбранного способа не указаны реквизиты']);
            }
            $data['wallet'] = $user->requisites()->where('type', Income::enumByString($data['payment_system']))->first()->value;

        }else{
            if(! $user->requisites()->where('type', Income::enumByString($data['currency']))->exists()) {
                return back()->withErrors(['payment_system' => 'Для выбранного способа не указаны реквизиты']);
            }
            $data['wallet'] = $user->requisites()->where('type', Income::enumByString($data['currency']))->first()->value;
        }


        $account = $user->accounts->where('currency', $data['currency'])->first();

        $data['payment_system'] = Income::enumByString($data['payment_system']);

        $data['amount'] = $data['amount'] * 100000;

        if($account->balance < $data['amount']) {
            return back()->withErrors(['balance' => 'Недостаточно денег на балансе']);
        }

        $account->decrement('balance', $data['amount']);
        $account->save();

        $user->outcomes()->create($data);

        return redirect()->route('cabinet.deals', ['mode=outcomes']);
    }
}
