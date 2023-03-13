<?php $__env->startSection('content'); ?>
    <main class="page-content">
        <div class="page-content__content  user-page">
            <?php echo $__env->make('cabinet._navigation', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <app-invest>
                <div class="user-page__main">
                    <section class="user-section fadeInUp" data-show-animation="fadeInUp"><h2
                            class="user-section__title  g-fs-20" style="margin-bottom: 0.9em">Мои реквизиты</h2>
                        <div class="user-section__text"><p>Здесь Вы можете указать или изменить платежные реквизиты для
                                вывода средств</p></div>
                    </section>

                    <section class="user-section invest-platform-info fadeInUp" data-show-animation="fadeInUp">
                        <div class="invest-platform-info__titles  titles">
                            <h2 class="titles__title">
                                <span class="g-text-light">Добавление реквизитов</span>
                            </h2>
                        </div>
                        <form method="post" action="<?php echo e(route('cabinet.requisites.store')); ?>" class="charge-form ng-untouched ng-invalid ng-dirty">
                            <?php echo csrf_field(); ?>
                            <ul class="errors-list">
                                <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <li><?php echo e($error); ?></li>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </ul>
                            <div class="form__inputs-wrap">
                                <div class="form__input _full form-group">
                                    <label class="form-group__label">Выберите платёжную систему</label>
                                    <select name="payment_system" class="select-dropdown ng-untouched ng-pristine ng-valid">
                                        <option value="<?php echo e(\App\Outcome::QIWI); ?>">QIWI</option>
                                        <option value="<?php echo e(\App\Outcome::PAYEER); ?>">Payeer</option>
                                        <option value="<?php echo e(\App\Outcome::PERFECT_MONEY); ?>">Perfect Money</option>
                                        <option value="<?php echo e(\App\Outcome::BITCOIN); ?>">Bitcoin</option>
                                        <option value="<?php echo e(\App\Outcome::CARD); ?>">Банковская карта</option>
                                        <option value="<?php echo e(\App\Outcome::ADVACASH); ?>">Advacash</option>
                                        <option value="<?php echo e(\App\Outcome::YANDEX); ?>">Яндекс деньги</option>
                                    </select>
                                </div>
                                <div class="form__input _full form-group">
                                    <label class="form-group__label">Реквизиты платёжной системы</label>
                                    <input class="form-group__input ng-untouched ng-pristine ng-invalid" name="wallet" value="<?php echo e(old('wallet')); ?>" type="text">
                                </div>
                            </div>
                            <div class="form__btns-wrap">
                                <button class="btn profile__btn">Добавить</button>
                            </div>
                        </form>
                    </section>
                    <?php if($requisites->isNotEmpty()): ?>
                    <div data-show-animation="fadeInUp" style="width: 100%" class="fadeInUp">
                        <section class="user-section  _full-deck-content">
                            <div class="table-responsive">
                                <table class="table-2 d-block">
                                    <tbody>
                                    <tr>
                                        <th><?php echo app('translator')->get('app.Система'); ?></th>
                                        <th><?php echo app('translator')->get('app.Реквизиты'); ?></th>
                                    </tr>

                                    <?php $__currentLoopData = $requisites; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $requisite): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <tr>
                                            <td>
                                                <?php if($requisite->type == \App\Outcome::QIWI): ?>
                                                    QIWI
                                                <?php elseif($requisite->type == \App\Outcome::PAYEER): ?>
                                                    PAYEER
                                                <?php elseif($requisite->type == \App\Outcome::PERFECT_MONEY): ?>
                                                    Perfect Money
                                                <?php elseif($requisite->type == \App\Outcome::BITCOIN): ?>
                                                    Bitcoin
                                                <?php elseif($requisite->type == \App\Outcome::CARD): ?>
                                                    Банковская карта
                                                <?php elseif($requisite->type == \App\Outcome::ADVACASH): ?>
                                                    Advacash
                                                <?php elseif($requisite->type == \App\Outcome::YANDEX): ?>
                                                    Яндекс Деньги
                                                <?php endif; ?>
                                            </td>
                                            <td><?php echo e($requisite->value); ?></td>
                                        </tr>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </tbody>
                                </table>
                            </div>
                        </section>
                    </div>
                    <?php endif; ?>
                </div>
            </app-invest>
        </div>
    </main>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.front_app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/maksa988/www/invest2/resources/views/cabinet/requisites.blade.php ENDPATH**/ ?>