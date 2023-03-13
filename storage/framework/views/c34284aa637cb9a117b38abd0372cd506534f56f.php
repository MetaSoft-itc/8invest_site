<?php $__env->startSection('title', 'Оповещения'); ?>

<?php $__env->startSection('content'); ?>
<main class="flex flex-column flex-grow trans-margin-left trans-0-3 margin-sidebar">
    <div data-v-1f79091c="" data-v-5e99d920=""
         class="grid padding-x-3 padding-y-4 shadowed border-rounded-3 bg-white margin-x-3 margin-top-5 margin-top-6--md margin-top-0--lg">
        <div data-v-1f79091c="" class="grid-column-12 grid-column-6--xl grid-column-start-4--xl">
            <ul data-v-1f79091c="" class="margin-y-0 padding-left-0 no-list grid grid-row-gap-3">
                <?php $__currentLoopData = $notifications; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $notification): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('notification', ['notification' => $notification])->html();
} elseif ($_instance->childHasBeenRendered('CmnrlEw')) {
    $componentId = $_instance->getRenderedChildComponentId('CmnrlEw');
    $componentTag = $_instance->getRenderedChildComponentTagName('CmnrlEw');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('CmnrlEw');
} else {
    $response = \Livewire\Livewire::mount('notification', ['notification' => $notification]);
    $html = $response->html();
    $_instance->logRenderedChild('CmnrlEw', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </ul>
        </div>
    </div>
</main>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/invest/resources/views/cabinet/notifications.blade.php ENDPATH**/ ?>