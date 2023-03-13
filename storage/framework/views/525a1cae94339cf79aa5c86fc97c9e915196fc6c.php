<?php $__env->startSection('title', 'Перевод'); ?>

<?php $__env->startSection('content'); ?>
    <main class="flex flex-column flex-grow trans-margin-left trans-0-3 margin-sidebar">
        <div data-v-0297da3b=""
             class="grid padding-x-3 padding-y-4 shadowed border-rounded-3 bg-white margin-x-3 margin-top-5 margin-top-6--md margin-top-0--lg">
            <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('transfer-form', [])->html();
} elseif ($_instance->childHasBeenRendered('Z8pv7Bc')) {
    $componentId = $_instance->getRenderedChildComponentId('Z8pv7Bc');
    $componentTag = $_instance->getRenderedChildComponentTagName('Z8pv7Bc');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('Z8pv7Bc');
} else {
    $response = \Livewire\Livewire::mount('transfer-form', []);
    $html = $response->html();
    $_instance->logRenderedChild('Z8pv7Bc', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
        </div>
    </main>
<?php $__env->stopSection(); ?>


<?php $__env->startSection('old-content'); ?>
    <main class="page-content">
        <div class="page-content__content  user-page">
            <?php echo $__env->make('cabinet._navigation', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <app-invest>
                <div class="user-page__main">
                    <section class="user-section fadeInUp" data-show-animation="fadeInUp"><h2 class="user-section__title  g-fs-20" style="margin-bottom: .9em">Внутренний перевод</h2><div class="user-section__text  g-text-left"><p>Внутренние переводы делайте только знакомым Вам людям, кого Вы лично знаете, с кем Вы лично общаетесь по телефону. И Вы сами ответственны за любой внутренний перевод другому пользователю, вся ответственность лежит на Вас. Поэтому лишний раз незнакомым Вам людям не отправляйте и не запрашивайте внутренние переводы. Так как по чатам действуют мошенники, которые предлагают продать или купить внутренние средства. Вся ответственность за переводы лежит на Вас.</p></div><h4 class="user-section__alert">ВНИМАНИЕ! ДАННАЯ ИНФОРМАЦИЯ ОБЯЗАТЕЛЬНА К ПРОЧТЕНИЮ!</h4></section>
                    <?php echo $__env->make('layouts._balance', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

                    <section class="user-section fadeInUp" data-show-animation="fadeInUp"><h2
                            class="user-section__title  _marg-b  g-fs-20">Внутренний перевод другому пользователю</h2>
                        <form class="form ng-untouched ng-pristine ng-invalid" method="post" action="<?php echo e(route('cabinet.transfer.store')); ?>">
                            <?php echo csrf_field(); ?>
                            <ul class="errors-list">
                                <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <li><?php echo e($error); ?></li>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </ul>
                            <div class="form__inputs-wrap">
                                <div class="form__input form-group"><label class="form-group__label"> ID
                                        получателя*</label><input value="<?php echo e(old('user_id')); ?>"
                                        class="form-group__input ng-untouched ng-pristine ng-invalid"
                                        name="user_id" type="text"><!----></div>
                                <div class="form__input  form-group"><label class="form-group__label">Повторите ID
                                        получателя*</label><input
                                        class="form-group__input ng-untouched ng-pristine ng-invalid"
                                        name="user_id_confirmation" type="text"><!----><!----></div>
                                <div class="form__input  form-group"><label class="form-group__label"> Выберите
                                        валюту*</label><select class="select-dropdown ng-untouched ng-pristine ng-valid"
                                                               name="currency"><!---->
                                        <option value="<?php echo e(\App\Account::CURRENCY_RUB); ?>">Рубль</option>
                                        <option value="<?php echo e(\App\Account::CURRENCY_EUR); ?>">Евро</option>
                                        <option value="<?php echo e(\App\Account::CURRENCY_USD); ?>">Доллар</option>
                                        <option value="<?php echo e(\App\Account::CURRENCY_BTC_ONE); ?>"><?php echo e(config('crypto.'. \App\Account::CURRENCY_BTC_ONE .'.name')); ?></option>
                                        <option value="<?php echo e(\App\Account::CURRENCY_BTC_TWO); ?>"><?php echo e(config('crypto.'. \App\Account::CURRENCY_BTC_TWO .'.name')); ?></option>
                                    </select></div>
                                <div class="form__input form-group"><label class="form-group__label"> Введите сумму*</label><input
                                        class="form-group__input ng-untouched ng-pristine ng-invalid"
                                        name="amount" type="text" value="<?php echo e(old('amount')); ?>"><!----></div>







                            </div>
                            <div class="form__checkbox-wrap"><label class="checkbox"><label
                                        class="form__checkbox  checkbox  _full  g-color-red" for="agreement"
                                        style="padding-left: 5rem;"> Я подтверждаю, что несу полную ответственность за
                                        перевод внутренней валюты другому пользователю. Так же я подтверждаю, что лично
                                        знаком с человеком, которому осуществляю перевод. </label><input
                                        name="agreement" id="agreement" type="checkbox"
                                        class="ng-untouched ng-pristine ng-invalid"><span class="checkbox__mark"></span></label><label
                                    class="checkbox"><label class="form__checkbox  checkbox  _full  g-color-red"
                                                            for="agreementNonRollback" style="padding-left: 5rem;"> Я
                                        согласен с тем, что данный перевод невозможно отменить. (Письма и звонки в
                                        техническую поддержку об отмене перевода не принимаются и не
                                        рассматриваются). </label><input name="transferAgreement"
                                                                         id="agreementNonRollback" type="checkbox"
                                                                         class="ng-untouched ng-pristine ng-invalid"><span
                                        class="checkbox__mark"></span></label></div>
                            <div class="form__btns-wrap">
                                <button class="btn profile__btn">Перевести</button>
                            </div>
                        </form>
                    </section>
                </div>
            </app-invest>
        </div>
    </main>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/maksa988/www/invest3/resources/views/cabinet/transfer.blade.php ENDPATH**/ ?>