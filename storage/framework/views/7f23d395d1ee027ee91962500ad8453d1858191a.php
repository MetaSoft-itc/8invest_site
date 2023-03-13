<?php $__env->startSection('title', 'Сделки'); ?>

<?php $__env->startSection('content'); ?>
    <main class="flex flex-column flex-grow trans-margin-left trans-0-3 margin-sidebar">
        <div data-v-4cd0b858="" class="shadowed border-rounded-3 bg-white margin-x-3 margin-top-5 margin-top-6--md margin-top-0--lg">
            <div data-v-4cd0b858="">
                <div class="shadowed border-rounded-3 bg-white margin-x-3 margin-top-5 margin-top-6--md margin-top-0--lg">
                    <ul data-v-4aba4d7a="" class="margin-y-0 margin-bottom-4 padding-x-3 no-list flex--md border-bottom-gray relative">
                        <li data-v-4aba4d7a="" class="margin-bottom-2 margin-bottom-0--md margin-right-4--md">
                            <a href="<?php echo e(route('cabinet.deals', ['mode' => 'incomes'])); ?>" data-v-4aba4d7a="" class="tab flex items-center text-accent font-medium relative <?php if($mode == 'incomes'): ?> router-link-exact-active router-link-active tab--active <?php endif; ?>" aria-current="page">
                                <svg data-v-481c1e7a="" viewBox="0 0 18 20" fill="none" xmlns="http://www.w3.org/2000/svg" class="<?php if($mode == 'incomes'): ?> fill-primary <?php else: ?> fill-gray <?php endif; ?> height-1-25 margin-right-2 flex-no-shrink"><path data-v-481c1e7a="" d="M13 0l5 5v14.008a.993.993 0 01-.993.992H.993A1 1 0 010 19.008V.992C0 .444.445 0 .993 0H13zm-3 10V6H8v4H5l4 4 4-4h-3z" fill="#9195A8"></path></svg>
                                Пополнения
                            </a>
                        </li>
                        <li data-v-4aba4d7a="" class="margin-bottom-2 margin-bottom-0--md margin-right-4--md">
                            <a href="<?php echo e(route('cabinet.deals', ['mode' => 'outcomes'])); ?>" data-v-4aba4d7a="" class="tab flex items-center text-accent font-medium relative <?php if($mode == 'outcomes'): ?> router-link-exact-active router-link-active tab--active <?php endif; ?>" aria-current="page">
                                <svg data-v-481c1e7a="" viewBox="0 0 18 20" fill="none" xmlns="http://www.w3.org/2000/svg" class="<?php if($mode == 'outcomes'): ?> fill-primary <?php else: ?> fill-gray <?php endif; ?> height-1-25 margin-right-2 flex-no-shrink"><path data-v-481c1e7a="" d="M13 0l5 5v14.008a.993.993 0 01-.993.992H.993A1 1 0 010 19.008V.992C0 .444.445 0 .993 0H13zm-3 10h3L9 6l-4 4h3v4h2v-4z" fill="#9195A8"></path></svg>
                                Выводы
                            </a>
                        </li>
                        <li data-v-4aba4d7a="" class="margin-bottom-2 margin-bottom-0--md margin-right-4--md">
                            <a href="<?php echo e(route('cabinet.deals', ['mode' => 'conversions'])); ?>" data-v-4aba4d7a="" class="tab flex items-center text-accent font-medium relative <?php if($mode == 'conversions'): ?> router-link-exact-active router-link-active tab--active <?php endif; ?>" aria-current="page">
                                <svg data-v-481c1e7a="" viewBox="0 0 20 18" fill="none" xmlns="http://www.w3.org/2000/svg" class="<?php if($mode == 'conversions'): ?> fill-primary <?php else: ?> fill-gray <?php endif; ?> height-1-25 margin-right-2 flex-no-shrink"><path data-v-481c1e7a="" d="M1 0h18a1 1 0 011 1v16a1 1 0 01-1 1H1a1 1 0 01-1-1V1a1 1 0 011-1zm12 4v2H9v2h4v2l3.5-3L13 4zM7 14v-2h4v-2H7V8l-3.5 3L7 14z" fill="#9195A8"></path></svg>
                                Конвертации
                            </a>
                        </li>
                    </ul>
                    <?php if($mode === 'incomes'): ?>
                        <table data-v-4c61e7bd="" class="table width-full table--no-hover">
                            <thead data-v-4c61e7bd="">
                            <tr data-v-4c61e7bd="" class="font-sm color-gray bg-litest-gray text-nowrap">
                                <th class="padding-3 font-medium text-left"><?php echo app('translator')->get('app.Код'); ?></th>
                                <th class="padding-3 font-medium text-left"><?php echo app('translator')->get('app.Сумма'); ?></th>
                                <th class="padding-3 font-medium text-left"><?php echo app('translator')->get('app.Валюта'); ?></th>
                                <th class="padding-3 font-medium text-left"><?php echo app('translator')->get('app.Система'); ?></th>
                                <th class="padding-3 font-medium text-left"><?php echo app('translator')->get('app.Дата'); ?></th>
                                <th class="padding-3 font-medium text-left"><?php echo app('translator')->get('app.Статус'); ?></th>
                            </tr>
                            </thead>
                            <tbody data-v-4c61e7bd=""><!---->
                            <?php $__empty_1 = true; $__currentLoopData = $incomes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $income): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                <tr>
                                    <td class="padding-3 font-medium text-left"><?php echo e($income->id); ?></td>
                                    <td>
                                        <?php echo e($income->amount / 100000); ?>


                                        <?php if($income->currency == 'usd'): ?>
                                            USD
                                        <?php elseif($income->currency == 'eur'): ?>
                                            EUR
                                        <?php elseif($income->currency == \App\Account::CURRENCY_BTC_ONE): ?>
                                            <?php echo e(config('crypto.'. \App\Account::CURRENCY_BTC_ONE .'.name')); ?>

                                        <?php elseif($income->currency == \App\Account::CURRENCY_BTC_TWO): ?>
                                            <?php echo e(config('crypto.'. \App\Account::CURRENCY_BTC_TWO .'.name')); ?>

                                        <?php else: ?>
                                            RUB
                                        <?php endif; ?>

                                        <?php if($income->promocode_id !== null): ?>
                                            +<?php echo e($income->promocode->value); ?>%
                                        <?php endif; ?>

                                        <?php if($income->invite_bonus && $income->invite_bonus !== 0): ?>
                                            +<?php echo e($income->invite_bonus); ?>%
                                        <?php endif; ?>
                                    </td>
                                    <td class="padding-3 font-medium text-left">
                                        <?php if($income->currency == 'usd'): ?>
                                            USD
                                        <?php elseif($income->currency == 'eur'): ?>
                                            EUR
                                        <?php elseif($income->currency == 'eur'): ?>
                                            EUR
                                        <?php elseif($income->currency == \App\Account::CURRENCY_BTC_ONE): ?>
                                            <?php echo e(config('crypto.'. \App\Account::CURRENCY_BTC_ONE .'.name')); ?>

                                        <?php elseif($income->currency == \App\Account::CURRENCY_BTC_TWO): ?>
                                            <?php echo e(config('crypto.'. \App\Account::CURRENCY_BTC_TWO .'.name')); ?>

                                        <?php else: ?>
                                            RUB
                                        <?php endif; ?>
                                    </td>
                                    <td class="padding-3 font-medium text-left">
                                        <?php if($income->payment_system == \App\Income::QIWI): ?>
                                            QIWI
                                        <?php elseif($income->payment_system == \App\Income::PAYEER): ?>
                                            PAYEER
                                        <?php elseif($income->payment_system == \App\Income::PERFECT_MONEY): ?>
                                            Perfect Money
                                        <?php elseif($income->payment_system == \App\Income::BITCOIN): ?>
                                            Bitcoin
                                        <?php elseif($income->payment_system == \App\Income::CARD): ?>
                                            Банковская карта
                                        <?php elseif($income->payment_system == \App\Income::ADVACASH): ?>
                                            Advacash
                                        <?php elseif($income->payment_system == \App\Income::YANDEX): ?>
                                            Яндекс Деньги
                                        <?php endif; ?>
                                    </td>
                                    <td class="padding-3 font-medium text-left"><?php echo e($income->created_at->format('d.m.Y')); ?></td>
                                    <td class="padding-3 font-medium text-left">
                                        <?php if($income->status == \App\Income::STATUS_WAITING): ?>
                                            <?php echo app('translator')->get('app.В ожидании'); ?> <a href="<?php echo e(route('cabinet.income.requisites', $income)); ?>"><?php echo app('translator')->get('app.Получить реквизиты'); ?></a>
                                        <?php elseif($income->status == \App\Income::STATUS_SUCCESS): ?>
                                            <?php echo app('translator')->get('app.Обработано'); ?>
                                        <?php elseif($income->status == \App\Income::STATUS_ERROR): ?>
                                            <?php echo app('translator')->get('app.Ошибка'); ?>
                                        <?php elseif($income->status == \App\Income::STATUS_PAID_BY_USER): ?>
                                            <?php echo app('translator')->get('Оплачено'); ?>
                                        <?php elseif($income->status == \App\Income::STATUS_CANCELED): ?>
                                            <?php echo app('translator')->get('app.Отменено'); ?>
                                        <?php endif; ?>
                                    </td>
                                </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                <tr data-v-4c61e7bd="">
                                    <td colspan="6" class="text-center text-accent padding-3 color-gray font-medium"> Список пуст</td>
                                </tr>
                            <?php endif; ?>
                            </tbody>
                        </table>
                    <?php endif; ?>
                    <?php if($mode == 'outcomes'): ?>
                        <table data-v-4c61e7bd="" class="table width-full table--no-hover">
                            <thead data-v-4c61e7bd="">
                            <tr data-v-4c61e7bd="" class="font-sm color-gray bg-litest-gray text-nowrap">
                                <th class="padding-3 font-medium text-left"><?php echo app('translator')->get('app.Код'); ?></th>
                                <th class="padding-3 font-medium text-left"><?php echo app('translator')->get('app.Сумма'); ?></th>
                                <th class="padding-3 font-medium text-left"><?php echo app('translator')->get('app.Валюта'); ?></th>
                                <th class="padding-3 font-medium text-left"><?php echo app('translator')->get('app.Система'); ?></th>
                                <th class="padding-3 font-medium text-left"><?php echo app('translator')->get('app.Дата'); ?></th>
                                <th class="padding-3 font-medium text-left"><?php echo app('translator')->get('app.Статус'); ?></th>
                            </tr>
                            </thead>
                            <tbody data-v-4c61e7bd=""><!---->
                            <?php $__empty_1 = true; $__currentLoopData = $outcomes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $outcome): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                <tr>
                                    <td class="padding-3 font-medium text-left"><?php echo e($outcome->id); ?></td>
                                    <td class="padding-3 font-medium text-left">
                                        <?php echo e($outcome->amount / 100000); ?>


                                        <?php if($outcome->currency == 'usd'): ?>
                                            USD
                                        <?php elseif($outcome->currency == 'eur'): ?>
                                            EUR
                                        <?php elseif($outcome->currency == \App\Account::CURRENCY_BTC_ONE): ?>
                                            <?php echo e(config('crypto.'. \App\Account::CURRENCY_BTC_ONE .'.name')); ?>

                                        <?php elseif($outcome->currency == \App\Account::CURRENCY_BTC_TWO): ?>
                                            <?php echo e(config('crypto.'. \App\Account::CURRENCY_BTC_TWO .'.name')); ?>

                                        <?php else: ?>
                                            RUB
                                        <?php endif; ?>
                                    </td>
                                    <td class="padding-3 font-medium text-left">
                                        <?php if($outcome->currency == 'usd'): ?>
                                            USD
                                        <?php elseif($outcome->currency == 'eur'): ?>
                                            EUR
                                        <?php elseif($outcome->currency == \App\Account::CURRENCY_BTC_ONE): ?>
                                            <?php echo e(config('crypto.'. \App\Account::CURRENCY_BTC_ONE .'.name')); ?>

                                        <?php elseif($outcome->currency == \App\Account::CURRENCY_BTC_TWO): ?>
                                            <?php echo e(config('crypto.'. \App\Account::CURRENCY_BTC_TWO .'.name')); ?>

                                        <?php else: ?>
                                            RUB
                                        <?php endif; ?>
                                    </td>
                                    <td class="padding-3 font-medium text-left">
                                        <?php if($outcome->payment_system == \App\Outcome::QIWI): ?>
                                            QIWI
                                        <?php elseif($outcome->payment_system == \App\Outcome::PAYEER): ?>
                                            PAYEER
                                        <?php elseif($outcome->payment_system == \App\Outcome::PERFECT_MONEY): ?>
                                            Perfect Money
                                        <?php elseif($outcome->payment_system == \App\Outcome::BITCOIN): ?>
                                            Bitcoin
                                        <?php elseif($outcome->payment_system == \App\Outcome::CARD): ?>
                                            Банковская карта
                                        <?php elseif($outcome->payment_system == \App\Outcome::ADVACASH): ?>
                                            Advacash
                                        <?php elseif($outcome->payment_system == \App\Outcome::YANDEX): ?>
                                            Яндекс Деньги
                                        <?php endif; ?>
                                    </td>
                                    <td class="padding-3 font-medium text-left"><?php echo e($outcome->created_at->format('d.m.Y')); ?></td>
                                    <td class="padding-3 font-medium text-left">
                                        <?php if($outcome->status == \App\Outcome::STATUS_WAITING): ?>
                                            <?php echo app('translator')->get('app.В ожидании'); ?>
                                        <?php elseif($outcome->status == \App\Outcome::STATUS_SUCCESS): ?>
                                            <?php echo app('translator')->get('app.Обработано'); ?>
                                        <?php elseif($outcome->status == \App\Outcome::STATUS_ERROR): ?>
                                            <?php echo app('translator')->get('app.Ошибка'); ?>
                                        <?php elseif($outcome->status == \App\Outcome::STATUS_CANCELED): ?>
                                            <?php echo app('translator')->get('app.Отменено'); ?>
                                        <?php endif; ?>
                                    </td>
                                </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                <tr data-v-4c61e7bd="">
                                    <td colspan="6" class="text-center text-accent padding-3 color-gray font-medium"> Список пуст</td>
                                </tr>
                            <?php endif; ?>
                            </tbody>
                        </table>
                    <?php endif; ?>
                    <?php if($mode == 'conversions'): ?>
                        <table data-v-4c61e7bd="" class="table width-full table--no-hover">
                            <thead data-v-4c61e7bd="">
                            <tr data-v-4c61e7bd="" class="font-sm color-gray bg-litest-gray text-nowrap">
                                <th class="padding-3 font-medium text-left">Сумма с</th>
                                <th class="padding-3 font-medium text-left">Валюта с</th>
                                <th class="padding-3 font-medium text-left">Сумма в</th>
                                <th class="padding-3 font-medium text-left">Валюта в</th>
                                <th class="padding-3 font-medium text-left"><?php echo app('translator')->get('app.Дата'); ?></th>
                            </tr>
                            </thead>
                            <tbody data-v-4c61e7bd=""><!---->
                            <?php $__empty_1 = true; $__currentLoopData = $conversions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $conversion): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                <tr>
                                    <td class="padding-3 font-medium text-left">
                                        <?php echo e($conversion->amount / 100000); ?>


                                        <?php if($conversion->currency_one == 'usd'): ?>
                                            USD
                                        <?php elseif($conversion->currency_one == 'eur'): ?>
                                            EUR
                                        <?php elseif($conversion->currency_one == \App\Account::CURRENCY_BTC_ONE): ?>
                                            <?php echo e(config('crypto.'. \App\Account::CURRENCY_BTC_ONE .'.name')); ?>

                                        <?php elseif($conversion->currency_one == \App\Account::CURRENCY_BTC_TWO): ?>
                                            <?php echo e(config('crypto.'. \App\Account::CURRENCY_BTC_TWO .'.name')); ?>

                                        <?php else: ?>
                                            RUB
                                        <?php endif; ?>
                                    </td>
                                    <td class="padding-3 font-medium text-left">
                                        <?php if($conversion->currency_one == 'usd'): ?>
                                            USD
                                        <?php elseif($conversion->currency_one == 'eur'): ?>
                                            EUR
                                        <?php elseif($conversion->currency_one == \App\Account::CURRENCY_BTC_ONE): ?>
                                            <?php echo e(config('crypto.'. \App\Account::CURRENCY_BTC_ONE .'.name')); ?>

                                        <?php elseif($conversion->currency_one == \App\Account::CURRENCY_BTC_TWO): ?>
                                            <?php echo e(config('crypto.'. \App\Account::CURRENCY_BTC_TWO .'.name')); ?>

                                        <?php else: ?>
                                            RUB
                                        <?php endif; ?>
                                    </td>
                                    <td class="padding-3 font-medium text-left">
                                        <?php echo e($conversion->final_amount / 100000); ?>


                                        <?php if($conversion->currency_two == 'usd'): ?>
                                            USD
                                        <?php elseif($conversion->currency_two == 'eur'): ?>
                                            EUR
                                        <?php elseif($conversion->currency_two == \App\Account::CURRENCY_BTC_ONE): ?>
                                            <?php echo e(config('crypto.'. \App\Account::CURRENCY_BTC_ONE .'.name')); ?>

                                        <?php elseif($conversion->currency_two == \App\Account::CURRENCY_BTC_TWO): ?>
                                            <?php echo e(config('crypto.'. \App\Account::CURRENCY_BTC_TWO .'.name')); ?>

                                        <?php else: ?>
                                            RUB
                                        <?php endif; ?>
                                    </td>
                                    <td class="padding-3 font-medium text-left">
                                        <?php if($conversion->currency_two == 'usd'): ?>
                                            USD
                                        <?php elseif($conversion->currency_two == 'eur'): ?>
                                            EUR
                                        <?php elseif($conversion->currency_two == \App\Account::CURRENCY_BTC_ONE): ?>
                                            <?php echo e(config('crypto.'. \App\Account::CURRENCY_BTC_ONE .'.name')); ?>

                                        <?php elseif($conversion->currency_two == \App\Account::CURRENCY_BTC_TWO): ?>
                                            <?php echo e(config('crypto.'. \App\Account::CURRENCY_BTC_TWO .'.name')); ?>

                                        <?php else: ?>
                                            RUB
                                        <?php endif; ?>
                                    </td>
                                    <td class="padding-3 font-medium text-left"><?php echo e($conversion->created_at->format('d.m.Y')); ?></td>
                                </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                <tr data-v-4c61e7bd="">
                                    <td colspan="6" class="text-center text-accent padding-3 color-gray font-medium"> Список пуст</td>
                                </tr>
                            <?php endif; ?>
                            </tbody>
                        </table>
                    <?php endif; ?>
                </div>
            </div><!----><!----><!----></div>
    </main>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/invest/resources/views/cabinet/deals.blade.php ENDPATH**/ ?>