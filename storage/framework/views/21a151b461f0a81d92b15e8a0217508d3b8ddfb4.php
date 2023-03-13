<?php $__env->startSection('content'); ?>
    <main class="page-content">
        <div class="page-content__content  user-page">
            <?php echo $__env->make('cabinet._navigation', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <app-invest>
                <div class="user-page__main">
                    <section class="user-section fadeInUp" data-show-animation="fadeInUp">
                        <h2 class="user-section__title _marg-b g-fs-20">Изменить пароль для входа в личный кабинет</h2>
                        <form method="post" action="<?php echo e(route('cabinet.password.store')); ?>" class="form ng-untouched ng-pristine ng-invalid">
                            <?php echo csrf_field(); ?>
                            <ul class="errors-list">
                                <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <li><?php echo e($error); ?></li>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </ul>
                            <div class="form__inputs-wrap">
                                <div class="form__input  _full  form-group">
                                    <label class="form-group__label">Ваш текущий пароль</label>
                                    <input class="form-group__input ng-untouched ng-pristine ng-invalid" name="old_password" type="password">
                                </div>
                                <div class="form__input  form-group">
                                    <label class="form-group__label">Новый пароль</label>
                                    <input class="form-group__input ng-untouched ng-pristine ng-invalid" name="password" type="password">
                                </div>
                                <div class="form__input  form-group">
                                    <label class="form-group__label">Подтвердите новый пароль</label>
                                    <input class="form-group__input ng-untouched ng-pristine ng-invalid" name="password_confirmation" type="password">
                                </div>
                            </div>
                            <div class="form__btns-wrap">
                                <button class="form__btn btn" style="min-width: 296rem">
                                    Изменить пароль
                                </button>
                            </div>
                        </form>
                    </section>
                </div>
            </app-invest>
        </div>
    </main>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('old-content'); ?>
<td width="10px"></td>
<td align="left" style="vertical-align:top">
    <?php echo $__env->make('layouts._balance', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <div class="ac-bals oper mt-3">
        <form method="post" action="<?php echo e(route('cabinet.password.store')); ?>" name="account/change_pass_frm">
            <?php echo csrf_field(); ?>
            <fieldset style="border:none;">
                <center>
                    <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php echo e($error); ?>

                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    <?php if(session()->has('success')): ?>
                        <?php echo app('translator')->get('app.Пароль успешно изменен!'); ?>
                    <?php endif; ?>
                </center>
                <table class="formatTable mt-3">
                    <tbody>
                    <tr>
                        <td align="right" width="50%">
                            <label for="account/change_pass_frm_Pass0">
                                <span class="descr_req">
                                    <?php echo app('translator')->get('app.Старый пароль'); ?> <span class="descr_star">*</span>
                                </span>
                            </label>
                        </td>
                        <td align="left">
                            <input name="old_password" id="account/change_pass_frm_Pass0" value="" size="20" type="password" class="password">
                        </td>
                    </tr>
                    <tr>
                        <td align="right" width="50%">
                            <label for="account/change_pass_frm_Pass">
                                <span class="descr_req">
                                    <?php echo app('translator')->get('app.Новый пароль'); ?><span class="descr_star">*</span>
                                </span>
                            </label>
                        </td>
                        <td align="left">
                            <input name="password" id="account/change_pass_frm_Pass" value="" size="20" type="password" class="password">
                        </td>
                    </tr>
                    <tr>
                        <td align="right" width="50%">
                            <label for="account/change_pass_frm_Pass2">
                                <span class="descr_req"><?php echo app('translator')->get('app.Повторите новый пароль'); ?><span class="descr_star">*</span>
                                </span>
                            </label>
                        </td>
                        <td align="left">
                            <input name="password_confirmation" id="account/change_pass_frm_Pass2" value="" size="20" type="password" class="password">
                        </td>
                    </tr>
                    </tbody>
                </table>
            </fieldset>
            <input name="account/change_pass_frm_btn" value="<?php echo app('translator')->get('app.Сменить'); ?>" type="submit" class="button-blue">
        </form>
    </div>
</td>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.front_app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/maksa988/www/invest2/resources/views/cabinet/password.blade.php ENDPATH**/ ?>