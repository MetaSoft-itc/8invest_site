<?php

namespace App\Console\Commands;

use App\Account;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;
use Psy\Util\Json;

class UpdateRates extends Command
{
    /**
     * @var array
     */
    protected $currencies = [
        Account::CURRENCY_USD_PM,
        Account::CURRENCY_BNB,
        Account::CURRENCY_BUSD,
        Account::CURRENCY_DOGE,
        Account::CURRENCY_ETH,
        Account::CURRENCY_BTC,
        Account::CURRENCY_XRP,
        Account::CURRENCY_LTC,
        Account::CURRENCY_TRX,
        Account::CURRENCY_USDC,
        Account::CURRENCY_DASH,
        Account::CURRENCY_ATOM,
        Account::CURRENCY_BCH,
        Account::CURRENCY_TON,
        Account::CURRENCY_DOT,
        Account::CURRENCY_UMEE,
        Account::CURRENCY_BLD,
        Account::CURRENCY_RUB_ACC
    ];
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'exchange:update';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Update exchange rates for currencies';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $data = Http::withHeaders([
            'X-CoinAPI-Key' => '2030DC32-E122-473B-87BD-28DE4CDAB895'
        ])->get('https://rest.coinapi.io/v1/exchangerate/USDT?invert=false'.
        '&filter_asset_id='.implode(';',$this->currencies));

        $data = json_decode($data);
        print_r($data);
        //echo $data[0];
        if(isset($data->error)){
            Log::error($data->error);
            return 0;
        }
        foreach ($data->rates as $d){
            DB::table('exchange_rates')->updateOrInsert(
                ['pair'=>strtolower($d->asset_id_quote).'_usdt'],
                [
                    'pair'=>strtolower($d->asset_id_quote).'_usdt',
                    'rate'=>1/$d->rate
                ]
            );
            DB::table('exchange_rates')->updateOrInsert(
                ['pair'=>'usdt_'.strtolower($d->asset_id_quote)],
                [
                    'pair'=>'usdt_'.strtolower($d->asset_id_quote),
                    'rate'=>$d->rate
                ]
            );
        }

        return 0;
    }
}
