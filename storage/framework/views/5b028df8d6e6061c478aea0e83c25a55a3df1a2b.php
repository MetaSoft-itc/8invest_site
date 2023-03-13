<div>
    <div class="row">
        <span data-v-e4d5b16a="" class="color-gray font-sm font-medium">Выберите валюту</span>
        <select name="currency" wire:model="currency" class="select-dropdown ng-untouched ng-pristine ng-valid">

            <option value="<?php echo e(\App\Account::CURRENCY_USD); ?>">USD</option>
            <option value="<?php echo e(\App\Account::CURRENCY_EUR); ?>">AM</option>
            <option value="<?php echo e(\App\Account::CURRENCY_BTC_ONE); ?>"><?php echo e(config('crypto.'. \App\Account::CURRENCY_BTC_ONE .'.name')); ?></option>
            <option value="<?php echo e(\App\Account::CURRENCY_BTC_TWO); ?>"><?php echo e(config('crypto.'. \App\Account::CURRENCY_BTC_TWO .'.name')); ?></option>
        </select>
    </div>

    <div class="row">
        <span data-v-e4d5b16a="" class="color-gray font-sm font-medium">Выберите способ оплаты</span>
        <select name="payment_system" class="select-dropdown ng-untouched ng-pristine ng-valid">
            <?php $__currentLoopData = $systems; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $systemKey => $systemName): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <option value="<?php echo e($systemKey); ?>"><?php echo e($systemName); ?></option>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </select>
    </div>
</div>
<?php /**PATH /var/www/invest/resources/views/livewire/income-currency-system.blade.php ENDPATH**/ ?>