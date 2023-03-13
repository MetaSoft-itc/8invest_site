<?php $__env->startSection('content'); ?>
    <div class="container-fluid">

        <?php if(session('error')): ?>
            <div class="alert alert-danger"><?php echo e(session('error')); ?></div>
        <?php endif; ?>

        <form class="row my-3" action="<?php echo e(route('admin.calendar.store')); ?>">
            <div class="col-lg-4">
                <input type="date" name="date" class="form-control">
            </div>
            <div class="col-lg-7">
                <input type="text" name="value" class="form-control">
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
                <th>
                </th>
            </tr>
            </thead>
            <tbody>
            <?php $__empty_1 = true; $__currentLoopData = $dates; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $date): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                <tr>
                    <td><?php echo e($date->date); ?></td>
                    <td><?php echo e($date->value); ?></td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                <tr>
                    <td colspan="2" class="text-center">Записей нет</td>
                </tr>
            <?php endif; ?>
            </tbody>
        </table>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/maksa988/www/invest2/resources/views/admin/dashboard.blade.php ENDPATH**/ ?>