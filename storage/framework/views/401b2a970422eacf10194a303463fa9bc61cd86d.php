<?php $__env->startSection('title', 'Конвертация'); ?>

<?php $__env->startSection('content'); ?>
    <main class="flex flex-column flex-grow trans-margin-left trans-0-3 margin-sidebar">
        <div data-v-0297da3b=""
             class="grid padding-x-3 padding-y-4 shadowed border-rounded-3 bg-white margin-x-3 margin-top-5 margin-top-6--md margin-top-0--lg">
            <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('conversion-form', [])->html();
} elseif ($_instance->childHasBeenRendered('3kRT8Cp')) {
    $componentId = $_instance->getRenderedChildComponentId('3kRT8Cp');
    $componentTag = $_instance->getRenderedChildComponentTagName('3kRT8Cp');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('3kRT8Cp');
} else {
    $response = \Livewire\Livewire::mount('conversion-form', []);
    $html = $response->html();
    $_instance->logRenderedChild('3kRT8Cp', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
        </div>
    </main>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/invest/resources/views/cabinet/conversion.blade.php ENDPATH**/ ?>