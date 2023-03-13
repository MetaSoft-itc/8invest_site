<?php $__env->startSection('content'); ?>
    <main class="page-content">
        <div class="page-content__content  user-page">
            <?php echo $__env->make('cabinet._navigation', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <app-invest>
                <div class="user-page__main">
                    <section class="user-section invest-platform-info fadeInUp" data-show-animation="fadeInUp">
                        <div class="invest-platform-info__titles  titles">
                            <h2 class="titles__title">
                                <span class="g-text-light">Личные данные</span>
                            </h2>
                        </div>
                        <form method="post" action="<?php echo e(route('cabinet.promocode')); ?>" class="charge-form ng-untouched ng-invalid ng-dirty">
                            <?php echo csrf_field(); ?>
                            <ul class="errors-list">
                                <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <li><?php echo e($error); ?></li>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </ul>
                            <div class="form__inputs-wrap">
                                <div class="form__input _full form-group">
                                    <label class="form-group__label">Последний вход с IP:</label>
                                    <input class="form-group__input ng-untouched ng-pristine ng-invalid" disabled value="<?php echo e($user->last_login_ip); ?>" type="text">
                                </div>
                                <div class="form__input _full form-group">
                                    <label class="form-group__label">Время входа:</label>
                                    <input class="form-group__input ng-untouched ng-pristine ng-invalid" disabled value="<?php echo e(optional($user->last_login_time)->format('d.m.Y H:i:s')); ?>" type="text">
                                </div>
                                <div class="form__input _full form-group">
                                    <label class="form-group__label">Ваш e-mail:</label>
                                    <input class="form-group__input ng-untouched ng-pristine ng-invalid" disabled value="<?php echo e($user->email); ?>" type="text">
                                </div>
                                <div class="form__input _full form-group">
                                    <label class="form-group__label">Реферальная ссылка:</label>
                                    <input class="form-group__input ng-untouched ng-pristine ng-invalid" disabled value="<?php echo e(route('register', ['code' => $user->code])); ?>" type="text">
                                </div>
                                <div class="form__input _full form-group">
                                    <label class="form-group__label">Вас пригласил:</label>
                                    <input class="form-group__input ng-untouched ng-pristine ng-invalid" disabled value="<?php echo e($user->invitedBy); ?>" type="text">
                                </div>
                                <?php if($user->promocode_id === null || $user->promocode_used == true): ?>
                                <div class="form__input _full form-group">
                                    <label class="form-group__label">Введите промокод:</label>
                                    <input name="promocode" value="<?php echo e(old('promocode')); ?>" type="text" class="form-group__input ng-untouched ng-pristine ng-invalid">
                                </div>
                                <?php else: ?>
                                <div class="form__input _full form-group">
                                    <label class="form-group__label">Промокод:</label>
                                    <input class="form-group__input ng-untouched ng-pristine ng-invalid" disabled value="<?php echo e($user->promocode->code); ?> - <?php echo e($user->promocode->value); ?>%" type="text">
                                </div>
                                <?php endif; ?>
                            </div>
                            <div class="form__btns-wrap">
                                <button class="btn profile__btn">Сохранить</button>
                            </div>
                        </form>
                    </section>
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
    <table width="99%">
        <tbody>
        <tr>
            <td width="49%" align="left" style="vertical-align:top">
                <div class="ac-bals">
                    <table>
                        <tbody>
                        <tr>
                            <th><?php echo app('translator')->get('app.Валюта'); ?></th>
                            <th><?php echo app('translator')->get('app.Баланс'); ?></th>
                            <th><?php echo app('translator')->get('app.Депозитный баланс'); ?></th>
                        </tr>
                        <tr>
                            <td>RUB</td>
                            <td><?php echo e($accounts->where('currency', \App\Account::CURRENCY_RUB)->first()->amount); ?> <i class="fas fa-ruble-sign"></i></td>
                            <td><?php echo e($accounts->where('currency', \App\Account::CURRENCY_RUB)->first()->deposits); ?> <i class="fas fa-ruble-sign"></i></td>
                        </tr>
                        <tr>
                            <td>USD</td>
                            <td><?php echo e($accounts->where('currency', \App\Account::CURRENCY_USD)->first()->amount); ?> <i class="fas fa-dollar-sign"></i></td>
                            <td><?php echo e($accounts->where('currency', \App\Account::CURRENCY_USD)->first()->deposits); ?> <i class="fas fa-dollar-sign"></i></td>
                        </tr>
                        <tr>
                            <td>EUR</td>
                            <td><?php echo e($accounts->where('currency', \App\Account::CURRENCY_EUR)->first()->amount); ?> <i class="fas fa-euro-sign"></i></td>
                            <td><?php echo e($accounts->where('currency', \App\Account::CURRENCY_EUR)->first()->deposits); ?> <i class="fas fa-euro-sign"></i></td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </td>
            <td width="1%"></td>
            <td width="49%" align="left" style="vertical-align:top">
                <div class="ac-bals2">
                    <div class="oplata"><?php echo app('translator')->get('app.Последний вход с IP'); ?>:<span><?php echo e($user->last_login_ip); ?></span></div>
                    <div class="oplata"><?php echo app('translator')->get('app.Время входа'); ?>:<span><?php echo e(optional($user->last_login_time)->format('d.m.Y H:i:s')); ?></span></div>
                    <div class="oplata"><?php echo app('translator')->get('app.Ваш e-mail'); ?>:<span><?php echo e($user->email); ?></span></div>
                    <div class="oplata"><?php echo app('translator')->get('app.Реферальная ссылка'); ?>: <span><?php echo e(route('register', ['code' => $user->code])); ?></span></div>
                    <div class="oplata"><?php echo app('translator')->get('app.Вас пригласил'); ?>: <span><?php echo e($user->invitedBy); ?></span></div>
                    <?php if($user->promocode_id === null || $user->promocode_used == true): ?>
                    <div class="oplata">
                        <form class="promocode-form" action="<?php echo e(route('cabinet.promocode')); ?>" method="post">
                            <?php echo csrf_field(); ?>
                            <input name="promocode" value="<?php echo e(old('promocode')); ?>" type="text" placeholder="<?php echo app('translator')->get('app.Введите промокод'); ?>" class="form-control">
                            <input value="<?php echo app('translator')->get('app.Сохранить'); ?>" type="submit" class="button-blue">
                        </form>
                    </div>
                    <?php else: ?>
                    <div class="oplata"><?php echo app('translator')->get('app.Промокод'); ?>: <span><?php echo e($user->promocode->code); ?> - <?php echo e($user->promocode->value); ?>%</span></div>
                    <?php endif; ?>
                </div>
            </td>
        </tr>
        </tbody>
    </table>
</td>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.front_app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/maksa988/www/invest2/resources/views/cabinet/account.blade.php ENDPATH**/ ?>