<section class="faq pb-70">
    <div class="container">
        <div class="section-title"><br><br>
            <h2><?php echo app('translator')->get('app.faq'); ?></h2>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="accordion" id="accordionExample">
                    <?php $__currentLoopData = __('app.questions'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="card">
                            <div class="card-header" id="headingOne">
                                <h2 class="mb-0">
                                    <button class="btn btn-link btn-question btn-block text-left" type="button" data-toggle="collapse" data-target="#collapse<?php echo e($index); ?>" aria-expanded="<?php echo e($loop->first ? 'true' : 'false'); ?>" aria-controls="collapse<?php echo e($index); ?>">
                                        <i class="fas fa-question mr-2"></i> <?php echo $item['q']; ?>

                                    </button>
                                </h2>
                            </div>

                            <div id="collapse<?php echo e($index); ?>" class="collapse <?php if($loop->first): ?> show <?php endif; ?>" aria-labelledby="heading<?php echo e($index); ?>" data-parent="#accordionExample">
                                <div class="card-body pt-0 pl-5">
                                    <?php echo $item['a']; ?>

                                </div>
                            </div>
                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            </div>
        </div>
    </div>
</section>
<?php /**PATH /var/www/invest/resources/views/pages/_faq.blade.php ENDPATH**/ ?>