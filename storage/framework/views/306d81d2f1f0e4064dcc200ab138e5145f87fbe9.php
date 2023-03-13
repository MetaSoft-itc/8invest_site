<?php $__env->startSection('title', 'Мои депозиты'); ?>

<?php $__env->startSection('content'); ?>
    <main class="flex flex-column flex-grow trans-margin-left trans-0-3 margin-sidebar">
        <div data-v-4cd0b858=""
             class="padding-y-4 shadowed border-rounded-3 bg-white margin-x-3 margin-top-5 margin-top-6--md margin-top-0--lg">
            <div data-v-4cd0b858="" class="padding-x-3 padding-bottom-4 border-bottom-gray relative">
                <div data-v-4cd0b858="" class="grid grid-row-gap-3 grid-column-gap-4--md shadowed border-rounded-3">
                    <div data-v-400badb9="" data-v-4cd0b858=""
                         class="grid grid-row-gap-3 grid-column-gap-3--sm grid-column-12 grid-column-6--lg relative">
                        <div data-v-400badb9=""
                             class="hidden block--lg vertical-divider absolute right-0 top-0 bottom-0 margin-y-auto"></div>
                        <div data-v-400badb9=""
                             class="flex flex-column items-start justify-between grid-column-12 grid-column-4--sm padding-3 relative">
                            <div data-v-400badb9=""
                                 class="hidden block--sm vertical-divider absolute right-0 top-0 bottom-0 margin-y-auto"></div>
                            <svg data-v-400badb9="" viewBox="0 0 20 19" fill="none" xmlns="http://www.w3.org/2000/svg"
                                 class="height-1-5 margin-bottom-4">
                                <path data-v-400badb9=""
                                      d="M16 17H4v2H2v-2H1a1 1 0 01-1-1V1a1 1 0 011-1h18a1 1 0 011 1v15a1 1 0 01-1 1h-1v2h-2v-2zm-7-6.126V14h2v-3.126A4.002 4.002 0 0010 3a4 4 0 00-1 7.874zM10 9a2 2 0 110-4 2 2 0 010 4z"
                                      fill="#F85446"></path>
                            </svg>
                            <span data-v-400badb9="" class="font-lg"><?php echo e($deposits->count()); ?></span>
                            <div data-v-400badb9="" class="text-accent font-medium"> Всего депозитов</div>
                        </div>
                        <div data-v-400badb9=""
                             class="flex flex-column items-start justify-between grid-column-12 grid-column-4--sm padding-3 relative">
                            <div data-v-400badb9=""
                                 class="hidden block--sm vertical-divider absolute right-0 top-0 bottom-0 margin-y-auto"></div>
                            <svg data-v-400badb9="" viewBox="0 0 21 21" fill="none" xmlns="http://www.w3.org/2000/svg"
                                 class="height-1-5 margin-bottom-4">
                                <path data-v-400badb9=""
                                      d="M8 19H4v2H2v-2H1a1 1 0 01-1-1V3a1 1 0 011-1h7V.59a.5.5 0 01.582-.493l10.582 1.764a1 1 0 01.836.986V5h1v2h-1v7h1v2h-1v2.153a1 1 0 01-.836.986L18 19.333V21h-2v-1.333l-7.418 1.236A.5.5 0 018 20.41V19zm2-.36l8-1.334V3.694l-8-1.333V18.64zM14.5 13c-.828 0-1.5-1.12-1.5-2.5S13.672 8 14.5 8 16 9.12 16 10.5s-.672 2.5-1.5 2.5z"
                                      fill="#569A21"></path>
                            </svg>
                            <span data-v-400badb9="" class="font-lg"><?php echo e($deposits->where('status', \App\Deposit::STATUS_OPENED)->count()); ?></span>
                            <div data-v-400badb9="" class="text-accent font-medium"> Активные депозиты</div>
                        </div>
                        <div data-v-400badb9=""
                             class="flex flex-column items-start justify-between grid-column-12 grid-column-4--sm padding-3 relative">
                            <!---->
                            <svg data-v-400badb9="" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg"
                                 class="height-1-5 margin-bottom-4">
                                <path data-v-400badb9=""
                                      d="M10 20C4.477 20 0 15.523 0 10S4.477 0 10 0s10 4.477 10 10-4.477 10-10 10zm4.891-13.477a6.04 6.04 0 00-1.414-1.414l-8.368 8.368a6.04 6.04 0 001.414 1.414l8.368-8.368z"
                                      fill="#7E839A"></path>
                            </svg>
                            <span data-v-400badb9="" class="font-lg"><?php echo e($deposits->where('status', '!=', \App\Deposit::STATUS_OPENED)->count()); ?></span>
                            <div data-v-400badb9="" class="text-accent font-medium"> Закрытые депозиты</div>
                        </div>
                    </div>
                    <div data-v-4cd0b858="" class="grid-column-12 grid-column-6--lg padding-3">
                        <div data-v-4cd0b858="" class="overflow-auto">
                            <table data-v-4cd0b858="" class="font-sm width-full">
                                <thead data-v-4cd0b858="">
                                <tr data-v-4cd0b858="" class="color-gray text-bottom text-nowrap">
                                    <th data-v-4cd0b858="" class="text-left font-medium">Валюта</th>
                                    <th data-v-4cd0b858="" class="text-right font-medium">Всего инвестировано</th>
                                    <th data-v-4cd0b858="" class="text-right font-medium">Всего процентов</th>
                                </tr>
                                </thead>
                                <tbody data-v-4cd0b858="">
                                <tr data-v-4cd0b858="">
                                    <td data-v-4cd0b858="" class="padding-y-1">
                                        <div data-v-4cd0b858="" class="flex items-center font-medium">
                                            USD
                                        </div>
                                    </td>
                                    <td data-v-4cd0b858="" class="text-right padding-y-1"> <?php echo e($deposits->where('currency', 'usd')->sum('amount') / 100000); ?>

                                        <span data-v-4cd0b858="" class="color-gray"> USD </span>
                                    </td>
                                    <td data-v-4cd0b858="" class="text-right font-medium color-green padding-y-1"><?php echo e($deposits->where('currency', 'usd')->sum('percent')); ?>%
                                    </td>
                                </tr>
                                <tr data-v-4cd0b858="">
                                    <td data-v-4cd0b858="" class="padding-y-1">
                                        <div data-v-4cd0b858="" class="flex items-center font-medium">
                                            AM
                                        </div>
                                    </td>
                                    <td data-v-4cd0b858="" class="text-right padding-y-1"> <?php echo e($deposits->where('currency', 'eur')->sum('amount') / 100000); ?>

                                        <span data-v-4cd0b858="" class="color-gray"> AM </span>
                                    </td>
                                    <td data-v-4cd0b858="" class="text-right font-medium color-green padding-y-1"><?php echo e($deposits->where('currency', 'eur')->sum('percent')); ?>%
                                    </td>
                                </tr>
                                <tr data-v-4cd0b858="">
                                    <td data-v-4cd0b858="" class="padding-y-1">
                                        <div data-v-4cd0b858="" class="flex items-center font-medium">
                                            RUB
                                        </div>
                                    </td>
                                    <td data-v-4cd0b858="" class="text-right padding-y-1"> <?php echo e($deposits->where('currency', 'rub')->sum('amount') / 100000); ?>

                                        <span data-v-4cd0b858="" class="color-gray"> RUB </span>
                                    </td>
                                    <td data-v-4cd0b858="" class="text-right font-medium color-green padding-y-1"><?php echo e($deposits->where('currency', 'rub')->sum('percent')); ?>%
                                    </td>
                                </tr>
                                <tr data-v-4cd0b858="">
                                    <td data-v-4cd0b858="" class="padding-y-1">
                                        <div data-v-4cd0b858="" class="flex items-center font-medium">
                                            <?php echo e(config('crypto.'. \App\Account::CURRENCY_BTC_ONE .'.name')); ?>

                                        </div>
                                    </td>
                                    <td data-v-4cd0b858="" class="text-right padding-y-1"> <?php echo e($deposits->where('currency', \App\Account::CURRENCY_BTC_ONE)->sum('amount') / 100000); ?>

                                        <span data-v-4cd0b858="" class="color-gray"> <?php echo e(config('crypto.'. \App\Account::CURRENCY_BTC_ONE .'.name')); ?> </span>
                                    </td>
                                    <td data-v-4cd0b858="" class="text-right font-medium color-green padding-y-1"><?php echo e($deposits->where('currency', \App\Account::CURRENCY_BTC_ONE)->sum('percent')); ?>%
                                    </td>
                                </tr>

                                <tr data-v-4cd0b858="">
                                    <td data-v-4cd0b858="" class="padding-y-1">
                                        <div data-v-4cd0b858="" class="flex items-center font-medium">
                                            <?php echo e(config('crypto.'. \App\Account::CURRENCY_BTC_TWO .'.name')); ?>

                                        </div>
                                    </td>
                                    <td data-v-4cd0b858="" class="text-right padding-y-1"> <?php echo e($deposits->where('currency', \App\Account::CURRENCY_BTC_TWO)->sum('amount') / 100000); ?>

                                        <span data-v-4cd0b858="" class="color-gray"> <?php echo e(config('crypto.'. \App\Account::CURRENCY_BTC_TWO .'.name')); ?> </span>
                                    </td>
                                    <td data-v-4cd0b858="" class="text-right font-medium color-green padding-y-1"><?php echo e($deposits->where('currency', \App\Account::CURRENCY_BTC_TWO)->sum('percent')); ?>%
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

            </div>

            <div data-v-4cd0b858="" class="padding-x-3 padding-top-3">
                <div data-v-4cd0b858="" class="border-rounded-3 padding-0-15 shadowed overflow-auto">
                    <table data-v-4cd0b858="" class="table width-full text-nowrap table--no-hover">
                        <thead data-v-4cd0b858="">
                        <tr data-v-4cd0b858="" class="font-sm color-gray bg-litest-gray">
                            <th class="padding-3 font-medium text-left">Тип депозита</th>
                            <th class="padding-3 font-medium text-left">Вложено</th>
                            <th class="padding-3 font-medium text-left">Дата открытия</th>
                            <th class="padding-3 font-medium text-left"><?php echo app('translator')->get('app.Дата окончания'); ?></th>
                            <th class="padding-3 font-medium text-left"><?php echo app('translator')->get('app.Процент'); ?></th>
                            <th class="padding-3 font-medium text-left"><?php echo app('translator')->get('app.Реферальный процент'); ?></th>
                            <th class="padding-3 font-medium text-left"><?php echo app('translator')->get('app.Статус'); ?></th>
                        </tr>
                        </thead>
                        <tbody data-v-4cd0b858="">
                        <?php $__empty_1 = true; $__currentLoopData = $deposits; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $deposit): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                            <tr>
                                <td class="padding-3 font-medium text-left"><?php echo e(\App\Support\Helpers::getTariff($deposit->amount, $deposit->currency)['title']); ?></td>
                                <td class="padding-3 font-medium text-left">
                                    <?php echo e($deposit->amount / 100000); ?>

                                    <?php if($deposit->currency == 'usd'): ?>
                                        USD
                                    <?php elseif($deposit->currency == 'eur'): ?>
                                        AM
                                    <?php elseif($deposit->currency == \App\Account::CURRENCY_BTC_ONE): ?>
                                        <?php echo e(config('crypto.'. \App\Account::CURRENCY_BTC_ONE .'.name')); ?>

                                    <?php elseif($deposit->currency == \App\Account::CURRENCY_BTC_TWO): ?>
                                        <?php echo e(config('crypto.'. \App\Account::CURRENCY_BTC_TWO .'.name')); ?>

                                    <?php else: ?>
                                        RUB
                                    <?php endif; ?>
                                </td>
                                <td class="padding-3 font-medium text-left"><?php echo e($deposit->start_time->format('d.m.Y')); ?></td>
                                <td class="padding-3 font-medium text-left"><?php echo e($deposit->end_time->format('d.m.Y')); ?></td>
                                <td class="padding-3 font-medium text-left"><?php echo e($deposit->percent); ?> %</td>
                                <td class="padding-3 font-medium text-left"><?php echo e($deposit->referal_percent); ?> %</td>
                                <td class="padding-3 font-medium text-left">
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
                                <td data-v-4cd0b858="" colspan="7"
                                    class="text-center text-accent padding-3 color-gray font-medium"><?php echo app('translator')->get('app.Депозитов нет'); ?><
                                </td>
                            </tr>
                        <?php endif; ?>
                        </tbody>
                    </table>
                </div>
            </div><!----><!----><!----></div>
    </main>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('old-content'); ?>
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
                                            <td><?php echo e($deposit->amount / 100000); ?></td>
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

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/invest/resources/views/cabinet/deposits.blade.php ENDPATH**/ ?>