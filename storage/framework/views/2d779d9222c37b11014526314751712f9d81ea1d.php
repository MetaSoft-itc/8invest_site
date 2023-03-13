<?php $__env->startSection('title', 'Вывод'); ?>

<?php $__env->startSection('content'); ?>
    <main class="flex flex-column flex-grow trans-margin-left trans-0-3 margin-sidebar">
        <div data-v-e4d5b16a=""
             class="grid padding-x-3 padding-y-4 shadowed border-rounded-3 bg-white margin-x-3 margin-top-5 margin-top-6--md margin-top-0--lg">

            <ul class="errors rid-column-12 grid-column-6--xl grid-column-start-4--xl margin-bottom-2">
                <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <li><?php echo e($error); ?></li>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </ul>

            <form method="post" action="<?php echo e(route('cabinet.outcome.store')); ?>" class="grid-column-12 grid-column-6--xl grid-column-start-4--xl">
                <?php echo csrf_field(); ?>
                <div data-v-e4d5b16a="" class="padding-bottom-5">
                    <div class="row">
                        <span data-v-e4d5b16a="" class="color-gray font-sm font-medium">Выберите валюту</span>
                        <select name="currency" class="select-dropdown ng-untouched ng-pristine ng-valid">
                            <option value="<?php echo e(\App\Account::CURRENCY_RUB); ?>">RUB</option>
                            <option value="<?php echo e(\App\Account::CURRENCY_USD); ?>">USD</option>
                            <option value="<?php echo e(\App\Account::CURRENCY_EUR); ?>">EUR</option>
                            <option value="<?php echo e(\App\Account::CURRENCY_BTC_ONE); ?>"><?php echo e(config('crypto.'. \App\Account::CURRENCY_BTC_ONE .'.name')); ?></option>
                            <option value="<?php echo e(\App\Account::CURRENCY_BTC_TWO); ?>"><?php echo e(config('crypto.'. \App\Account::CURRENCY_BTC_TWO .'.name')); ?></option>
                        </select>
                    </div>

                    <div class="row">
                        <span data-v-e4d5b16a="" class="color-gray font-sm font-medium">Выберите способ оплаты</span>
                        <select name="payment_system" class="select-dropdown ng-untouched ng-pristine ng-valid">
                            <?php if(in_array(\App\Outcome::QIWI, $requisites) || empty($requisites)): ?>
                                <option value="<?php echo e(\App\Outcome::QIWI); ?>">QIWI</option>
                            <?php endif; ?>
                            <?php if(in_array(\App\Outcome::PAYEER, $requisites) || empty($requisites)): ?>
                                <option value="<?php echo e(\App\Outcome::PAYEER); ?>">Payeer</option>
                            <?php endif; ?>
                            <?php if(in_array(\App\Outcome::PERFECT_MONEY, $requisites) || empty($requisites)): ?>
                                <option value="<?php echo e(\App\Outcome::PERFECT_MONEY); ?>">Perfect Money</option>
                            <?php endif; ?>
                            <?php if(in_array(\App\Outcome::BITCOIN, $requisites) || empty($requisites)): ?>
                                <option value="<?php echo e(\App\Outcome::BITCOIN); ?>">Bitcoin</option>
                            <?php endif; ?>
                            <?php if(in_array(\App\Outcome::CARD, $requisites) || empty($requisites)): ?>
                                <option value="<?php echo e(\App\Outcome::CARD); ?>">Банковская карта</option>
                            <?php endif; ?>
                            <?php if(in_array(\App\Outcome::ADVACASH, $requisites) || empty($requisites)): ?>
                                <option value="<?php echo e(\App\Outcome::ADVACASH); ?>">Advacash</option>
                            <?php endif; ?>
                            <?php if(in_array(\App\Outcome::YANDEX, $requisites) || empty($requisites)): ?>
                                <option value="<?php echo e(\App\Outcome::YANDEX); ?>">Яндекс деньги</option>
                            <?php endif; ?>
                        </select>
                    </div>

                    <div data-v-e4d5b16a="" class="margin-y-4 font-sm"> Как работает вывод
                        <div data-v-e4d5b16a="" class="color-gray text-tight"> Что бы оформить заявку на вывод, вам требуется ввести желаемую сумму для вывода и нажать кнопку «Вывести». Для успешного оформления заявки вам требуется иметь на балансе нужную сумму и так же заполнить кошелек Bitcoin в разделе профиль>платежные данные. Заявка на вывод средств обрабатывается от 1 минуты до 48ми часов. Так же нужно учитывать загруженность сети. Средства попадут в сеть не выходя из регламента, но обработаны сетью Bitcoin могут быть позже.
                        </div>
                    </div>
                    <div data-v-e4d5b16a="">
                        <div data-v-7032d9db="" data-v-e4d5b16a="" data-vv-as=" "
                             class="field">
                            <div data-v-7032d9db="" class="flex justify-between"><label data-v-7032d9db=""
                                                                                        for="input_s1wtgga9"
                                                                                        class="field__label flex font-sm color-gray font-medium margin-bottom-1">
                                    Введите сумму</label></div>
                            <div data-v-7032d9db="" class="relative">
                                <div data-v-7032d9db="" class="field__input-wrapper flex items-center overflow-hidden">
                                    <input name="amount" step="0.1" min="0" value="<?php echo e(old('amount')); ?>" type="number" placeholder="0" class="field__input">
                                </div>
                            </div><!----></div>
                        <div data-v-e4d5b16a="" class="flex--sm justify-between font-sm margin-y-2 font-medium">
                        </div>
                        <button class="width-full button button--success button--mini"><!----><span
                                data-v-141d1a81="" class="button__content"><svg data-v-e4d5b16a="" data-v-141d1a81=""
                                                                                viewBox="0 0 10 10" fill="none"
                                                                                xmlns="http://www.w3.org/2000/svg"
                                                                                class="fill-white height-0-5 margin-right-2"><path
                                        data-v-e4d5b16a="" data-v-141d1a81=""
                                        d="M5 0a1 1 0 00-1 1v3H1a1 1 0 100 2h3v3a1 1 0 102 0V6h3a1 1 0 100-2H6V1a1 1 0 00-1-1z"
                                        fill="#569A21"></path></svg> Создать заявку </span>
                        </button>
                    </div>
                </div>
            </form>

            <div class="grid-column-12">
                <div data-v-4c61e7bd="" class="padding-x-3 padding-bottom-3">
                    
                    <div data-v-4c61e7bd="" class="padding-0-15 shadowed border-rounded-3 overflow-auto margin-top-2">
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
                    </div>
                </div>
            </div>
        </div>
    </main>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('old-content'); ?>
    <main class="page-content">
        <div class="page-content__content  user-page">
            <?php echo $__env->make('cabinet._navigation', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <app-invest>
                <div class="user-page__main">
                    <section class="user-section invest-platform-info fadeInUp" data-show-animation="fadeInUp">
                        <div class="invest-platform-info__titles  titles">
                            <h2 class="titles__title">
                                <span class="g-text-light">Вывод средств</span>
                            </h2>
                        </div>
                        <form method="post" action="<?php echo e(route('cabinet.outcome.store')); ?>" class="charge-form ng-untouched ng-invalid ng-dirty">
                            <?php echo csrf_field(); ?>
                            <ul class="errors-list">
                                <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <li><?php echo e($error); ?></li>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </ul>
                            <div class="form__inputs-wrap">
                                <div class="form__input _full form-group">
                                    <label class="form-group__label">Выберите валюту</label>
                                    <select name="currency" class="select-dropdown ng-untouched ng-pristine ng-valid">
                                        <option value="<?php echo e(\App\Account::CURRENCY_RUB); ?>">RUB</option>
                                        <option value="<?php echo e(\App\Account::CURRENCY_USD); ?>">USD</option>
                                        <option value="<?php echo e(\App\Account::CURRENCY_EUR); ?>">EUR</option>
                                        <option value="<?php echo e(\App\Account::CURRENCY_BTC_ONE); ?>"><?php echo e(config('crypto.'. \App\Account::CURRENCY_BTC_ONE .'.name')); ?></option>
                                        <option value="<?php echo e(\App\Account::CURRENCY_BTC_TWO); ?>"><?php echo e(config('crypto.'. \App\Account::CURRENCY_BTC_TWO .'.name')); ?></option>
                                    </select>
                                </div>
                                <div class="form__input _full form-group">
                                    <label class="form-group__label">Введите сумму</label>
                                    <input class="form-group__input ng-untouched ng-pristine ng-invalid" name="amount" min="1" value="<?php echo e(old('amount')); ?>" type="number">
                                </div>
                                <div class="form__input _full form-group">
                                    <label class="form-group__label">Выберите способ оплаты</label>
                                    <select name="payment_system" class="select-dropdown ng-untouched ng-pristine ng-valid">
                                        <?php if(in_array(\App\Outcome::QIWI, $requisites) || empty($requisites)): ?>
                                        <option value="<?php echo e(\App\Outcome::QIWI); ?>">QIWI</option>
                                        <?php endif; ?>
                                        <?php if(in_array(\App\Outcome::PAYEER, $requisites) || empty($requisites)): ?>
                                        <option value="<?php echo e(\App\Outcome::PAYEER); ?>">Payeer</option>
                                        <?php endif; ?>
                                        <?php if(in_array(\App\Outcome::PERFECT_MONEY, $requisites) || empty($requisites)): ?>
                                        <option value="<?php echo e(\App\Outcome::PERFECT_MONEY); ?>">Perfect Money</option>
                                        <?php endif; ?>
                                        <?php if(in_array(\App\Outcome::BITCOIN, $requisites) || empty($requisites)): ?>
                                        <option value="<?php echo e(\App\Outcome::BITCOIN); ?>">Bitcoin</option>
                                        <?php endif; ?>
                                        <?php if(in_array(\App\Outcome::CARD, $requisites) || empty($requisites)): ?>
                                        <option value="<?php echo e(\App\Outcome::CARD); ?>">Банковская карта</option>
                                        <?php endif; ?>
                                        <?php if(in_array(\App\Outcome::ADVACASH, $requisites) || empty($requisites)): ?>
                                        <option value="<?php echo e(\App\Outcome::ADVACASH); ?>">Advacash</option>
                                        <?php endif; ?>
                                        <?php if(in_array(\App\Outcome::YANDEX, $requisites) || empty($requisites)): ?>
                                        <option value="<?php echo e(\App\Outcome::YANDEX); ?>">Яндекс деньги</option>
                                        <?php endif; ?>
                                    </select>
                                </div>
                                <?php if(empty($requisites)): ?>
                                <div class="form__input _full form-group">
                                    <label class="form-group__label">Реквизиты</label>
                                    <input class="form-group__input ng-untouched ng-pristine ng-invalid" name="wallet" value="<?php echo e(old('wallet')); ?>" type="text">
                                </div>
                                <?php endif; ?>
                            </div>
                            <div class="form__btns-wrap">
                                <button class="btn profile__btn">Оплатить</button>
                            </div>
                        </form>
                    </section>
                    <div data-show-animation="fadeInUp" style="width: 100%" class="fadeInUp">
                        <section class="user-section  _full-deck-content">
                            <div class="table-responsive">
                                <table class="table-2 d-block">
                                    <tbody>
                                    <tr>
                                        <th><?php echo app('translator')->get('app.Код'); ?></th>
                                        <th><?php echo app('translator')->get('app.Сумма'); ?></th>
                                        <th><?php echo app('translator')->get('app.Валюта'); ?></th>
                                        <th><?php echo app('translator')->get('app.Система'); ?></th>
                                        <th><?php echo app('translator')->get('app.Дата'); ?></th>
                                        <th><?php echo app('translator')->get('app.Статус'); ?></th>
                                    </tr>

                                    <?php $__currentLoopData = $outcomes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $outcome): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <tr>
                                            <td><?php echo e($outcome->id); ?></td>
                                            <td>
                                                <?php echo e($outcome->amount / 100000); ?>


                                                <?php if($outcome->currency == 'usd'): ?>
                                                    <i class="fas fa-dollar-sign"></i>
                                                <?php elseif($outcome->currency == 'eur'): ?>
                                                    <i class="fas fa-euro-sign"></i>
                                                <?php elseif($outcome->currency == \App\Account::CURRENCY_BTC_ONE): ?>
                                                    <i class="fas fa-euro-sign"></i>
                                                <?php elseif($outcome->currency == \App\Account::CURRENCY_BTC_TWO): ?>
                                                    <i class="fas fa-euro-sign"></i>
                                                <?php else: ?>
                                                    <i class="fas fa-ruble-sign"></i>
                                                <?php endif; ?>
                                            </td>
                                            <td>
                                                <?php if($outcome->currency == 'usd'): ?>
                                                    <i class="fas fa-dollar-sign"></i>
                                                <?php elseif($outcome->currency == 'eur'): ?>
                                                    <i class="fas fa-euro-sign"></i>
                                                <?php elseif($outcome->currency == \App\Account::CURRENCY_BTC_ONE): ?>
                                                    <i class="fas fa-euro-sign"></i>
                                                <?php elseif($outcome->currency == \App\Account::CURRENCY_BTC_TWO): ?>
                                                    <i class="fas fa-euro-sign"></i>
                                                <?php else: ?>
                                                    <i class="fas fa-ruble-sign"></i>
                                                <?php endif; ?>
                                            </td>
                                            <td>
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
                                            <td><?php echo e($outcome->created_at->format('d.m.Y')); ?></td>
                                            <td>
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
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
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
        <div class="ac-bals oper mt-3" align="center">
            <form method="post" action="<?php echo e(route('cabinet.outcome.store')); ?>" name="account/change_pass_frm">
                <fieldset style="border:none;">
                    <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php echo e($error); ?>

                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    <table class="formatTable">
                        <tbody>
                        <tr>
                            <td align="right" width="50%">
                                <label>
                                    <span class="descr_req">
                                        <?php echo app('translator')->get('app.Сумма'); ?>
                                    </span>
                                </label>
                            </td>
                            <td align="left">
                                <input name="amount" min="0" step="0.01" value="<?php echo e(old('amount')); ?>" type="number" class="form-control">
                            </td>
                        </tr>
                        <tr>
                            <td align="right" width="50%">
                                <label>
                                    <span class="descr_req">
                                        <?php echo app('translator')->get('app.Валюта'); ?>
                                    </span>
                                </label>
                            </td>
                            <td align="left">
                                <select name="currency">
                                    <option value="<?php echo e(\App\Account::CURRENCY_RUB); ?>">RUB</option>
                                    <option value="<?php echo e(\App\Account::CURRENCY_USD); ?>">USD</option>
                                    <option value="<?php echo e(\App\Account::CURRENCY_EUR); ?>">EUR</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td align="right" width="50%">
                                <label>
                                    <span class="descr_req">
                                        <?php echo app('translator')->get('app.Система'); ?>
                                    </span>
                                </label>
                            </td>
                            <td align="left">
                                <select name="payment_system">
                                    <option value="<?php echo e(\App\Outcome::QIWI); ?>">QIWI</option>
                                    <option value="<?php echo e(\App\Outcome::PAYEER); ?>">Payeer</option>
                                    <option value="<?php echo e(\App\Outcome::PERFECT_MONEY); ?>">Perfect Money</option>
                                    <option value="<?php echo e(\App\Outcome::BITCOIN); ?>">Bitcoin</option>
                                    <option value="<?php echo e(\App\Outcome::CARD); ?>">Банковская карта</option>
                                    <option value="<?php echo e(\App\Outcome::ADVACASH); ?>">Advacash</option>
                                    <option value="<?php echo e(\App\Outcome::YANDEX); ?>">Яндекс деньги</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td align="right" width="50%">
                                <label>
                                    <span class="descr_req">
                                        <?php echo app('translator')->get('app.Реквизиты'); ?>
                                    </span>
                                </label>
                            </td>
                            <td align="left">
                                <input name="wallet" value="<?php echo e(old('wallet')); ?>" type="text" class="form-control">
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </fieldset>
                <?php echo csrf_field(); ?>
                <br>
                <input value="<?php echo app('translator')->get('app.Создать'); ?>" type="submit" class="button-blue">
            </form>
        </div>
        <br>
        <table width="99%">
            <tbody>
            <tr>
                <td style="vertical-align:top">
                    <div class="ac-bals">
                        <table>
                            <tbody>
                            <tr>
                                <th><?php echo app('translator')->get('app.Код'); ?></th>
                                <th><?php echo app('translator')->get('app.Сумма'); ?></th>
                                <th><?php echo app('translator')->get('app.Валюта'); ?></th>
                                <th><?php echo app('translator')->get('app.Система'); ?></th>
                                <th><?php echo app('translator')->get('app.Дата'); ?></th>
                                <th><?php echo app('translator')->get('app.Статус'); ?></th>
                            </tr>

                            <?php $__currentLoopData = $outcomes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $outcome): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td><?php echo e($outcome->id); ?></td>
                                <td>
                                    <?php echo e($outcome->amount / 100000); ?>


                                    <?php if($outcome->currency == 'usd'): ?>
                                        <i class="fas fa-dollar-sign"></i>
                                    <?php elseif($outcome->currency == 'eur'): ?>
                                        <i class="fas fa-euro-sign"></i>
                                    <?php else: ?>
                                        <i class="fas fa-ruble-sign"></i>
                                    <?php endif; ?>
                                </td>
                                <td>
                                    <?php if($outcome->currency == 'usd'): ?>
                                        <i class="fas fa-dollar-sign"></i>
                                    <?php elseif($outcome->currency == 'eur'): ?>
                                        <i class="fas fa-euro-sign"></i>
                                    <?php else: ?>
                                        <i class="fas fa-ruble-sign"></i>
                                    <?php endif; ?>
                                </td>
                                <td>
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
                                <td><?php echo e($outcome->created_at->format('d.m.Y')); ?></td>
                                <td>
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
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </tbody>
                        </table>
                    </div>
                </td>
            </tr>
            </tbody>
        </table>
    </td>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/maksa988/www/invest3/resources/views/cabinet/outcome/index.blade.php ENDPATH**/ ?>