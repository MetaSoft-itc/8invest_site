<?php

namespace App\Console\Commands;

use App\Account;
use App\Deposit;
use Illuminate\Console\Command;

class ProcessDeposits extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'deposit:process';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Process deposits';

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
     * @return mixed
     */
    public function handle()
    {
        $deposits = Deposit::where('status', Deposit::STATUS_OPENED)->get();

        foreach ($deposits as $deposit) {
            $percent = $deposit->percent + $deposit->referal_percent;
            $amount = (($deposit->amount / 100000) / 100) * $percent;
            $deposit->increment('balance', $amount * 100000);

            if(now()->getTimestamp() > $deposit->end_time->getTimestamp()) {
                $deposit->user->accounts()->where('currency', $deposit->currency)->increment('balance', $deposit->balance);
                $deposit->update(['status' => Deposit::STATUS_CLOSED]);
            }
        }
    }
}
