<?php $__env->startSection('content'); ?>
    <main class="page-content">
        <div class="page-content__content  user-page">
            <?php echo $__env->make('cabinet._navigation', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <app-invest>
                <div class="user-page__main">
                    <div data-show-animation="fadeInUp" style="width: 100%" class="fadeInUp">
                        <section class="user-section  _full-deck-content">
                            <div class="table-responsive">
                                <table class="table-2 d-block">
                                    <thead>
                                    <tr>
                                        <th><?php echo app('translator')->get('app.Сумма'); ?></th>
                                        <th><?php echo app('translator')->get('app.Валюта'); ?></th>
                                        <th><?php echo app('translator')->get('app.Дата начала'); ?></th>
                                        <th><?php echo app('translator')->get('app.Дата окончания'); ?></th>
                                        <th><?php echo app('translator')->get('app.Процент'); ?></th>
                                        <th><?php echo app('translator')->get('app.Реферальный процент'); ?></th>
                                        <th><?php echo app('translator')->get('app.Статус'); ?></th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php $__empty_1 = true; $__currentLoopData = $deposits; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $deposit): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                        <tr>
                                            <td><?php echo e($deposit->amount / 100); ?></td>
                                            <td>
                                                <?php if($deposit->currency == 'usd'): ?>
                                                    <i class="fas fa-dollar-sign"></i>
                                                <?php elseif($deposit->currency == 'eur'): ?>
                                                    <i class="fas fa-euro-sign"></i>
                                                <?php elseif($deposit->currency == \App\Account::CURRENCY_BTC_ONE): ?>
                                                    <?php echo e(config('crypto.'. \App\Account::CURRENCY_BTC_ONE .'.name')); ?>

                                                <?php elseif($deposit->currency == \App\Account::CURRENCY_BTC_TWO): ?>
                                                    <?php echo e(config('crypto.'. \App\Account::CURRENCY_BTC_TWO .'.name')); ?>

                                                <?php else: ?>
                                                    <i class="fas fa-ruble-sign"></i>
                                                <?php endif; ?>
                                            </td>
                                            <td><?php echo e($deposit->start_time->format('d.m.Y')); ?></td>
                                            <td><?php echo e($deposit->end_time->format('d.m.Y')); ?></td>
                                            <td><?php echo e($deposit->percent); ?></td>
                                            <td><?php echo e($deposit->referal_percent); ?></td>
                                            <td>
                                                <?php if($deposit->status == \App\Deposit::STATUS_OPENED): ?>
                                                    <span class="deposit-opened"><?php echo app('translator')->get('app.Открытый'); ?></span>
                                                <?php elseif($deposit->status == \App\Deposit::STATUS_CLOSED): ?>
                                                    <span class="deposit-closed"><?php echo app('translator')->get('app.Закрытый'); ?></span>
                                                <?php elseif($deposit->status == \App\Deposit::STATUS_CANCELED): ?>
                                                    <span class="deposit-canceled"><?php echo app('translator')->get('app.Отменен'); ?></span>
                                                <?php endif; ?>
                                            </td>
                                        </tr>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                        <tr>
                                            <td colspan="7" class="text-center"><?php echo app('translator')->get('app.Депозитов нет'); ?></td>
                                        </tr>
                                    <?php endif; ?>
                                    </tbody>
                                </table>
                            </div>
                        </section>
                    </div>
                    <?php echo $__env->make('layouts._balance', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                </div>
            </app-invest>
        </div>
    </main>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('old-content'); ?>
<td width="10px"></td>
<td align="left" style="vertical-align:top">
    <?php echo $__env->make('layouts._balance', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <br>
    <div class="ac-bals oper" align="center">
        <script>
            var t0 = new Date().getTime();

            function updateDepoProgress(id, p0, dp) {
                v = p0 + dp * (new Date().getTime() - t0) / 1000 / 60 / 60;
                if (v > 100)
                    v = 100;
                $('#progress' + id).html(v.toFixed(2) + '%');
            }

            function updateDepoProfit(id, z0, dz) {
                v = z0 + dz * (new Date().getTime() - t0) / 1000 / 60 / 60;
                $('#profit' + id).html(v.toFixed(6));
            }
        </script>
        <script>
            var tmrs = [];

            function to2dig(v) {
                return (v < 10 ? '0' + v : v);
            }

            function showtimer(did) {
                document.getElementById('timer' + did).innerHTML = to2dig(tmrs[did][1] * 24 + tmrs[did][2]) + ':' + to2dig(tmrs[did][3]) + ':' + to2dig(tmrs[did][4]);
                var t = tmrs[did][1] * 86400 + tmrs[did][2] * 3600 + tmrs[did][3] * 60 + tmrs[did][4];
                if (t > 0) {
                    changetimer(did);
                    window.setTimeout('showtimer(' + did + ');', 1000);
                } else if (t < 1) {
                    window.clearTimeout(tmrs[did][5]);
                    window.location.reload(true);
                }
            }

            function changetimer(did) {
                tmrs[did][4]--;
                if (tmrs[did][4] < 0) {
                    tmrs[did][4] = 59;
                    tmrs[did][3]--;
                    if (tmrs[did][3] < 0) {
                        tmrs[did][3] = 59;
                        tmrs[did][2]--;
                        if (tmrs[did][2] < 0) {
                            tmrs[did][2] = 23;
                            tmrs[did][1]--;
                            if (tmrs[did][1] < 0) {
                                tmrs[did][1] = 0;
                                tmrs[did][2] = 0;
                                tmrs[did][3] = 0;
                                tmrs[did][4] = 0;
                            }
                        }
                    }
                }
            }

            function inittimer(did, days, hour, min, sec) {
                tmrs[did] = [];
                tmrs[did][1] = Math.max(days, 0);
                tmrs[did][2] = Math.max(hour, 0);
                tmrs[did][3] = Math.max(min, 0);
                tmrs[did][4] = Math.max(sec, 0);
                tmrs[did][5] = window.setTimeout('showtimer(' + did + ');', 1000);
            }
        </script>
        <?php if($deposits->isEmpty()): ?>
            <?php echo app('translator')->get('app.У Вас <b>нет вкладов</b>'); ?><br><br>
        <?php else: ?>
        <div class="ac-bals">
            <table>
                <thead>
                    <tr>
                        <th><?php echo app('translator')->get('app.Сумма'); ?></th>
                        <th><?php echo app('translator')->get('app.Валюта'); ?></th>
                        <th><?php echo app('translator')->get('app.Дата начала'); ?></th>
                        <th><?php echo app('translator')->get('app.Дата окончания'); ?></th>
                        <th><?php echo app('translator')->get('app.Процент'); ?></th>
                        <th><?php echo app('translator')->get('app.Реферальный процент'); ?></th>
                        <th><?php echo app('translator')->get('app.Статус'); ?></th>
                    </tr>
                </thead>
                <tbody>
                <?php $__empty_1 = true; $__currentLoopData = $deposits; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $deposit): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                    <tr>
                        <td><?php echo e($deposit->amount / 100); ?></td>
                        <td>
                            <?php if($deposit->currency == 'usd'): ?>
                                <i class="fas fa-dollar-sign"></i>
                            <?php elseif($deposit->currency == 'eur'): ?>
                                <i class="fas fa-euro-sign"></i>
                            <?php else: ?>
                                <i class="fas fa-ruble-sign"></i>
                            <?php endif; ?>
                        </td>
                        <td><?php echo e($deposit->start_time->format('d.m.Y')); ?></td>
                        <td><?php echo e($deposit->end_time->format('d.m.Y')); ?></td>
                        <td><?php echo e($deposit->percent); ?></td>
                        <td><?php echo e($deposit->referal_percent); ?></td>
                        <td>
                            <?php if($deposit->status == \App\Deposit::STATUS_OPENED): ?>
                                <span class="deposit-opened"><?php echo app('translator')->get('app.Открытый'); ?></span>
                            <?php elseif($deposit->status == \App\Deposit::STATUS_CLOSED): ?>
                                <span class="deposit-closed"><?php echo app('translator')->get('app.Закрытый'); ?></span>
                            <?php elseif($deposit->status == \App\Deposit::STATUS_CANCELED): ?>
                                <span class="deposit-canceled"><?php echo app('translator')->get('app.Отменен'); ?></span>
                            <?php endif; ?>
                        </td>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                    <tr>
                        <td colspan="7" class="text-center"><?php echo app('translator')->get('app.Депозитов нет'); ?></td>
                    </tr>
                <?php endif; ?>
                </tbody>
            </table>
        </div>
        <?php endif; ?>
    </div>
</td>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.front_app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/maksa988/www/invest2/resources/views/cabinet/deposits.blade.php ENDPATH**/ ?>