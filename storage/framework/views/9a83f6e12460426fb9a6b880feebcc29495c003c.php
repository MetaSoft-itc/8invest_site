<?php $__env->startSection('title', 'Мои реквизиты'); ?>

<?php $__env->startSection('content'); ?>
<main class="flex flex-column flex-grow trans-margin-left trans-0-3 margin-sidebar">
    <div data-v-fd87438e=""
         class="flex--md shadowed border-rounded-3 bg-white margin-x-3 margin-top-5 margin-top-6--md margin-top-0--lg overflow-hidden">
        <?php echo $__env->make('cabinet._account-sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <div data-v-fd87438e="" class="overflow-hidden flex-grow padding-3">
            <form method="POST" action="<?php echo e(route('cabinet.requisites.store')); ?>" data-v-fd87438e="" class="grid">
                <?php echo csrf_field(); ?>
                <div data-v-fd87438e="" class="grid-column-12 grid-column-8--xl grid-column-start-3--xl padding-y-4">
                    <div data-v-9e7d55c2="" data-v-fd87438e="">
                        <h1 data-v-9e7d55c2="" class="flex items-center font-medium font-lg margin-y-0">
                            <div data-v-9e7d55c2=""
                                 class="height-1-25 flex justify-center items-center flex-no-shrink margin-right-3">
                                <svg data-v-9e7d55c2="" viewBox="0 0 21 18" fill="none"
                                     xmlns="http://www.w3.org/2000/svg" class="height-full fill-default">
                                    <path data-v-9e7d55c2=""
                                          d="M20 3h-7a6 6 0 100 12h7v2a1 1 0 01-1 1H1a1 1 0 01-1-1V1a1 1 0 011-1h18a1 1 0 011 1v2zm-7 2h8v8h-8a4 4 0 110-8zm0 3v2h3V8h-3z"></path>
                                </svg>
                            </div>
                            Информация о платеже
                        </h1>
                        <div data-v-9e7d55c2="" class="grid grid-row-gap-4 grid-column-gap-4--md padding-y-4">
                            <ul class="errors grid-column-12 grid-column-6--xl grid-column-start-4--xl margin-bottom-2">
                                <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <li><?php echo e($error); ?></li>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                <?php if(session()->has('error')): ?>
                                    <li>Финансовый пароль введен неверно!</li>
                                <?php endif; ?>
                            </ul>

                            <div data-v-9e7d55c2="" class="grid-column-12 grid-column-6--md">
                                <div data-v-7f923647="" data-v-9e7d55c2="" data-vv-as=" "
                                     class="field">
                                    <div data-v-7f923647="" class="flex justify-between">
                                        <label data-v-7f923647="" for="input_pibze21v" class="field__label flex font-sm color-gray font-medium margin-bottom-1">
                                            QIWI
                                        </label>
                                    </div>
                                    <div data-v-7f923647="" class="relative">
                                        <div data-v-7f923647="" class="field__input-wrapper flex items-center overflow-hidden">
                                            <input data-v-7f923647="" name="<?php echo e(\App\Outcome::QIWI); ?>_wallet" id="input_pibze21v" value="<?php echo e($requisites[\App\Outcome::QIWI .'_wallet']); ?>" autocomplete="off" type="text" placeholder="Введите QIWI кошелек" class="field__input">
                                        </div>
                                        <div data-v-7f923647="" class="field__icon field__icon--suffix absolute top-0 bottom-0 margin-y-auto flex"></div>
                                    </div>
                                </div>
                            </div>
                            <div data-v-9e7d55c2="" class="grid-column-12 grid-column-6--md">
                                <div data-v-7f923647="" data-v-9e7d55c2="" data-vv-as=" "
                                     class="field">
                                    <div data-v-7f923647="" class="flex justify-between">
                                        <label data-v-7f923647="" for="input_pibze21v" class="field__label flex font-sm color-gray font-medium margin-bottom-1">
                                            Payeer
                                        </label>
                                    </div>
                                    <div data-v-7f923647="" class="relative">
                                        <div data-v-7f923647="" class="field__input-wrapper flex items-center overflow-hidden">
                                            <input data-v-7f923647="" name="<?php echo e(\App\Outcome::PAYEER); ?>_wallet" id="input_pibze21v" value="<?php echo e($requisites[\App\Outcome::PAYEER .'_wallet']); ?>" autocomplete="off" type="text" placeholder="Введите номер счета" class="field__input">
                                        </div>
                                        <div data-v-7f923647="" class="field__icon field__icon--suffix absolute top-0 bottom-0 margin-y-auto flex"></div>
                                    </div>
                                </div>
                            </div>
                            <div data-v-9e7d55c2="" class="grid-column-12 grid-column-6--md">
                                <div data-v-7f923647="" data-v-9e7d55c2="" data-vv-as=" "
                                     class="field">
                                    <div data-v-7f923647="" class="flex justify-between">
                                        <label data-v-7f923647="" for="input_pibze21v" class="field__label flex font-sm color-gray font-medium margin-bottom-1">
                                            Perfect Money
                                        </label>
                                    </div>
                                    <div data-v-7f923647="" class="relative">
                                        <div data-v-7f923647="" class="field__input-wrapper flex items-center overflow-hidden">
                                            <input data-v-7f923647="" name="<?php echo e(\App\Outcome::PERFECT_MONEY); ?>_wallet" value="<?php echo e($requisites[\App\Outcome::PERFECT_MONEY .'_wallet']); ?>" id="input_pibze21v" autocomplete="off" type="text" placeholder="Введите номер счета" class="field__input">
                                        </div>
                                        <div data-v-7f923647="" class="field__icon field__icon--suffix absolute top-0 bottom-0 margin-y-auto flex"></div>
                                    </div>
                                </div>
                            </div>
                            <div data-v-9e7d55c2="" class="grid-column-12 grid-column-6--md">
                                <div data-v-7f923647="" data-v-9e7d55c2="" data-vv-as=" "
                                     class="field">
                                    <div data-v-7f923647="" class="flex justify-between">
                                        <label data-v-7f923647="" for="input_pibze21v" class="field__label flex font-sm color-gray font-medium margin-bottom-1">
                                            Bitcoin
                                        </label>
                                    </div>
                                    <div data-v-7f923647="" class="relative">
                                        <div data-v-7f923647="" class="field__input-wrapper flex items-center overflow-hidden">
                                            <input data-v-7f923647="" name="<?php echo e(\App\Outcome::BITCOIN); ?>_wallet" id="input_pibze21v" value="<?php echo e($requisites[\App\Outcome::BITCOIN .'_wallet']); ?>" autocomplete="off" type="text" placeholder="Введите Биткоин кошелек" class="field__input">
                                        </div>
                                        <div data-v-7f923647="" class="field__icon field__icon--suffix absolute top-0 bottom-0 margin-y-auto flex"></div>
                                    </div>
                                </div>
                            </div>
                            <div data-v-9e7d55c2="" class="grid-column-12 grid-column-6--md">
                                <div data-v-7f923647="" data-v-9e7d55c2="" data-vv-as=" "
                                     class="field">
                                    <div data-v-7f923647="" class="flex justify-between">
                                        <label data-v-7f923647="" for="input_pibze21v" class="field__label flex font-sm color-gray font-medium margin-bottom-1">
                                            Банковская карта
                                        </label>
                                    </div>
                                    <div data-v-7f923647="" class="relative">
                                        <div data-v-7f923647="" class="field__input-wrapper flex items-center overflow-hidden">
                                            <input data-v-7f923647="" name="<?php echo e(\App\Outcome::CARD); ?>_wallet" id="input_pibze21v" value="<?php echo e($requisites[\App\Outcome::CARD .'_wallet']); ?>" autocomplete="off" type="text" placeholder="Введите номер банквоской карты" class="field__input">
                                        </div>
                                        <div data-v-7f923647="" class="field__icon field__icon--suffix absolute top-0 bottom-0 margin-y-auto flex"></div>
                                    </div>
                                </div>
                            </div>
                            <div data-v-9e7d55c2="" class="grid-column-12 grid-column-6--md">
                                <div data-v-7f923647="" data-v-9e7d55c2="" data-vv-as=" "
                                     class="field">
                                    <div data-v-7f923647="" class="flex justify-between">
                                        <label data-v-7f923647="" for="input_pibze21v" class="field__label flex font-sm color-gray font-medium margin-bottom-1">
                                            Advcash
                                        </label>
                                    </div>
                                    <div data-v-7f923647="" class="relative">
                                        <div data-v-7f923647="" class="field__input-wrapper flex items-center overflow-hidden">
                                            <input data-v-7f923647="" name="<?php echo e(\App\Outcome::ADVACASH); ?>_wallet" id="input_pibze21v" value="<?php echo e($requisites[\App\Outcome::ADVACASH .'_wallet']); ?>" autocomplete="off" type="text" placeholder="Введите номер счета" class="field__input">
                                        </div>
                                        <div data-v-7f923647="" class="field__icon field__icon--suffix absolute top-0 bottom-0 margin-y-auto flex"></div>
                                    </div>
                                </div>
                            </div>
                            <div data-v-9e7d55c2="" class="grid-column-12 grid-column-6--md">
                                <div data-v-7f923647="" data-v-9e7d55c2="" data-vv-as=" "
                                     class="field">
                                    <div data-v-7f923647="" class="flex justify-between">
                                        <label data-v-7f923647="" for="input_pibze21v" class="field__label flex font-sm color-gray font-medium margin-bottom-1">
                                            Yandex Money
                                        </label>
                                    </div>
                                    <div data-v-7f923647="" class="relative">
                                        <div data-v-7f923647="" class="field__input-wrapper flex items-center overflow-hidden">
                                            <input data-v-7f923647="" name="<?php echo e(\App\Outcome::YANDEX); ?>_wallet" id="input_pibze21v" value="<?php echo e($requisites[\App\Outcome::YANDEX .'_wallet']); ?>" autocomplete="off" type="text" placeholder="Введите номер счета" class="field__input">
                                        </div>
                                        <div data-v-7f923647="" class="field__icon field__icon--suffix absolute top-0 bottom-0 margin-y-auto flex"></div>
                                    </div>
                                </div>
                            </div>
                            <div data-v-9e7d55c2="" class="grid-column-12 grid-column-6--md">
                                <div data-v-7f923647="" data-v-9e7d55c2="" data-vv-as=" "
                                     class="field">
                                    <div data-v-7f923647="" class="flex justify-between">
                                        <label data-v-7f923647="" for="input_pibze21v" class="field__label flex font-sm color-gray font-medium margin-bottom-1">
                                            ETH
                                        </label>
                                    </div>
                                    <div data-v-7f923647="" class="relative">
                                        <div data-v-7f923647="" class="field__input-wrapper flex items-center overflow-hidden">
                                            <input data-v-7f923647="" name="<?php echo e(\App\Outcome::ETH); ?>_wallet" id="input_pibze21v" value="<?php echo e($requisites[\App\Outcome::ETH .'_wallet']); ?>" autocomplete="off" type="text" placeholder="Введите ETH кошелек" class="field__input">
                                        </div>
                                        <div data-v-7f923647="" class="field__icon field__icon--suffix absolute top-0 bottom-0 margin-y-auto flex"></div>
                                    </div>
                                </div>
                            </div>
                            <div data-v-9e7d55c2="" class="grid-column-12">
                                <hr data-v-9e7d55c2="">
                            </div>
                            <div data-v-9e7d55c2="" class="grid-column-12 grid-column-6--md">
                                <div data-v-7f923647="" data-v-9e7d55c2="" data-vv-as=" "
                                     class="field field--prefix">
                                    <div data-v-7f923647="" class="flex justify-between">
                                        <label data-v-7f923647="" for="input_fe6yvuta" class="field__label flex font-sm color-gray font-medium margin-bottom-1">
                                            Финансовый пароль
                                        </label>
                                    </div>
                                    <div data-v-7f923647="" class="relative">
                                        <div data-v-7f923647="" class="field__input-wrapper flex items-center overflow-hidden">
                                            <input data-v-7f923647="" id="input_fe6yvuta" name="fin_password" autocomplete="off" type="password" placeholder="Введите свой финансовый пароль" class="field__input">
                                        </div>
                                        <div data-v-7f923647="" class="field__icon field__icon--suffix absolute top-0 bottom-0 margin-y-auto flex"></div>
                                        <div data-v-7f923647="" class="flex field__icon field__icon--prefix absolute top-0 bottom-0 margin-y-auto"><svg data-v-9e7d55c2="" viewBox="0 0 20 18" fill="none" xmlns="http://www.w3.org/2000/svg" class="height-full"><path data-v-9e7d55c2="" d="M8.313 8.566l7.94-7.94 2.121 2.121-1.414 1.414 2.121 2.121-3.535 3.536-2.12-2.121-2.99 2.99a5.002 5.002 0 01-7.97 5.849 5 5 0 015.847-7.97zm-.899 5.848a2 2 0 10-2.78-2.877 2 2 0 002.78 2.877z" fill="#7E839A"></path></svg></div>
                                    </div>
                                </div>
                            </div>
                            <div data-v-9e7d55c2="" class="flex items-end grid-column-12 grid-column-6--md padding-top-3">
                                <button data-v-141d1a81="" data-v-9e7d55c2="" class="width-full button button--primary button--mini">
                                    <span data-v-141d1a81="" class="button__content">
                                        <svg data-v-9e7d55c2="" data-v-141d1a81="" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg" class="height-1 fill-white margin-right-2"><path data-v-9e7d55c2="" data-v-141d1a81="" d="M1 0h14l2.707 2.707a1 1 0 01.293.707V17a1 1 0 01-1 1H1a1 1 0 01-1-1V1a1 1 0 011-1zm3 1v5h9V1H4zM3 9v7h12V9H3zm7-7h2v3h-2V2z" fill="#fff"></path></svg>
                                        Сохранить
                                    </span>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</main>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/maksa988/www/invest3/resources/views/cabinet/requisites.blade.php ENDPATH**/ ?>