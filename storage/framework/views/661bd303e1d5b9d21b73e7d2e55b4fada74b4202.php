<?php $__env->startSection('content'); ?>
    <div class="container-fluid">

        <?php if(session('error')): ?>
            <div class="alert alert-danger"><?php echo e(session('error')); ?></div>
        <?php endif; ?>

        <table class="table">
            <thead>
            <tr>
                <th>#</th>
                <th>Название</th>
                <th>Дата публикации</th>
                <th class="text-right">
                    <a href="<?php echo e(route('admin.news.create')); ?>" class="btn btn-sm btn-success"><i class="fas fa-plus"></i></a>
                </th>
            </tr>
            </thead>
            <tbody>
            <?php $__empty_1 = true; $__currentLoopData = $news; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                <tr>
                    <td><?php echo e($item->id); ?></td>
                    <td><?php echo e($item->title); ?></td>
                    <td><?php echo e($item->publised_at); ?></td>
                    <td class="text-right">
                        <div class="btn-group">
                            <?php echo $__env->make('admin.components._actions', ['data' => $item, 'options' => ['show' => false]], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                        </div>
                    </td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                <tr>
                    <td colspan="4" class="text-center">Новостей не найдено</td>
                </tr>
            <?php endif; ?>
            </tbody>
        </table>

        <div>
            <?php echo e($news->render()); ?>

        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/invest/resources/views/admin/news/index.blade.php ENDPATH**/ ?>