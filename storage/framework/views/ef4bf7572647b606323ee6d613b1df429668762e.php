<div data-v-0297da3b="" class="grid-column-12 grid-column-6--xl grid-column-start-4--xl padding-bottom-5">
    <?php if($success): ?>
        <div class="alert alert-success">
            <strong><?php echo e($this->amount); ?> <?php echo e($currencyOneName); ?></strong> было успешно переведены пользователю с ID в <strong><?php echo e($toId); ?></strong>
        </div>
    <?php endif; ?>
    <?php if($error): ?>
        <div class="alert alert-error">
            <?php echo e($error); ?>

        </div>
    <?php endif; ?>
    <h4 data-v-0297da3b="" class="font-medium margin-y-0 text-tight"> Как это работает? </h4>
    <p data-v-0297da3b="" class="color-gray font-sm"> Вы передаете ваш уникальный ID или вводите ID пользователя которому хотите сделать перевод, указываете сумму, выбираете валюту и совершаете перевод. </p>
    <p data-v-0297da3b="" class="color-gray font-sm">
        Ваш уникальный ID для перевода: <strong><?php echo e(auth()->id()); ?></strong>
    </p>
    <div data-v-0297da3b="" class="conversion grid grid-row-gap-5 grid-column-gap-4--md relative">
        <div data-v-0297da3b="" class="grid-column-12 grid-column-6--md">
            <span data-v-0297da3b="" class="flex font-sm color-gray font-medium margin-bottom-1"> Сумма для перевода </span>
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
                    <select wire:model="currency">
                        <option value="<?php echo e(\App\Account::CURRENCY_USD); ?>">USD</option>
                        <option value="<?php echo e(\App\Account::CURRENCY_EUR); ?>">AM</option>
                        <option value="<?php echo e(\App\Account::CURRENCY_RUB); ?>">RUB</option>
                        <option value="<?php echo e(\App\Account::CURRENCY_BTC_ONE); ?>">BTC</option>
                        <option value="<?php echo e(\App\Account::CURRENCY_BTC_TWO); ?>">ETH</option>
                    </select>
                </div>
            </div>
            <div data-v-0297da3b="" class="font-sm color-gray margin-top-4"> Баланс: <?php echo e($oneBalance); ?> <?php echo e($currencyOneName); ?></div>
        </div>
        <div data-v-0297da3b="" class="grid-column-12 grid-column-6--md">
            <span data-v-0297da3b="" class="flex font-sm color-gray font-medium margin-bottom-1"> ID пользователя </span>
            <div data-v-0297da3b="" class="flex">
                <div data-v-7f923647="" data-v-0297da3b="" data-vv-as=" " class="field flex-grow field--left"><!---->
                    <div data-v-7f923647="" class="relative">
                        <div data-v-7f923647="" class="field__input-wrapper flex items-center overflow-hidden">
                            <input data-v-7f923647="" wire:model="toId" id="input_7g3417wn" name="id" autocomplete="" type="text" placeholder="Укажите ID" class="field__input">
                        </div>
                        <div data-v-7f923647="" class="field__icon field__icon--suffix absolute top-0 bottom-0 margin-y-auto flex"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="grid-column-12">
            <div data-v-7032d9db="" data-v-e4d5b16a="" data-vv-as=" " class="field">
                <div data-v-7032d9db="" class="flex justify-between">
                    <label data-v-7032d9db="" for="input_s1wtgga9" class="field__label flex font-sm color-gray font-medium margin-bottom-1">
                        Финансовый пароль
                    </label>
                </div>
                <div data-v-7032d9db="" class="relative">
                    <div data-v-7032d9db="" class="field__input-wrapper flex items-center overflow-hidden">
                        <input name="fin_password" wire:model="fin_password" type="password" class="field__input">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <button data-v-141d1a81="" wire:click="transfer" type="button" data-v-0297da3b="" <?php if(! $isCanTransfer): ?> disabled <?php endif; ?> class="width-full margin-top-4 button button--primary <?php if(! $isCanTransfer): ?> button--disabled <?php endif; ?> button--mini">
        <span data-v-141d1a81="" class="button__content">
            <svg data-v-0297da3b="" data-v-141d1a81="" viewBox="0 0 20 18" fill="none" xmlns="http://www.w3.org/2000/svg" class="fill-white height-1 margin-right-2"><path data-v-0297da3b="" data-v-141d1a81="" d="M1 0h18a1 1 0 011 1v16a1 1 0 01-1 1H1a1 1 0 01-1-1V1a1 1 0 011-1zm12 4v2H9v2h4v2l3.5-3L13 4zM7 14v-2h4v-2H7V8l-3.5 3L7 14z" fill="#9195A8"></path></svg>
            Перевод
        </span>
    </button>
</div>
<?php /**PATH /var/www/invest/resources/views/livewire/transfer-form.blade.php ENDPATH**/ ?>