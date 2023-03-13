<?php $__env->startSection('title', 'Верификация'); ?>

<?php $__env->startSection('content'); ?>
    <?php echo $__env->make('cabinet.new._header', ['user'=>$user], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <main class="flex flex-column flex-grow trans-0-3">
        <form enctype="multipart/form-data" method="POST" action="<?php echo e(route('cabinet.verification.store')); ?>" data-v-e4d5b16a="" class="grid padding-x-3 padding-y-4 shadowed border-rounded-3 bg-white margin-x-3 margin-top-5 margin-top-6--md margin-top-0--lg">
            <ul class="errors rid-column-12 grid-column-6--xl grid-column-start-4--xl margin-bottom-2">
                <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <li><?php echo e($error); ?></li>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <?php if(request()->has('must_verify')): ?>
                    <li>Вам необходимо верифицировать свой аккаунт!</li>
                <?php endif; ?>
            </ul>

            <div data-v-0297da3b="" class="grid-column-12 grid-column-6--xl grid-column-start-4--xl padding-bottom-5">
                <h4 data-v-0297da3b="" class="font-medium margin-y-0 text-tight"> Как это работает? </h4>
                <p data-v-0297da3b="" class="color-gray font-sm">  Для пополнения баланса личного кабинета, Вам необходимо авторизоваться с помощью онлайн верификации. В поле «Главная страница паспорта», загрузите сканированную копию или фото первой страницы паспорта.
                В поле «Последняя страница с пропиской» , загрузите сканированную копию или фото страницы прописки в паспорте. В поле «Селфи» загрузите селфи, сделайте его сами или попросите близких. На фото не должно быть посторонних людей и оно не должно быть обрезано.</p>
                <?php if($isVerified == 1): ?>
                <h4 data-v-0297da3b="" class="font-medium margin-y-0 text-tight margin-top-3">Статус верификации</h4>
                <p data-v-0297da3b="" class="color-gray font-sm">
                    Ваши фотографии документов были отправлены на проверку для верификации и ожидают проверку.
                </p>
                <?php endif; ?>
                <?php if($isVerified == 2): ?>
                <h4 data-v-0297da3b="" class="font-medium margin-y-0 text-tight margin-top-3">Статус верификации</h4>
                <p class="color gray font-sm">
                    Ваш аккаунт верифицирован!
                </p>
                <?php endif; ?>
                <?php if($isVerified == 0): ?>
                <div data-v-0297da3b="" class="conversion grid grid-row-gap-5 grid-column-gap-4--md relative">
                    <div data-v-0297da3b="" class="grid-column-12 grid-column-6--md">
                        <span data-v-0297da3b="" class="flex font-sm color-gray font-medium margin-bottom-1">Главная страница паспорта</span>
                        <div data-v-0297da3b="" class="flex">
                            <div data-v-7f923647="" data-v-0297da3b="" data-vv-as=" " class="field flex-grow"><!---->
                                <div data-v-7f923647="" class="relative">
                                    <div data-v-7f923647="" class="field__input-wrapper flex items-center overflow-hidden">
                                        <input type="file" name="passportMainPage" autocomplete="" type="text" placeholder="Выберите файл" class="field__input">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div data-v-0297da3b="" class="grid-column-12 grid-column-6--md">
                        <span data-v-0297da3b="" class="flex font-sm color-gray font-medium margin-bottom-1">Последняя страница с пропиской в паспорте</span>
                        <div data-v-0297da3b="" class="flex">
                            <div data-v-7f923647="" data-v-0297da3b="" data-vv-as=" " class="field flex-grow"><!---->
                                <div data-v-7f923647="" class="relative">
                                    <div data-v-7f923647="" class="field__input-wrapper flex items-center overflow-hidden">
                                        <input type="file" name="passportLastPage" autocomplete="" type="text" placeholder="Выберите файл" class="field__input">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div data-v-0297da3b="" class="grid-column-12 grid-column-6--md">
                        <span data-v-0297da3b="" class="flex font-sm color-gray font-medium margin-bottom-1">Селфи</span>
                        <div data-v-0297da3b="" class="flex">
                            <div data-v-7f923647="" data-v-0297da3b="" data-vv-as=" " class="field flex-grow"><!---->
                                <div data-v-7f923647="" class="relative">
                                    <div data-v-7f923647="" class="field__input-wrapper flex items-center overflow-hidden">
                                        <input type="file" name="passportFace" autocomplete="" type="text" placeholder="Выберите файл" class="field__input">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <p class="color-gray font-sm">
                    Изображение хорошего качества. Формат JPEG, PNG. Размер не более 5 MB на каждый файл
                </p>
                <?php echo csrf_field(); ?>
                <button data-v-141d1a81=""  type="submit" data-v-0297da3b="" class="width-full margin-top-4 button button--primary button--mini">
                    <span data-v-141d1a81="" class="button__content">
                        Верифицировать
                    </span>
                </button>
                <?php endif; ?>
            </div>
        </form>
    </main>
<?php $__env->stopSection(); ?>










































































<?php echo $__env->make('layouts.cabinet', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/sCUM_Crypto/resources/views/cabinet/verification.blade.php ENDPATH**/ ?>