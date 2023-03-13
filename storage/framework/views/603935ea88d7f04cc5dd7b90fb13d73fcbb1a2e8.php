<?php $__env->startSection('hide'); ?>
<table width="99%">
    <tbody>
    <tr>
        <td width="49%" align="left" style="vertical-align:top;">
            <div class="ac-bals-it b1">
                <p><?php echo app('translator')->get('app.Баланс аккаунта'); ?>:</p>
                <span><?php echo e($accounts->where('currency', \App\Account::CURRENCY_RUB)->first()->amount); ?> <i class="fas fa-ruble-sign"></i></span>
                <span><?php echo e($accounts->where('currency', \App\Account::CURRENCY_USD)->first()->amount); ?> <i class="fas fa-dollar-sign"></i></span>
                <span><?php echo e($accounts->where('currency', \App\Account::CURRENCY_EUR)->first()->amount); ?> <i class="fas fa-euro-sign"></i></span>
                <span><?php echo e($accounts->where('currency', \App\Account::CURRENCY_BTC_ONE)->first()->amount); ?> <?php echo e(config('crypto.'. \App\Account::CURRENCY_BTC_ONE .'.name')); ?></span>
                <span><?php echo e($accounts->where('currency', \App\Account::CURRENCY_BTC_TWO)->first()->amount); ?> <?php echo e(config('crypto.'. \App\Account::CURRENCY_BTC_TWO .'.name')); ?></span>
            </div>
        </td>
        <td width="1%"></td>
        <td width="50%" align="left" style="vertical-align:top;">
            <div class="ac-bals-it b2">
                <p><?php echo app('translator')->get('app.На депозитах'); ?>:</p>
                <span><?php echo e($accounts->where('currency', \App\Account::CURRENCY_RUB)->first()->deposits); ?> <i class="fas fa-ruble-sign"></i></span>
                <span><?php echo e($accounts->where('currency', \App\Account::CURRENCY_USD)->first()->deposits); ?> <i class="fas fa-dollar-sign"></i></span>
                <span><?php echo e($accounts->where('currency', \App\Account::CURRENCY_EUR)->first()->deposits); ?> <i class="fas fa-euro-sign"></i></span>
                <span><?php echo e($accounts->where('currency', \App\Account::CURRENCY_BTC_ONE)->first()->deposits); ?> <?php echo e(config('crypto.'. \App\Account::CURRENCY_BTC_ONE .'.name')); ?></span>
                <span><?php echo e($accounts->where('currency', \App\Account::CURRENCY_BTC_TWO)->first()->deposits); ?> <?php echo e(config('crypto.'. \App\Account::CURRENCY_BTC_TWO .'.name')); ?></span>
            </div>
        </td>
    </tr>
    </tbody>
</table>
<?php $__env->stopSection(); ?>

<app-user-wallet><!---->
    <section class="user-page__linear-table-wrap user-section fadeInUp"
             data-show-animation="fadeInUp">
        <table class="linear-table  _adapt">
            <tbody>
            <tr>
                <td><?php echo app('translator')->get('app.Баланс аккаунта'); ?></td>
                <td><?php echo e($accounts->where('currency', \App\Account::CURRENCY_RUB)->first()->amount); ?> <i class="fas fa-ruble-sign"></i></td>
                <td><?php echo e($accounts->where('currency', \App\Account::CURRENCY_USD)->first()->amount); ?> <i class="fas fa-dollar-sign"></i></td>
                <td><?php echo e($accounts->where('currency', \App\Account::CURRENCY_EUR)->first()->amount); ?> <i class="fas fa-euro-sign"></i></td>
                <td><?php echo e($accounts->where('currency', \App\Account::CURRENCY_BTC_ONE)->first()->amount); ?> <?php echo e(config('crypto.'. \App\Account::CURRENCY_BTC_ONE .'.name')); ?></td>
                <td><?php echo e($accounts->where('currency', \App\Account::CURRENCY_BTC_TWO)->first()->amount); ?> <?php echo e(config('crypto.'. \App\Account::CURRENCY_BTC_TWO .'.name')); ?></td>
            </tr>
            <tr>
                <td>На депозитах</td>
                <td><?php echo e($accounts->where('currency', \App\Account::CURRENCY_RUB)->first()->deposits); ?> <i class="fas fa-ruble-sign"></i></td>
                <td><?php echo e($accounts->where('currency', \App\Account::CURRENCY_USD)->first()->deposits); ?> <i class="fas fa-dollar-sign"></i></td>
                <td><?php echo e($accounts->where('currency', \App\Account::CURRENCY_EUR)->first()->deposits); ?> <i class="fas fa-euro-sign"></i></td>
                <td><?php echo e($accounts->where('currency', \App\Account::CURRENCY_BTC_ONE)->first()->deposits); ?> <?php echo e(config('crypto.'. \App\Account::CURRENCY_BTC_ONE .'.name')); ?></td>
                <td><?php echo e($accounts->where('currency', \App\Account::CURRENCY_BTC_TWO)->first()->deposits); ?> <?php echo e(config('crypto.'. \App\Account::CURRENCY_BTC_TWO .'.name')); ?></td>
            </tr>
            </tbody>
        </table>
    </section>
</app-user-wallet>
<?php /**PATH /home/d33kei/Documents/Lar_Cry/invest/resources/views/layouts/_balance.blade.php ENDPATH**/ ?>