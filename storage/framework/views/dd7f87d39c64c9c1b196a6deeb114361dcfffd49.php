<?php $__env->startSection('content'); ?>
    <div class="container-fluid py-4">

        <div class="row">
            <?php if(session()->has('success')): ?>
                <div class="col-12">
                    <div class="alert alert-success">
                        Данные успешно сохранены
                    </div>
                </div>
            <?php endif; ?>

            <?php if($errors->isNotEmpty()): ?>
                <div class="col-12">
                    <div class="alert alert-danger">
                        <?php echo e(implode(', ', $errors->all())); ?>

                    </div>
                </div>
            <?php endif; ?>

            <div class="col-lg-6">
                <form method="POST" action="<?php echo e(route('admin.promocodes.update', $promocode)); ?>" class="row justify-content-center">
                    <?php echo csrf_field(); ?>
                    <?php echo method_field('PATCH'); ?>
                    <div class="col-lg-12">
                        <?php echo $__env->make('admin.promocodes._form', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                        <div class="form-group row">
                            <div class="col-12 text-center">
                                <button class="btn btn-success"><?php echo app('translator')->get('Сохранить'); ?></button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>

            <div class="col-lg-6">
                <div class="card">
                    <div class="card-header">
                        Активировали:
                    </div>
                    <div class="card-body p-0">
                        <table class="table table-hover m-0">
                            <thead>
                            <tr>
                                <th>ID</th>
                                <th>Email</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php $__currentLoopData = $promocode->users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr style="cursor: pointer" onclick="location.href='<?php echo e(route('admin.users.edit', $user)); ?>'">
                                    <td><?php echo e($user->id); ?></td>
                                    <td><?php echo e($user->email); ?></td>
                                </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/invest/resources/views/admin/promocodes/edit.blade.php ENDPATH**/ ?>