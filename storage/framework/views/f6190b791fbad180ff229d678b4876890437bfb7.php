<?php $__env->startSection('content'); ?>
    <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount("user-search")->html();
} elseif ($_instance->childHasBeenRendered('KwnFEWM')) {
    $componentId = $_instance->getRenderedChildComponentId('KwnFEWM');
    $componentTag = $_instance->getRenderedChildComponentTagName('KwnFEWM');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('KwnFEWM');
} else {
    $response = \Livewire\Livewire::mount("user-search");
    $html = $response->html();
    $_instance->logRenderedChild('KwnFEWM', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/sCUM_Crypto/resources/views/admin/users/index.blade.php ENDPATH**/ ?>