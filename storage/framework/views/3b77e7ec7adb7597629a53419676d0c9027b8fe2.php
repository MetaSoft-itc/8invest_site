<?php $__env->startSection('content'); ?>
    <div class="container-fluid">

            <div class="col-12">
                <table class="table table-hovered">
                    <thead>
                    <tr>
                        <th><b>Пользователь</b> <span class="badge badge-info">Ожидают верификацию</span></th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php $__currentLoopData = $forVerifications; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td data-label="Ожидают верификацию">
                                <a href="<?php echo e(route('admin.users.edit', $user)); ?>"><?php echo e($user->name); ?></a>
                            </td>
                        </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>
                </table>
            </div>


        <div class="col-12 mb-4">
            <table class="table table-hovered">
                <thead>
                <tr>
                    <th>Пакет</th>
                    <th>Пользователь</th>
                    <th>Сумма</th>
                    <th>Статус</th>
                </tr>
                </thead>
                <tbody>
                <?php $__currentLoopData = $deposits; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $dep): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>

                        <td data-label="Код"><?php echo e($dep->name); ?></td>
                        <td data-label="Пользователь">
                            <a href="<?php echo e(route('admin.users.edit', $dep->user)); ?>"><?php echo e($dep->user->name); ?></a>
                        </td>
                        <td data-label="Сумма">
                            <?php echo e($dep->amount / 100000); ?>

                            <?php echo e($dep->currency); ?>

                        </td>
                        <td data-label="Статус">
                            <?php if($dep->status == \App\Deposit::STATUS_NOT_PAYED): ?>
                                В ожидании оплаты
                            <?php elseif($dep->status == \App\Deposit::STATUS_PAYED): ?>
                                Оплачено
                            <?php elseif($dep->status == \App\Deposit::STATUS_CANCELED): ?>
                                Отменено
                            <?php endif; ?>
                        </td>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
            </table>
        </div>
            <div class="col-12">
                <table class="table table-hovered">
                    <thead>
                        <tr>
                            <th>Код</th>
                            <th>Пользователь</th>
                            <th>Сумма</th>
                            <th>Статус</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $__currentLoopData = $incomes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $income): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td data-label="Код"><?php echo e($income->id); ?></td>
                            <td data-label="Пользователь">
                                <a href="<?php echo e(route('admin.users.edit', $income->user)); ?>"><?php echo e($income->user->name); ?></a>
                            </td>
                            <td data-label="Сумма">
                                <?php echo e($income->amount / 100000); ?>

                                <?php echo e($income->currency); ?>

                            </td>
                            <td data-label="Статус">
                                <?php if($income->status == \App\Income::STATUS_WAITING): ?>
                                    В ожидании
                                <?php elseif($income->status == \App\Income::STATUS_SUCCESS): ?>
                                    Обработано
                                <?php elseif($income->status == \App\Income::STATUS_ERROR): ?>
                                    Ошибка
                                <?php elseif($income->status == \App\Income::STATUS_PAID_BY_USER): ?>
                                    Оплачено
                                <?php elseif($income->status == \App\Income::STATUS_CANCELED): ?>
                                    Отменено
                                <?php endif; ?>
                            </td>
                        </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>
                </table>
            </div>

            <div class="col-12">
                <hr>
            </div>

        <table class="table">
            <thead>
            <tr>
                <th>Дата</th>
                <th>Значение</th>
                <th>Пользователь</th>
            </tr>
            </thead>
            <tbody>
            <?php $__empty_1 = true; $__currentLoopData = $tracking; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                <tr>
                    <td><?php echo e($item->datetime); ?></td>
                    <td><?php echo e($item->value); ?></td>
                    <td><?php if($item->user_id): ?> <a href="<?php echo e(route('admin.users.edit', $item->user_id)); ?>">#<?php echo e($item->user_id); ?></a> <?php else: ?> - <?php endif; ?></td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                <tr>
                    <td colspan="4" class="text-center">Записей нет</td>
                </tr>
            <?php endif; ?>
            </tbody>
        </table>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/sCUM_Crypto/resources/views/admin/dashboard.blade.php ENDPATH**/ ?>