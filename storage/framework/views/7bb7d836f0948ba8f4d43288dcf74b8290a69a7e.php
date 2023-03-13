 <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'admin.components._form-group','data' => ['name' => 'name','label' => 'Название']]); ?>
<?php $component->withName('formGroup'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['name' => 'name','label' => 'Название']); ?>
    <input type="text" class="form-control col-lg-8 <?php echo e($errors->has('name') ? 'is-invalid' : ''); ?>"
           name="name"
           value="<?php echo e(old('name') ?? ($promocode->name ?? '')); ?>">
 <?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?> 

 <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'admin.components._form-group','data' => ['name' => 'code','label' => 'Код']]); ?>
<?php $component->withName('formGroup'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['name' => 'code','label' => 'Код']); ?>
    <input type="text" class="form-control col-lg-8 <?php echo e($errors->has('code') ? 'is-invalid' : ''); ?>"
           name="code"
           value="<?php echo e(old('code') ?? ($promocode->code ?? '')); ?>">
 <?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?> 

 <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'admin.components._form-group','data' => ['name' => 'value','label' => 'Процент']]); ?>
<?php $component->withName('formGroup'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['name' => 'value','label' => 'Процент']); ?>
    <input type="text" class="form-control col-lg-8 <?php echo e($errors->has('value') ? 'is-invalid' : ''); ?>"
           name="value"
           value="<?php echo e(old('value') ?? ($promocode->value ?? '')); ?>">
 <?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?> 

<?php /**PATH /var/www/html/sCUM_Crypto/resources/views/admin/promocodes/_form.blade.php ENDPATH**/ ?>