<?php $__env->startSection('content'); ?>
    <main class="page-content">
        <div class="page-content__content  user-page">
            <?php echo $__env->make('cabinet._navigation', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <app-partners _nghost-c8=""><!---->
                <div class="user-page__main">
                    <section class="user-section fadeInUp" data-show-animation="fadeInUp" style="margin-bottom: 10rem;">
                        <h2 class="user-section__title g-fs-20 d-2-none">Мои партнёры</h2>
                    </section>
                    <div style="width: 100%">
                        <div class="table-responsive">
                            <table class="table-2 stats-table">
                                <tbody>
                                <tr>
                                    <th><?php echo app('translator')->get('app.Всего приглашено'); ?></th>
                                    <th><?php echo app('translator')->get('app.Бонусы'); ?></th>
                                    <th><?php echo app('translator')->get('app.Ваш код приглашения'); ?></th>
                                </tr>
                                <tr>
                                    <td>
                                        <span class="my-referal-code"><?php echo e(count($referals[0]) + count($referals[1]) + count($referals[2])); ?></span>
                                    </td>
                                    <td>
                                        <?php echo e((count($referals[0]) * 0.4) + (count($referals[1]) * 0.2) + (count($referals[2]) * 0.1)); ?>%
                                    </td>
                                    <td>
                                    <span class="referal-code my-referal-code">
                                        <?php echo e($user->code); ?> <br>
                                        <small><?php echo e(route('register', ['code' => $user->code])); ?></small>
                                    </span>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <section class="user-section fadeInUp" data-show-animation="fadeInUp" style="margin-bottom: 10rem;">
                        <div class="user-section__text ">
                            <p>Первый уровень</p>
                        </div>
                    </section>
                    <div data-show-animation="fadeInUp" style="width: 100%" class="fadeInUp">
                        <section class="user-section  _full-deck-content">
                            <div class="table-responsive">
                                <table class="table-2 d-block">
                                    <tbody>
                                    <tr>
                                        <th>Email</th>
                                        <th><?php echo app('translator')->get('app.Дата'); ?></th>
                                        <th><?php echo app('translator')->get('app.Бонус'); ?></th>
                                    </tr>
                                    <?php $__empty_1 = true; $__currentLoopData = $referals[0]; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                        <tr>
                                            <td><?php echo e($item->hidden_email); ?></td>
                                            <td><?php echo e($item->created_at->format('d.m.Y')); ?></td>
                                            <td><?php echo e($item->is_depositet ? __('app.Активен') : __('app.Не активен')); ?></td>
                                        </tr>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                        <tr>
                                            <td colspan="3"><?php echo app('translator')->get('app.Приглашений нет'); ?></td>
                                        </tr>
                                    <?php endif; ?>
                                    </tbody>
                                </table>
                            </div>
                        </section>
                    </div>
                    <section class="user-section fadeInUp" data-show-animation="fadeInUp" style="margin-bottom: 10rem;">
                        <div class="user-section__text ">
                            <p>Второй уровень</p>
                        </div>
                    </section>
                    <div data-show-animation="fadeInUp" style="width: 100%" class="fadeInUp">
                        <section class="user-section  _full-deck-content">
                            <div class="table-responsive">
                                <table class="table-2 d-block">
                                    <tbody>
                                    <tr>
                                        <th>Email</th>
                                        <th><?php echo app('translator')->get('app.Дата'); ?></th>
                                        <th><?php echo app('translator')->get('app.Бонус'); ?></th>
                                    </tr>
                                    <?php $__empty_1 = true; $__currentLoopData = $referals[1]; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                        <tr>
                                            <td><?php echo e($item->hidden_email); ?></td>
                                            <td><?php echo e($item->created_at->format('d.m.Y')); ?></td>
                                            <td><?php echo e($item->is_depositet ? __('app.Активен') : __('app.Не активен')); ?></td>
                                        </tr>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                        <tr>
                                            <td colspan="3"><?php echo app('translator')->get('app.Приглашений нет'); ?></td>
                                        </tr>
                                    <?php endif; ?>
                                    </tbody>
                                </table>
                            </div>
                        </section>
                    </div>
                    <section class="user-section fadeInUp" data-show-animation="fadeInUp" style="margin-bottom: 10rem;">
                        <div class="user-section__text ">
                            <p>Третий уровень</p>
                        </div>
                    </section>
                    <div data-show-animation="fadeInUp" style="width: 100%" class="fadeInUp">
                        <section class="user-section  _full-deck-content">
                            <div class="table-responsive">
                                <table class="table-2 d-block">
                                    <tbody>
                                    <tr>
                                        <th>Email</th>
                                        <th><?php echo app('translator')->get('app.Дата'); ?></th>
                                        <th><?php echo app('translator')->get('app.Бонус'); ?></th>
                                    </tr>
                                    <?php $__empty_1 = true; $__currentLoopData = $referals[2]; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                        <tr>
                                            <td><?php echo e($item->hidden_email); ?></td>
                                            <td><?php echo e($item->created_at->format('d.m.Y')); ?></td>
                                            <td><?php echo e($item->is_depositet ? __('app.Активен') : __('app.Не активен')); ?></td>
                                        </tr>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                        <tr>
                                            <td colspan="3"><?php echo app('translator')->get('app.Приглашений нет'); ?></td>
                                        </tr>
                                    <?php endif; ?>
                                    </tbody>
                                </table>
                            </div>
                        </section>
                    </div>
                </div>
            </app-partners>
        </div>
    </main>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('old-content'); ?>
<td width="10px"></td>
<td align="left" style="vertical-align:top">
    <table width="99%">
        <tbody>
        <tr>
            <td width="33%" align="left" style="vertical-align:top;">
                <div class="ac-bals-it b1">
                    <p><?php echo app('translator')->get('app.Всего приглашено'); ?>:</p>
                    <span><?php echo e(count($referals[0]) + count($referals[1]) + count($referals[2])); ?></span>
                </div>
            </td>
            <td width="1%"></td>
            <td width="32%" align="left" style="vertical-align:top;">
                <div class="ac-bals-it b2">
                    <p><?php echo app('translator')->get('app.Бонусы'); ?>:</p>
                    <span><?php echo e((count($referals[0]) * 0.4) + (count($referals[1]) * 0.2) + (count($referals[2]) * 0.1)); ?>%</span>
                </div>
            </td>
            <td width="1%"></td>
            <td width="33%" align="left" style="vertical-align:top">
                <div class="ac-bals-it b3">
                    <p class="mb-0"><?php echo app('translator')->get('app.Ваш код приглашения'); ?>:</p>
                    <span class="mt-0 my-referal-code">
                        <?php echo e($user->code); ?> <br>
                        <small><?php echo e(route('register', ['code' => $user->code])); ?></small>
                    </span>
                </div>
            </td>
        </tr>
        </tbody>
    </table>
    <br>
    <table width="99%">
        <tbody>
        <tr>
            <td width="66%" align="left" style="vertical-align:top">
                <div class="ac-bals">
                    <?php echo app('translator')->get('Первый уровень'); ?>
                    <table>
                        <tbody>
                        <tr>
                            <th>Email</th>
                            <th><?php echo app('translator')->get('app.Дата'); ?></th>
                            <th><?php echo app('translator')->get('app.Бонус'); ?></th>
                        </tr>
                        <?php $__empty_1 = true; $__currentLoopData = $referals[0]; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                            <tr>
                                <td><?php echo e($item->hidden_email); ?></td>
                                <td><?php echo e($item->created_at->format('d.m.Y')); ?></td>
                                <td><?php echo e($item->is_depositet ? __('app.Активен') : __('app.Не активен')); ?></td>
                            </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                            <tr>
                                <td colspan="3"><?php echo app('translator')->get('app.Приглашений нет'); ?></td>
                            </tr>
                        <?php endif; ?>
                        </tbody>
                    </table>
                </div>
                <div class="ac-bals mt-3">
                    <?php echo app('translator')->get('app.Второй уровень'); ?>
                    <table>
                        <tbody>
                        <tr>
                            <th>Email</th>
                            <th><?php echo app('translator')->get('app.Дата'); ?></th>
                            <th><?php echo app('translator')->get('app.Бонус'); ?></th>
                        </tr>
                        <?php $__empty_1 = true; $__currentLoopData = $referals[1]; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                            <tr>
                                <td><?php echo e($item->hidden_email); ?></td>
                                <td><?php echo e($item->created_at->format('d.m.Y')); ?></td>
                                <td><?php echo e($item->is_depositet ? __('app.Активен') : __('app.Не активен')); ?></td>
                            </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                            <tr>
                                <td colspan="3"><?php echo app('translator')->get('app.Приглашений нет'); ?></td>
                            </tr>
                        <?php endif; ?>
                        </tbody>
                    </table>
                </div>
                <div class="ac-bals mt-3">
                    <?php echo app('translator')->get('app.Третий уровень'); ?>
                    <table>
                        <tbody>
                        <tr>
                            <th>Email</th>
                            <th><?php echo app('translator')->get('app.Дата'); ?></th>
                            <th><?php echo app('translator')->get('app.Бонус'); ?></th>
                        </tr>
                        <?php $__empty_1 = true; $__currentLoopData = $referals[2]; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                            <tr>
                                <td><?php echo e($item->hidden_email); ?></td>
                                <td><?php echo e($item->created_at->format('d.m.Y')); ?></td>
                                <td><?php echo e($item->is_depositet ? __('app.Активен') : __('app.Не активен')); ?></td>
                            </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                            <tr>
                                <td colspan="3"><?php echo app('translator')->get('app.Приглашений нет'); ?></td>
                            </tr>
                        <?php endif; ?>
                        </tbody>
                    </table>
                </div>
            </td>
            <td width="1%"></td>
            <td width="33%" align="left" style="vertical-align:top">
                <div class="deposit-list mt-5">
                    <div  class="deposit-card mt-3 Light">
                        <div  class="row">
                            <div  class="col-md-4 col-12 pt-5 d-flex justify-content-center">
                                <img  class="cash-back-img mt-md-0 mt-5" src="https://www.kinvest-ru.com/assets/cash-back-1.png">
                            </div>
                            <div  class="col-md-8 col-12">
                                <div  class="p-md-2 p-5">
                                    <p  class="deposit-description-header "><?php echo app('translator')->get('app.Получи'); ?> 10$</p>
                                    <p  class="deposit-description ">10$ <?php echo app('translator')->get('и дополнительно'); ?> + 0.4% <?php echo app('translator')->get('app.к каждому депозиту за приглашённых первого уровня'); ?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="deposit-card mt-3 Light">
                        <div  class="row">
                            <div  class="col-md-4 col-12 pt-5 d-flex justify-content-center">
                                <img  class="cash-back-img mt-md-0 mt-5" src="https://www.kinvest-ru.com/assets/cash-back-2.png">
                            </div>
                            <div  class="col-md-8 col-12">
                                <div  class="p-md-2 p-5">
                                    <p  class="deposit-description-header"><?php echo app('translator')->get('app.Получи'); ?> 5$</p>
                                    <p  class="deposit-description">5$ <?php echo app('translator')->get('и дополнительно'); ?> + 0.2% <?php echo app('translator')->get('app.к каждому депозиту за приглашённых второго уровня'); ?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="deposit-card mt-3 Light">
                        <div  class="row">
                            <div  class="col-md-4 col-12 pt-5 d-flex justify-content-center">
                                <img  class="cash-back-img mt-md-0 mt-5" src="https://www.kinvest-ru.com/assets/cash-back-3.png">
                            </div>
                            <div  class="col-md-8 col-12">
                                <div  class="p-md-2 p-5">
                                    <p  class="deposit-description-header"><?php echo app('translator')->get('app.Получи'); ?> 2.5$</p>
                                    <p  class="deposit-description">2.5$ <?php echo app('translator')->get('и дополнительно'); ?> + 0.1% <?php echo app('translator')->get('app.к каждому депозиту за приглашённых третего уровня'); ?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </td>
        </tr>
        </tbody>
    </table>
</td>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.front_app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/maksa988/www/invest2/resources/views/cabinet/referals.blade.php ENDPATH**/ ?>