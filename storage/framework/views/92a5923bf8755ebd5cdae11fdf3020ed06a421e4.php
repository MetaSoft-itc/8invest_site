<?php $__env->startSection('content'); ?>
    <div class="container-fluid">

        <?php if(session('error')): ?>
            <div class="alert alert-danger"><?php echo e(session('error')); ?></div>
        <?php endif; ?>

        <form class="row my-3" action="<?php echo e(route('admin.tracking.store')); ?>">
            <div class="col-lg-3">
                <input type="datetime-local" name="datetime" class="form-control">
            </div>
            <div class="col-lg-3">
                <input type="text" name="value" class="form-control" placeholder="Значение">
            </div>
            <div class="col-lg-4">
                <select name="user_id" class="form-control">
                    <option value="">Пользователь</option>
                    <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option value="<?php echo e($user->id); ?>"><?php echo e($user->name); ?></option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </select>
            </div>
            <div class="col-lg">
                <button type="submit" class="btn btn-success w-100"><i class="fas fa-save"></i></button>
            </div>
        </form>

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

<?php echo $__env->make('admin.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/maksa988/www/invest3/resources/views/admin/dashboard.blade.php ENDPATH**/ ?>