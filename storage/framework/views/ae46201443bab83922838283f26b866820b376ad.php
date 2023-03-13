<?php if(request()->has('created')): ?>
    <?php $__env->startPush('scripts'); ?>
        <script>
            $(document).ready(function () {
                setTimeout(function () {
                    $([document.documentElement, document.body]).animate({
                        scrollTop: $(".table-2").offset().top - 230
                    }, 1000);
                }, 600);
            });
        </script>
    <?php $__env->stopPush(); ?>
<?php endif; ?>

<?php $__env->startSection('content'); ?>
    <main class="page-content">
        <div class="page-content__content  user-page">
            <?php echo $__env->make('cabinet._navigation', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <app-invest>
                <div class="user-page__main">
                    <section class="user-section invest-platform-info fadeInUp" data-show-animation="fadeInUp">
                        <div class="invest-platform-info__titles  titles">
                            <h2 class="titles__title">
                                <span class="g-text-light">Пополнение счёта</span>
                            </h2>
                        </div>
                        <form method="post" action="<?php echo e(route('cabinet.income.store')); ?>" class="charge-form ng-untouched ng-invalid ng-dirty">
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
                                        <option value="<?php echo e(\App\Income::QIWI); ?>">QIWI</option>
                                        <option value="<?php echo e(\App\Income::PAYEER); ?>">Payeer</option>
                                        <option value="<?php echo e(\App\Income::PERFECT_MONEY); ?>">Perfect Money</option>
                                        <option value="<?php echo e(\App\Income::BITCOIN); ?>">Bitcoin</option>
                                        <option value="<?php echo e(\App\Income::CARD); ?>">Банковская карта</option>
                                        <option value="<?php echo e(\App\Income::ADVACASH); ?>">Advacash</option>
                                        <option value="<?php echo e(\App\Income::YANDEX); ?>">Яндекс деньги</option>
                                    </select>
                                </div>
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

                                    <?php $__currentLoopData = $incomes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $income): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <tr>
                                            <td><?php echo e($income->id); ?></td>
                                            <td>
                                                <?php echo e($income->amount / 100); ?>


                                                <?php if($income->currency == 'usd'): ?>
                                                    <i class="fas fa-dollar-sign"></i>
                                                <?php elseif($income->currency == 'eur'): ?>
                                                    <i class="fas fa-euro-sign"></i>
                                                <?php elseif($income->currency == \App\Account::CURRENCY_BTC_ONE): ?>
                                                    <?php echo e(config('crypto.'. \App\Account::CURRENCY_BTC_ONE .'.name')); ?>

                                                <?php elseif($income->currency == \App\Account::CURRENCY_BTC_TWO): ?>
                                                    <?php echo e(config('crypto.'. \App\Account::CURRENCY_BTC_TWO .'.name')); ?>

                                                <?php else: ?>
                                                    <i class="fas fa-ruble-sign"></i>
                                                <?php endif; ?>

                                                <?php if($income->promocode_id !== null): ?>
                                                    +<?php echo e($income->promocode->value); ?>%
                                                <?php endif; ?>

                                                <?php if($income->invite_bonus !== 0): ?>
                                                    +<?php echo e($income->invite_bonus); ?>%
                                                <?php endif; ?>
                                            </td>
                                            <td>
                                                <?php if($income->currency == 'usd'): ?>
                                                    <i class="fas fa-dollar-sign"></i>
                                                <?php elseif($income->currency == 'eur'): ?>
                                                    <i class="fas fa-euro-sign"></i>
                                                <?php else: ?>
                                                    <i class="fas fa-ruble-sign"></i>
                                                <?php endif; ?>
                                            </td>
                                            <td>
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
                                            <td><?php echo e($income->created_at->format('d.m.Y')); ?></td>
                                            <td>
                                                <?php if($income->status == \App\Income::STATUS_WAITING): ?>
                                                    <?php echo app('translator')->get('app.В ожидании'); ?> <a href="<?php echo e(route('income.wallet')); ?>"><?php echo app('translator')->get('app.Получить реквизиты'); ?></a>
                                                <?php elseif($income->status == \App\Income::STATUS_SUCCESS): ?>
                                                    <?php echo app('translator')->get('app.Обработано'); ?>
                                                <?php elseif($income->status == \App\Income::STATUS_ERROR): ?>
                                                    <?php echo app('translator')->get('app.Ошибка'); ?>
                                                <?php elseif($income->status == \App\Income::STATUS_CANCELED): ?>
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
            <form method="post" action="<?php echo e(route('cabinet.income.store')); ?>" name="account/change_pass_frm">
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
                                <input name="amount" min="1" value="<?php echo e(old('amount')); ?>" type="number" class="form-control">
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
                                    <option value="<?php echo e(\App\Income::QIWI); ?>">QIWI</option>
                                    <option value="<?php echo e(\App\Income::PAYEER); ?>">Payeer</option>
                                    <option value="<?php echo e(\App\Income::PERFECT_MONEY); ?>">Perfect Money</option>
                                    <option value="<?php echo e(\App\Income::BITCOIN); ?>">Bitcoin</option>
                                    <option value="<?php echo e(\App\Income::CARD); ?>">Банковская карта</option>
                                    <option value="<?php echo e(\App\Income::ADVACASH); ?>">Advacash</option>
                                    <option value="<?php echo e(\App\Income::YANDEX); ?>">Яндекс деньги</option>
                                </select>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </fieldset>
                <?php echo csrf_field(); ?>
                <br>
                <input value="Создать" type="submit" class="button-blue">
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

                            <?php $__currentLoopData = $incomes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $income): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td><?php echo e($income->id); ?></td>
                                <td>
                                    <?php echo e($income->amount / 100); ?>


                                    <?php if($income->currency == 'usd'): ?>
                                        <i class="fas fa-dollar-sign"></i>
                                    <?php elseif($income->currency == 'eur'): ?>
                                        <i class="fas fa-euro-sign"></i>
                                    <?php else: ?>
                                        <i class="fas fa-ruble-sign"></i>
                                    <?php endif; ?>

                                    <?php if($income->promocode_id !== null): ?>
                                        +<?php echo e($income->promocode->value); ?>%
                                    <?php endif; ?>

                                    <?php if($income->invite_bonus !== 0): ?>
                                        +<?php echo e($income->invite_bonus); ?>%
                                    <?php endif; ?>
                                </td>
                                <td>
                                    <?php if($income->currency == 'usd'): ?>
                                        <i class="fas fa-dollar-sign"></i>
                                    <?php elseif($income->currency == 'eur'): ?>
                                        <i class="fas fa-euro-sign"></i>
                                    <?php else: ?>
                                        <i class="fas fa-ruble-sign"></i>
                                    <?php endif; ?>
                                </td>
                                <td>
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
                                <td><?php echo e($income->created_at->format('d.m.Y')); ?></td>
                                <td>
                                    <?php if($income->status == \App\Income::STATUS_WAITING): ?>
                                        <?php echo app('translator')->get('app.В ожидании'); ?> <a href="<?php echo e(route('income.wallet')); ?>"><?php echo app('translator')->get('app.Получить реквизиты'); ?></a>
                                    <?php elseif($income->status == \App\Income::STATUS_SUCCESS): ?>
                                        <?php echo app('translator')->get('app.Обработано'); ?>
                                    <?php elseif($income->status == \App\Income::STATUS_ERROR): ?>
                                        <?php echo app('translator')->get('app.Ошибка'); ?>
                                    <?php elseif($income->status == \App\Income::STATUS_CANCELED): ?>
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

<?php echo $__env->make('layouts.front_app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/maksa988/www/invest2/resources/views/cabinet/income/index.blade.php ENDPATH**/ ?>