<?php if(request()->has('created')): ?>
<?php $__env->startPush('scripts'); ?>
    <script>
        $(document).ready(function () {
            $([document.documentElement, document.body]).animate({
                scrollTop: $(".table-2").offset().top - 230
            }, 1000);
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
                                                <?php echo e($outcome->amount / 100); ?>


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
                                    <?php echo e($outcome->amount / 100); ?>


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

<?php echo $__env->make('layouts.front_app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/maksa988/www/invest2/resources/views/cabinet/outcome/index.blade.php ENDPATH**/ ?>