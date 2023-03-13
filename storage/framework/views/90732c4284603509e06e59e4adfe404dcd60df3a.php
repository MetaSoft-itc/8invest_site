<div data-v-0297da3b="" class="grid-column-12 grid-column-6--xl grid-column-start-4--xl padding-bottom-5">
    <?php if($success): ?>
    <div class="alert alert-success">
        <?php echo e($this->amount); ?> <?php echo e($currencyOneName); ?> было успешно сконвертировано в <?php echo e($converted); ?> <?php echo e($currencyTwoName); ?>

    </div>
    <?php endif; ?>
    <h4 data-v-0297da3b="" class="font-medium margin-y-0 text-tight"> Как это работает? </h4>
    <p data-v-0297da3b="" class="color-gray font-sm"> Компания Avax предоставляет возможность мгновенного
        обмена средств внутри вашего аккаунта. Для этого вам потребуется выбрать направление обмена между
        балансами и ввести сумму которую вы отдаете и во второй форме вам автоматически рассчитает сумму в
        другой валюте которую вы получите. Ежедневное ограничение по конвертации составляет 5 раз в сутки. </p>
    <div data-v-0297da3b="" class="margin-y-4">1 <?php echo e($currencyOneName); ?> =
        <div data-v-0297da3b="" class="font-xl text-tight"> <?php echo e($currencyRate); ?>

            <span data-v-0297da3b="" class="color-gray"> <?php echo e($currencyTwoName); ?> </span>
        </div>
    </div>
    <div data-v-0297da3b="" class="conversion grid grid-row-gap-5 grid-column-gap-4--md relative">
        <div data-v-0297da3b="" class="grid-column-12 grid-column-6--md">
            <span data-v-0297da3b="" class="flex font-sm color-gray font-medium margin-bottom-1"> Сумма для конвертации </span>
            <div data-v-0297da3b="" class="flex">
                <div data-v-7f923647="" data-v-0297da3b="" data-vv-as=" " class="field flex-grow field--left"><!---->
                    <div data-v-7f923647="" class="relative">
                        <div data-v-7f923647="" class="field__input-wrapper flex items-center overflow-hidden">
                            <input data-v-7f923647="" wire:model="amount" id="input_7g3417wn" name="amount_one" autocomplete="" type="text" placeholder="0" class="field__input">
                        </div>
                        <div data-v-7f923647="" class="field__icon field__icon--suffix absolute top-0 bottom-0 margin-y-auto flex"></div>
                    </div>
                </div>
                <div data-v-fa5ceebe="" data-v-0297da3b="" class="sticky-select--right sticky-select">
                    <select wire:model="currencyOne" name="currency_two">
                        <?php if($currencyTwo != \App\Account::CURRENCY_USD): ?>
                        <option value="<?php echo e(\App\Account::CURRENCY_USD); ?>">USD</option>
                        <?php endif; ?>
                        <?php if($currencyTwo != \App\Account::CURRENCY_EUR): ?>
                        <option value="<?php echo e(\App\Account::CURRENCY_EUR); ?>">AM</option>
                        <?php endif; ?>
                        <?php if($currencyTwo != \App\Account::CURRENCY_RUB): ?>
                        <option value="<?php echo e(\App\Account::CURRENCY_RUB); ?>">RUB</option>
                        <?php endif; ?>
                        <?php if($currencyTwo != \App\Account::CURRENCY_BTC_ONE): ?>
                        <option value="<?php echo e(\App\Account::CURRENCY_BTC_ONE); ?>">BTC</option>
                        <?php endif; ?>
                        <?php if($currencyTwo != \App\Account::CURRENCY_BTC_TWO): ?>
                        <option value="<?php echo e(\App\Account::CURRENCY_BTC_TWO); ?>">ETH</option>
                        <?php endif; ?>
                    </select>
                </div>
            </div>
            <div data-v-0297da3b="" class="font-sm color-gray margin-top-4"> Баланс: <?php echo e($oneBalance); ?> <?php echo e($currencyOneName); ?></div>
        </div>
        <div data-v-0297da3b="" class="grid-column-12 grid-column-6--md">
            <span data-v-0297da3b="" class="flex font-sm color-gray font-medium margin-bottom-1"> Конвертированная сумма </span>
            <div data-v-0297da3b="" class="flex">
                <div data-v-7f923647="" data-v-0297da3b="" data-vv-as=" " class="field flex-grow field--left">
                    <div data-v-7f923647="" class="field__input-wrapper overflow-hidden">
                        <div data-v-7f923647="" class="field__input"><?php echo e($converted); ?></div>
                    </div>
                </div>
                <div data-v-fa5ceebe="" data-v-0297da3b="" class="sticky-select--right sticky-select">
                    <select wire:model="currencyTwo" name="currency_two">
                        <?php if($currencyOne != \App\Account::CURRENCY_USD): ?>
                            <option value="<?php echo e(\App\Account::CURRENCY_USD); ?>">USD</option>
                        <?php endif; ?>
                        <?php if($currencyOne != \App\Account::CURRENCY_EUR): ?>
                            <option value="<?php echo e(\App\Account::CURRENCY_EUR); ?>">AM</option>
                        <?php endif; ?>
                        <?php if($currencyOne != \App\Account::CURRENCY_RUB): ?>
                            <option value="<?php echo e(\App\Account::CURRENCY_RUB); ?>">RUB</option>
                        <?php endif; ?>
                        <?php if($currencyOne != \App\Account::CURRENCY_BTC_ONE): ?>
                            <option value="<?php echo e(\App\Account::CURRENCY_BTC_ONE); ?>">BTC</option>
                        <?php endif; ?>
                        <?php if($currencyOne != \App\Account::CURRENCY_BTC_TWO): ?>
                            <option value="<?php echo e(\App\Account::CURRENCY_BTC_TWO); ?>">ETH</option>
                        <?php endif; ?>
                    </select>
                </div>
            </div>
            <div data-v-0297da3b="" class="font-sm color-gray margin-top-4"> Баланс: <?php echo e($twoBalance); ?> <?php echo e($currencyTwoName); ?></div>
        </div>
    </div>
    <button data-v-141d1a81="" wire:click="$emit('convert')" type="button" data-v-0297da3b="" <?php if(! $isCanChange): ?> disabled <?php endif; ?> class="width-full margin-top-4 button button--primary <?php if(! $isCanChange): ?> button--disabled <?php endif; ?> button--mini">
        <span data-v-141d1a81="" class="button__content">
            <svg data-v-0297da3b="" data-v-141d1a81="" viewBox="0 0 20 18" fill="none" xmlns="http://www.w3.org/2000/svg" class="fill-white height-1 margin-right-2"><path data-v-0297da3b="" data-v-141d1a81="" d="M1 0h18a1 1 0 011 1v16a1 1 0 01-1 1H1a1 1 0 01-1-1V1a1 1 0 011-1zm12 4v2H9v2h4v2l3.5-3L13 4zM7 14v-2h4v-2H7V8l-3.5 3L7 14z" fill="#9195A8"></path></svg>
            Полная конверсия
        </span>
    </button>
</div>
<?php /**PATH /var/www/invest/resources/views/livewire/conversion-form.blade.php ENDPATH**/ ?>