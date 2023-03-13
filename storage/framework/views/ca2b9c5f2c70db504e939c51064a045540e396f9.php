<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo e(asset('css/cabinet_sheet.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('assets/css/app.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('css/cabinet.css')); ?>">
    <link href="<?php echo e(asset('assets/app.f39ec460.css')); ?>" rel="preload" as="style">
    <link href="<?php echo e(asset('assets/app.f39ec460.css')); ?>" rel="stylesheet">
    <?php echo \Livewire\Livewire::styles(); ?>

    <script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
    <title>Cabinet - <?php echo $__env->yieldContent('title'); ?></title>
</head>
<body>
<div id="cabinet" class="container-fluid p-0">
    <div class="row m-0">
        <div class="col-xl-1 d-xl-block d-none p-0">
            <?php echo $__env->make('cabinet.new.sidebar',['user'=>$user], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        </div>
        <div class="col-xl-11 col-lg-12 p-0">
            <?php echo $__env->yieldContent('content'); ?>

        </div>
    </div>
</div>
<?php echo $__env->make('cabinet.new._mobile-nav', ['user'=>$user], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<div aria-live="polite" aria-atomic="true" style="top: 45%; z-index: 1000; flex-direction: column;" class="position-fixed d-flex justify-content-center align-items-center w-100">
<?php $__currentLoopData = $user->notifications; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $notif): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('notification', ['notification' => $notif,'list' => false])->html();
} elseif ($_instance->childHasBeenRendered('NaZpYI6')) {
    $componentId = $_instance->getRenderedChildComponentId('NaZpYI6');
    $componentTag = $_instance->getRenderedChildComponentTagName('NaZpYI6');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('NaZpYI6');
} else {
    $response = \Livewire\Livewire::mount('notification', ['notification' => $notif,'list' => false]);
    $html = $response->html();
    $_instance->logRenderedChild('NaZpYI6', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</div>
<script src="<?php echo e(asset('assets/js/vendors.js')); ?>"></script>
<script src="<?php echo e(asset('assets/js/app.js')); ?>"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
<?php echo \Livewire\Livewire::scripts(); ?>

</body>
</html>
<?php /**PATH /var/www/html/sCUM_Crypto/resources/views/layouts/cabinet.blade.php ENDPATH**/ ?>