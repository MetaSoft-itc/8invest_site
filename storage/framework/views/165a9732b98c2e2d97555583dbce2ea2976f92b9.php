<?php $__env->startSection('content'); ?>
<main _ngcontent-c0="" class="page-content">
    <div _ngcontent-c0="" class="page-content__content  user-page">
        <app-login _nghost-c4="">
            <div _ngcontent-c4="" class="user-page__auth auth g-page-wrap fadeInUp" data-show-animation="fadeInUp">
                <div _ngcontent-c4="" class="auth__content  g-content-wrap">
                    <h2 _ngcontent-c4="" class="auth__title">Вход</h2>
                    <form method="post" action="<?php echo e(route('login')); ?>" class="auth__form ng-untouched ng-pristine ng-invalid">
                        <?php echo csrf_field(); ?>
                        <div _ngcontent-c4="" class="auth__inputs-wrap">
                            <div _ngcontent-c4="" class="auth__form-group form-group"><label _ngcontent-c4=""
                                                                                             class="form-group__label"
                                                                                             for="registr-input">Ваш
                                    E-mail</label><input _ngcontent-c4=""
                                                         class="form-group__input ng-untouched ng-pristine ng-invalid"
                                                         name="email" id="registr-input" type="email">
                                <!----></div>
                            <div _ngcontent-c4="" class="auth__form-group form-group"><label _ngcontent-c4=""
                                                                                             class="form-group__label"
                                                                                             for="registr-input-2">Ваш
                                    пароль</label><input _ngcontent-c4=""
                                                         class="form-group__input ng-untouched ng-pristine ng-invalid"
                                                         name="password" id="registr-input-2"
                                                         type="password"><!----></div>
                        </div>
                        <div _ngcontent-c4="" class="auth__checkbox-wrap"><label _ngcontent-c4=""
                                                                                 class="auth__checkbox  checkbox  _center">
                                Запомнить меня <input _ngcontent-c4="" checked="" name="remember"
                                                      type="checkbox"
                                                      class="ng-untouched ng-pristine ng-valid"><span
                                    _ngcontent-c4="" class="checkbox__mark"></span></label></div><!---->
                        <button _ngcontent-c4="" class="auth__btn btn" type="submit" tabindex="0">Войти</button>
                        <div _ngcontent-c4="" class="auth__links">
                            <a _ngcontent-c4="" href="<?php echo e(route('register')); ?>"><?php echo app('translator')->get('app.Не имеете аккаунт'); ?>?</a>

                    </form>
                </div>
            </div>
        </app-login>
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
                    <div class="form-heading text-center"><h3 class="form-title"><?php echo app('translator')->get('app.Авторизация'); ?></h3>
                        <div class="regas">
                            <form method="post" action="<?php echo e(route('login')); ?>">
                                <?php echo csrf_field(); ?>
                                <input type="checkbox" style="display:none;" name="remember" <?php echo e(old('remember') ? 'checked' : ''); ?>>
                                <div class="box box-form-reg">
                                    <div class="clearfix"></div>
                                    <div class="box-inset">
                                        <label>
                                            <input name="email" value="<?php echo e(old('email')); ?>" type="text" placeholder="Email">
                                        </label>
                                        <label>
                                            <input name="password" value="" type="password" placeholder="<?php echo app('translator')->get('app.Пароль'); ?>">
                                        </label>
                                    </div>
                                    <div class="clearfix"></div>
                                    <div class="btn-submit" style="margin-top: 25px;">
                                        <input name="login_frm_btn" style="width: 153px;" value="<?php echo app('translator')->get('app.Войти'); ?>" class="default-btn" type="submit">
                                    </div>
                                </div>
                            </form>
                            <p style="margin: 25px auto 0;display: table;font-weight: 600;"><?php echo app('translator')->get('app.Не имеете аккаунт'); ?>? <a href="<?php echo e(route('register')); ?>" style="color: #1dd3f8;margin-left: 10px;font-weight: 600;"><?php echo app('translator')->get('app.Регистрация'); ?></a></p>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.front_app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/maksa988/www/invest2/resources/views/auth/login.blade.php ENDPATH**/ ?>