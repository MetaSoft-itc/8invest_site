<?php $__env->startSection('title', 'Конвертация'); ?>

<?php $__env->startSection('content'); ?>
    <main class="flex flex-column flex-grow trans-margin-left trans-0-3 margin-sidebar">
        <div data-v-0297da3b=""
             class="grid padding-x-3 padding-y-4 shadowed border-rounded-3 bg-white margin-x-3 margin-top-5 margin-top-6--md margin-top-0--lg">
            <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('conversion-form', [])->html();
} elseif ($_instance->childHasBeenRendered('A16YnTN')) {
    $componentId = $_instance->getRenderedChildComponentId('A16YnTN');
    $componentTag = $_instance->getRenderedChildComponentTagName('A16YnTN');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('A16YnTN');
} else {
    $response = \Livewire\Livewire::mount('conversion-form', []);
    $html = $response->html();
    $_instance->logRenderedChild('A16YnTN', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
        </div>
    </main>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/d33kei/Documents/Lar_Cry/invest/resources/views/cabinet/conversion.blade.php ENDPATH**/ ?>