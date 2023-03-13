<?php $__env->startSection('content'); ?>
    <div class="container-fluid py-4">

        <div class="row justify-content-center">
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
                <form method="POST" action="<?php echo e(route('admin.news.store')); ?>" class="row justify-content-center" enctype="multipart/form-data">
                    <?php echo csrf_field(); ?>
                    <div class="col-lg-12">
                        <?php echo $__env->make('admin.news._form', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                        <div class="form-group row">
                            <div class="col-12 text-center">
                                <button class="btn btn-success"><?php echo app('translator')->get('Сохранить'); ?></button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/invest/resources/views/admin/news/create.blade.php ENDPATH**/ ?>