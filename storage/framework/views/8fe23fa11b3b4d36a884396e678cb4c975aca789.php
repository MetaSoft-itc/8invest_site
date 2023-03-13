<?php $__env->startSection('content'); ?>
    <td width="10px"></td>
    <td align="left" style="vertical-align:top">
        <?php echo $__env->make('layouts._balance', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <br>
        <div class="ac-bals oper" align="center">
            <b><?php echo app('translator')->get('app.Баннер'); ?> #1</b>
            <br><br>
            <a href="<?php echo e(url('/')); ?>"><img src="<?php echo e(asset('images/banners/1.jpg')); ?>" width="250" alt=""></a><br><br>
            <textarea name="" id="" style=" width:100%; text-align:center; height:30px;">&lt;a href="<?php echo e(url('/')); ?>" target="_blank"&gt;&lt;img src="<?php echo e(asset('images/banners/1.jpg')); ?>" alt=""&gt;&lt;/a&gt;</textarea>
            <br><br><br>
            <b><?php echo app('translator')->get('app.Баннер'); ?> #2</b>
            <br><br>
            <a href="<?php echo e(url('/')); ?>"><img src="<?php echo e(asset('images/banners/2.jpg')); ?>" width="250" alt=""></a><br><br>
            <textarea name="" id="" style=" width:100%; text-align:center; height:30px;">&lt;a href="<?php echo e(url('/')); ?>" target="_blank"&gt;&lt;img src="<?php echo e(asset('images/banners/2.jpg')); ?>" alt=""&gt;&lt;/a&gt;</textarea>
            <br><br><br>
            <b><?php echo app('translator')->get('app.Баннер'); ?> #3</b>
            <br><br>
            <a href="<?php echo e(url('/')); ?>"><img src="<?php echo e(asset('images/banners/3.jpg')); ?>" width="250" alt=""></a><br><br>
            <textarea name="" id="" style=" width:100%; text-align:center; height:30px;">&lt;a href="<?php echo e(url('/')); ?>" target="_blank"&gt;&lt;img src="<?php echo e(asset('images/banners/3.jpg')); ?>" alt=""&gt;&lt;/a&gt;</textarea>
            <br><br><br>

        </div>
    </td>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/maksa988/www/invest3/resources/views/cabinet/promo.blade.php ENDPATH**/ ?>