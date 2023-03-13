<?php

namespace App\Http\Livewire;

use App\Account;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Livewire\Component;

class ConversionForm extends Component
{
    public $currencyOne = Account::CURRENCY_USDT;
    public $currencyTwo = Account::CURRENCY_BTC;
    public $amount = null;

    protected $listeners = ['convert','swap'];

    public $success = null;

    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View|mixed
     */
    public function render()
    {
        $user = auth()->user();

        $accounts = $user->accounts;

        $oneBalance = $accounts->where('currency', $this->currencyOne)->first()->amount;
        $twoBalance = $accounts->where('currency', $this->currencyTwo)->first()->amount;

        $currencyRate = $this->getCurrencyRate();

        $isCanChange = ((float) str_replace(' ', '', $oneBalance))
            >= $this->amount && $this->amount !== null && $this->amount != 0;

        $converted = number_format($this->getConvertedAmount($currencyRate), 5);

        return view('livewire.conversion-form', [
            'currencyOneName' => $this->getCurrencyName($this->currencyOne),
            'currencyTwoName' => $this->getCurrencyName($this->currencyTwo),
            'oneBalance' => $oneBalance,
            'twoBalance' => $twoBalance,
            'currencyRate' => $currencyRate,
            'isCanChange' => $isCanChange,
            'converted' => $converted,
        ]);
    }

    public function updated()
    {
        $this->success = null;
    }

    public function swap(){
        $tmp = $this->currencyOne;
        $this->currencyOne = $this->currencyTwo;
        $this->currencyTwo = $tmp;
        $this->success = null;
    }

    public function convert()
    {
        if(! $this->isCanChange()) {
            return;
        }

        $user = auth()->user();
        $accounts = $user->accounts;

        $firstAccount = $accounts->where('currency', $this->currencyOne)->first();
        $secondAccount = $accounts->where('currency', $this->currencyTwo)->first();

        //$amount = $this->amount * (1 - 3 / 100);
        $amount = $this->amount;

        $firstAccount->decrement('balance', ((float) str_replace(' ', '', $amount)) * 100000);

        $currencyRate = $this->getCurrencyRate();
        $convertedAmount = $this->getConvertedAmount($currencyRate, $amount);

        $secondAccount->increment('balance', $convertedAmount  * 100000);

        $user->conversions()->create([
            'amount' => $amount * 100000,
            'final_amount' => $convertedAmount * 100000,
            'currency_one' => $this->currencyOne,
            'currency_two' => $this->currencyTwo,
        ]);

        $this->success = true;
    }

    protected function getConvertedAmount($currencyRate, $amount = null)
    {
        $amount = $amount ?? $this->amount;

        return ((empty($amount) ? 0 : ((float) $amount))) * $currencyRate;
    }

    protected function isCanChange()
    {
        $user = auth()->user();

        $accounts = $user->accounts;

        $oneBalance = $accounts->where('currency', $this->currencyOne)->first()->amount;

        return ((float) str_replace(' ', '', $oneBalance)) >= $this->amount && $this->amount !== null && $this->amount != 0;
    }

    /**
     * @return \Illuminate\Config\Repository|\Illuminate\Contracts\Foundation\Application|mixed
     */
    protected function getCurrencyRate()
    {
        if($this->currencyOne == Account::CURRENCY_BTC_ONE) {
            $one = 'btc';
        } else if($this->currencyOne == Account::CURRENCY_BTC_TWO) {
            $one = 'eth';
        } else {
            $one = $this->currencyOne;
        }

        if($this->currencyTwo == Account::CURRENCY_BTC_ONE) {
            $two = 'btc';
        } else if($this->currencyTwo == Account::CURRENCY_BTC_TWO) {
            $two = 'eth';
        } else {
            $two = $this->currencyTwo;
        }

        if (DB::table('exchange_rates')->where('pair',strtolower($one) .'_'. strtolower($two))->exists()){
            return DB::table('exchange_rates')->where('pair',strtolower($one) .'_'. strtolower($two))->first()->rate;
        }

        return config('currencies.'. strtolower($one) .'_'. strtolower($two));
    }

    /**
     * @param $currency
     * @return \Illuminate\Config\Repository|\Illuminate\Contracts\Foundation\Application|mixed|string
     */
    protected function getCurrencyName($currency)
    {
        switch ($currency) {
            case Account::CURRENCY_EUR: return config('crypto.eur.name');
            case Account::CURRENCY_BTC_ONE: return config('crypto.btc_one.name');
            case Account::CURRENCY_BTC_TWO: return config('crypto.btc_two.name');
        }

        return Str::upper($currency);
    }
}
