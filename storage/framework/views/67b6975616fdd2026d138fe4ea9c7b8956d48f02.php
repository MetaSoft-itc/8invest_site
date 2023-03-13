<?php $__env->startSection('content'); ?>
<main _ngcontent-c0="" class="page-content">
    <div _ngcontent-c0="" class="page-content__content  user-page"><!---->
        <app-registration _nghost-c6=""><!---->
            <div class="user-page__auth auth g-page-wrap fadeInUp" data-show-animation="fadeInUp">
                <div class="auth__content  g-content-wrap"><h2
                                                                                class="auth__title">Регистрация</h2>
                    <!---->
                    <form method="post" action="<?php echo e(route('register')); ?>" class="auth__form ng-untouched ng-pristine ng-invalid">
                        <?php echo csrf_field(); ?>
                        <ul class="errors">
                            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <li><?php echo e($error); ?></li>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </ul>
                        <div class="auth__inputs-wrap">
                            <div class="auth__form-group form-group"><label
                                                                                             class="form-group__label"
                                                                                             for="registr-input">Имя*</label><input
                                    class="form-group__input ng-untouched ng-pristine ng-invalid"
                                    name="name" id="registr-input" type="text"><!----></div>
                            <div class="auth__form-group form-group"><label
                                                                                             class="form-group__label"
                                                                                             for="registr-input-2">E-mail*</label><input
                                    class="form-group__input ng-untouched ng-pristine ng-invalid"
                                    name="email" id="registr-input-2" type="email"><!----></div>
                            <div class="auth__form-group form-group"><label
                                                                                             class="form-group__label"
                                                                                             for="registr-input-3">Пароль*</label><input
                                    class="form-group__input ng-untouched ng-pristine ng-invalid"
                                    name="password" id="registr-input-3" type="password"><!----></div>
                            <div class="auth__form-group form-group"><label
                                                                                             class="form-group__label"
                                                                                             for="registr-input-4">Подтверждение
                                    пароля*</label><input
                                                          class="form-group__input ng-untouched ng-pristine ng-invalid"
                                                          name="password_confirmation" id="registr-input-4"
                                                          type="password"><!----><!----></div>
                            <div class="auth__form-group form-group"><label
                                                                                             class="form-group__label"
                                                                                             for="registr-input-5">Код приглашения</label>
                                <div><input class="form-group__input"
                                            name="invite" value="<?php echo e(request()->get('code') ?? old('invite')); ?>"
                                            <?php if(request()->has('code')): ?> readonly <?php endif; ?>
                                            id="registr-input-5" type="text"></div></div>
                        </div><!---->

                        <button class="auth__btn btn" type="submit"><!---->Зарегистрироваться
                        </button>
                        <div class="auth__links">
                            <a href="<?php echo e(route('login')); ?>">Войти</a>
                        </div>
                    </form>
                </div>
            </div><!----></app-registration>
    </div>
</main>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('old-content'); ?>
    <div class="page-title-area">
        <div class="container">
            <div class="page-title-content"><h2><?php echo app('translator')->get('app.Кабинет'); ?></h2>
                <ul>
                    <li><a href="<?php echo e(route('home')); ?>"><?php echo app('translator')->get('app.Главная'); ?></a></li>
                    <li><?php echo app('translator')->get('app.Кабинет'); ?></li>
                </ul>
            </div>
        </div>
    </div>
    <section class="user-area-all-style log-in-area ptb-100">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="contact-form-action">
                        <div class="form-heading text-center"><h3 class="form-title"><?php echo app('translator')->get('app.Регистрация'); ?></h3>
                            <div class="regas">
                                <center>
                                    <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <?php echo e($error); ?> <br>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </center>
                                <form method="post" action="<?php echo e(route('register')); ?>">
                                    <?php echo csrf_field(); ?>
                                    <input type="checkbox" style="display:none;" name="remember" <?php echo e(old('remember') ? 'checked' : ''); ?>>
                                    <div class="box box-form-reg">
                                        <div class="clearfix"></div>
                                        <div class="box-inset">
                                            <label>
                                                <input name="name" value="<?php echo e(old('name')); ?>" type="text" placeholder="<?php echo app('translator')->get('app.Имя'); ?>">
                                            </label>
                                            <label>
                                                <input name="email" value="<?php echo e(old('email')); ?>" type="email" placeholder="Email">
                                            </label>
                                            <label>
                                                <input name="password" value="" type="password" placeholder="<?php echo app('translator')->get('app.Пароль'); ?>">
                                            </label>
                                            <label>
                                                <input name="password_confirmation" value="" type="password" placeholder="<?php echo app('translator')->get('app.Повторите пароль'); ?>">
                                            </label>
                                            <label>
                                                <input name="invite" value="<?php echo e(old('invite') ?? request('code')); ?>" type="text" placeholder="<?php echo app('translator')->get('app.Код приглашения'); ?>">
                                            </label>
                                        </div>
                                        <div class="clearfix"></div>
                                        <div class="btn-submit" style="margin-top: 25px;">
                                            <input style="width: 153px;" value="<?php echo app('translator')->get('app.Регистрация'); ?>" class="default-btn" type="submit">
                                        </div>
                                    </div>
                                </form>
                                <p style="margin: 25px auto 0;display: table;font-weight: 600;">
                                    <?php echo app('translator')->get('app.Имеете аккаунт'); ?>?
                                    <a href="<?php echo e(route('login')); ?>" style="color: #1dd3f8;margin-left: 10px;font-weight: 600;"><?php echo app('translator')->get('app.Авторизация'); ?></a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.front_app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/maksa988/www/invest2/resources/views/auth/register.blade.php ENDPATH**/ ?>