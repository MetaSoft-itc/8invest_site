<?php $__env->startSection('title', 'Верификация'); ?>

<?php $__env->startSection('content'); ?>
    <main class="flex flex-column flex-grow trans-margin-left trans-0-3 margin-sidebar">
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

<?php $__env->startSection('old-content'); ?>
    <main class="page-content">
        <div class="page-content__content  user-page">
            <?php echo $__env->make('cabinet._navigation', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <app-invest>
                <div class="user-page__main">
                    <section class="user-section fadeInUp" data-show-animation="fadeInUp"><h2
                            class="user-section__title  g-fs-20" style="margin-bottom: 0.9em">Верификация личности</h2>
                        <div class="user-section__text "><p>Верификация личности - это добровольное мероприятие, которое
                                значительно повышает уровень безопасности Вашего аккаунта, а так же верифицированные
                                пользователи пользуются повышенной лояльностью и доверием от службы клиентской поддержки
                                нашего холдинга.</p></div>
                    </section>

                    <?php if($isVerified == 1): ?>
                    <section class="user-section fadeInUp" data-show-animation="fadeInUp"><h2
                            class="user-section__title  g-fs-20" style="margin-bottom: 0.9em">Статус верификации</h2>
                        <div class="user-section__text "><p>Ваши фотографии документов были отправлены на проверку для верификации и ожидают проверку.</p></div>
                    </section>
                    <?php endif; ?>
                    <?php if($isVerified == 2): ?>
                    <section class="user-section fadeInUp" data-show-animation="fadeInUp"><h2
                            class="user-section__title  g-fs-20" style="margin-bottom: -5px;">Ваш аккаунт верифицирован!</h2>
                    </section>
                    <?php endif; ?>
                    <?php if($isVerified == 0): ?>
                    <section class="user-section user-verifi fadeInUp" data-show-animation="fadeInUp"><h2
                            class="user-section__title  g-fs-20">Верификация личности</h2><!----><!----><!---->
                        <form class="user-verifi__content ng-untouched ng-pristine ng-invalid" enctype="multipart/form-data" method="POST" action="<?php echo e(route('cabinet.verification.store')); ?>">
                            <?php echo csrf_field(); ?>
                            <ul class="errors-list">
                                <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <li><?php echo e($error); ?></li>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </ul>
                            <div class="user-verifi__file-load"><h3 class="user-verifi__sub-title">Главная страница
                                    паспорта:</h3>
                                <div class="files"><label class="files__label"><input
                                            class="files__input ng-untouched ng-pristine ng-invalid"
                                            name="passportMainPage" type="file"><span class="files__btn btn">Выбрать файл</span></label>
                                    <div class="files__output-wrap">
                                        <!----><a class="files__close">
                                            <svg>
                                                <use xlink:href="<?php echo e(asset('/img/svg/sprite-main.svg')); ?>#ico-close"></use>
                                            </svg>
                                        </a></div>
                                </div><!----><!----><h3 class="user-verifi__sub-title">Последняя страница с пропиской в
                                    паспорте:</h3>
                                <div class="files"><label class="files__label"><input
                                            class="files__input ng-untouched ng-pristine ng-invalid"
                                            name="passportLastPage" type="file"><span class="files__btn btn">Выбрать файл</span></label>
                                    <div class="files__output-wrap">
                                        <!----><a class="files__close">
                                            <svg>
                                                <use xlink:href="<?php echo e(asset('/img/svg/sprite-main.svg')); ?>#ico-close"></use>
                                            </svg>
                                        </a></div>
                                </div><!----><!----></div>
                            <h3 class="user-verifi__sub-title">Требования к сканам документов</h3>
                            <p class="user-verifi__note"> Изображение хорошего качества<br> Формат JPEG, PNG<br> Размер
                                не более 1 MB на каждый файл<br></p><!---->
                            <div class="g-text-center">
                                <button class="user-verifi__btn btn">Верифицировать</button>
                            </div>
                        </form>
                    </section>
                    <?php endif; ?>
                </div>
            </app-invest>
        </div>
    </main>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/invest/resources/views/cabinet/verification.blade.php ENDPATH**/ ?>