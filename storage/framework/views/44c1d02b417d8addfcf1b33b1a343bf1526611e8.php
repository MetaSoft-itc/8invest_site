<?php $__env->startSection('title', 'Открыть депозит'); ?>

<?php $__env->startSection('content'); ?>
    <main class="flex flex-column flex-grow trans-margin-left trans-0-3 margin-sidebar">
        <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('create-deposit', [])->html();
} elseif ($_instance->childHasBeenRendered('te0rnEL')) {
    $componentId = $_instance->getRenderedChildComponentId('te0rnEL');
    $componentTag = $_instance->getRenderedChildComponentTagName('te0rnEL');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('te0rnEL');
} else {
    $response = \Livewire\Livewire::mount('create-deposit', []);
    $html = $response->html();
    $_instance->logRenderedChild('te0rnEL', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
    </main>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('old-content'); ?>
    <main class="page-content">
        <div class="page-content__content  user-page">
            <?php echo $__env->make('cabinet._navigation', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <app-invest>
                <div class="user-page__main">
                    <div id="app-invest-container">
                        <section class="user-section invest-rates fadeInUp">
                            <h2 class="user-section__title">Выберите инвестиционный тариф</h2>
                            <div class="invest-rates__list">
                                <label class="invest-rates__item  invest-rate">
                                    <input name="invest-rate" v-model="calculate.tariff" value="1" type="radio">
                                    <div class="invest-rate__content">
                                        <h3 class="invest-rate__title"><?php echo e(config('tariffs.0.title')); ?></h3>
                                        <div class="invest-rate__ico-wrap">
                                            <svg class="invest-rate__ico"
                                                 style="width: 74rem; height: 73rem">
                                                <use xlink:href="<?php echo e(asset('/img/svg/sprite-rate.svg')); ?>#ico-coins"></use>
                                            </svg>
                                        </div>
                                        <p class="invest-rate__text">
                                            Сумма инвестиции: от <?php echo e(config('tariffs.0.from.rub')); ?> до <?php echo e(config('tariffs.0.to.rub')); ?> рублей
                                            в валютах представленных на платформе.
                                        </p>
                                        <span class="invest-rate__btn  btn">Выбрать</span>
                                    </div>
                                </label>
                                <label class="invest-rates__item  invest-rate">
                                    <input name="invest-rate" v-model="calculate.tariff" value="2" type="radio">
                                    <div class="invest-rate__content">
                                        <h3 class="invest-rate__title"><?php echo e(config('tariffs.1.title')); ?></h3>
                                        <div class="invest-rate__ico-wrap">
                                            <svg class="invest-rate__ico"
                                                 style="width: 74rem; height: 73rem">
                                                <use xlink:href="<?php echo e(asset('/img/svg/sprite-rate.svg')); ?>#ico-wallet"></use>
                                            </svg>
                                        </div>
                                        <p class="invest-rate__text">
                                            Сумма инвестиции: от <?php echo e(config('tariffs.1.from.rub')); ?> до <?php echo e(config('tariffs.1.to.rub')); ?> рублей
                                            в валютах представленных на платформе.
                                        </p>
                                        <span class="invest-rate__btn  btn">Выбрать</span>
                                    </div>
                                </label>
                                <label class="invest-rates__item  invest-rate">
                                    <input name="invest-rate" v-model="calculate.tariff" value="3" type="radio">
                                    <div class="invest-rate__content">
                                        <h3 class="invest-rate__title"><?php echo e(config('tariffs.2.title')); ?></h3>
                                        <div class="invest-rate__ico-wrap">
                                            <svg class="invest-rate__ico"
                                                 style="width: 74rem; height: 73rem">
                                                <use xlink:href="<?php echo e(asset('/img/svg/sprite-rate.svg')); ?>#ico-wallet"></use>
                                            </svg>
                                        </div>
                                        <p class="invest-rate__text">
                                            Сумма инвестиции: от <?php echo e(config('tariffs.2.from.rub')); ?> до <?php echo e(config('tariffs.2.to.rub')); ?> рублей
                                            в валютах представленных на платформе.
                                        </p>
                                        <span class="invest-rate__btn  btn">Выбрать</span>
                                    </div>
                                </label>
                                <label class="invest-rates__item  invest-rate">
                                    <input name="invest-rate" v-model="calculate.tariff" value="4" type="radio">
                                    <div class="invest-rate__content">
                                        <h3 class="invest-rate__title"><?php echo e(config('tariffs.3.title')); ?></h3>
                                        <div class="invest-rate__ico-wrap">
                                            <svg class="invest-rate__ico"
                                                 style="width: 74rem; height: 73rem">
                                                <use xlink:href="<?php echo e(asset('/img/svg/sprite-rate.svg')); ?>#ico-graph"></use>
                                            </svg>
                                        </div>
                                        <p class="invest-rate__text">
                                            Сумма инвестиции: от <?php echo e(config('tariffs.3.from.rub')); ?> до <?php echo e(config('tariffs.3.to.rub')); ?> рублей
                                            в валютах представленных на платформе.
                                        </p>
                                        <span class="invest-rate__btn  btn">Выбрать</span>
                                    </div>
                                </label>
                            </div>
                        </section>

                        <section class="user-section select-invest-plan fadeInUp" v-if="calculate.tariff != 0">
                            <h2 class="user-section__title">Выберите тариф:</h2>
                            <article class="invest-plan">
                                <div class="invest-plan__content">
                                    <h4 class="invest-plan__term  _double">
                                        <span class="g-fs-18">
                                            <span>Тариф</span> «{{ tariffs[calculate.tariff] }}»<br>
                                        </span>
                                        <span class="invest-plan__term--term">
                                            <span>Срок тарифа</span>:
                                            <span class="g-text-medium">
                                                от 5 до 365 <span>дней</span>
                                            </span>
                                        </span>
                                    </h4>
                                    <div class="invest-plan__main">
                                        <div class="invest-plan__left-col">
                                            <h4 class="invest-plan__block-title">Выберите валюту:</h4>
                                            <div class="invest-plan__currencies currencies">
                                                <a :class="{'currencies__currency  _rub': true, '_active': calculate.currency == '<?php echo e(\App\Account::CURRENCY_RUB); ?>'}" @click="calculate.currency = '<?php echo e(\App\Account::CURRENCY_RUB); ?>'">
                                                    <svg>
                                                        <use
                                                            xlink:href="<?php echo e(asset('/img/svg/sprite-currencies.svg')); ?>#ico-rub"></use>
                                                    </svg>
                                                </a>
                                                <a :class="{'currencies__currency  _usd': true, '_active': calculate.currency == '<?php echo e(\App\Account::CURRENCY_USD); ?>'}" @click="calculate.currency = '<?php echo e(\App\Account::CURRENCY_USD); ?>'">
                                                    <svg>
                                                        <use
                                                            xlink:href="<?php echo e(asset('/img/svg/sprite-currencies.svg')); ?>#ico-usd"></use>
                                                    </svg>
                                                </a>
                                                <a :class="{'currencies__currency  _euro': true, '_active': calculate.currency == '<?php echo e(\App\Account::CURRENCY_EUR); ?>'}" @click="calculate.currency = '<?php echo e(\App\Account::CURRENCY_EUR); ?>'">
                                                    <svg>
                                                        <use
                                                            xlink:href="<?php echo e(asset('/img/svg/sprite-currencies.svg')); ?>#ico-euro"></use>
                                                    </svg>
                                                </a>
                                                <a :class="{'currencies__currency  _crypto': true, '_active': calculate.currency == '<?php echo e(\App\Account::CURRENCY_BTC_ONE); ?>'}" @click="calculate.currency = '<?php echo e(\App\Account::CURRENCY_BTC_ONE); ?>'">
                                                    <?php echo e(config('crypto.'. \App\Account::CURRENCY_BTC_ONE .'.name')); ?>

                                                </a>
                                                <a :class="{'currencies__currency  _crypto': true, '_active': calculate.currency == '<?php echo e(\App\Account::CURRENCY_BTC_TWO); ?>'}" @click="calculate.currency = '<?php echo e(\App\Account::CURRENCY_BTC_TWO); ?>'">
                                                    <?php echo e(config('crypto.'. \App\Account::CURRENCY_BTC_TWO .'.name')); ?>

                                                </a>
                                            </div>
                                            <div class="invest-plan__range-wrap  _active">
                                                <h4 class="invest-plan__block-title">Сумма инвестиции, от - до</h4>
                                                <p class="invest-plan__range" v-if="calculate.tariff == 1">
                                                    <span v-if="calculate.currency == '<?php echo e(\App\Account::CURRENCY_RUB); ?>'">
                                                        <?php echo e(config('tariffs.0.from.rub')); ?> - <?php echo e(config('tariffs.0.to.rub')); ?>

                                                    </span>
                                                    <span v-if="calculate.currency == '<?php echo e(\App\Account::CURRENCY_USD); ?>'">
                                                        <?php echo e(config('tariffs.0.from.usd')); ?> - <?php echo e(config('tariffs.0.to.usd')); ?>

                                                    </span>
                                                    <span v-if="calculate.currency == '<?php echo e(\App\Account::CURRENCY_EUR); ?>'">
                                                        <?php echo e(config('tariffs.0.from.eur')); ?> - <?php echo e(config('tariffs.0.to.eur')); ?>

                                                    </span>
                                                    <span v-if="calculate.currency == '<?php echo e(\App\Account::CURRENCY_BTC_ONE); ?>'">
                                                        <?php echo e(config('tariffs.0.from.'. \App\Account::CURRENCY_BTC_ONE)); ?> - <?php echo e(config('tariffs.0.to.'. \App\Account::CURRENCY_BTC_ONE)); ?>

                                                    </span>
                                                    <span v-if="calculate.currency == '<?php echo e(\App\Account::CURRENCY_BTC_TWO); ?>'">
                                                        <?php echo e(config('tariffs.0.from.'. \App\Account::CURRENCY_BTC_TWO)); ?> - <?php echo e(config('tariffs.0.to.'. \App\Account::CURRENCY_BTC_TWO)); ?>

                                                    </span>
                                                </p>
                                                <p class="invest-plan__range" v-if="calculate.tariff == 2">
                                                    <span v-if="calculate.currency == '<?php echo e(\App\Account::CURRENCY_RUB); ?>'">
                                                        <?php echo e(config('tariffs.1.from.rub')); ?> - <?php echo e(config('tariffs.1.to.rub')); ?>

                                                    </span>
                                                    <span v-if="calculate.currency == '<?php echo e(\App\Account::CURRENCY_USD); ?>'">
                                                        <?php echo e(config('tariffs.1.from.usd')); ?> - <?php echo e(config('tariffs.1.to.usd')); ?>

                                                    </span>
                                                    <span v-if="calculate.currency == '<?php echo e(\App\Account::CURRENCY_EUR); ?>'">
                                                        <?php echo e(config('tariffs.1.from.eur')); ?> - <?php echo e(config('tariffs.1.to.eur')); ?>

                                                    </span>
                                                    <span v-if="calculate.currency == '<?php echo e(\App\Account::CURRENCY_BTC_ONE); ?>'">
                                                        <?php echo e(config('tariffs.1.from.'. \App\Account::CURRENCY_BTC_ONE)); ?> - <?php echo e(config('tariffs.1.to.'. \App\Account::CURRENCY_BTC_ONE)); ?>

                                                    </span>
                                                    <span v-if="calculate.currency == '<?php echo e(\App\Account::CURRENCY_BTC_TWO); ?>'">
                                                        <?php echo e(config('tariffs.1.from.'. \App\Account::CURRENCY_BTC_TWO)); ?> - <?php echo e(config('tariffs.1.to.'. \App\Account::CURRENCY_BTC_TWO)); ?>

                                                    </span>
                                                </p>
                                                <p class="invest-plan__range" v-if="calculate.tariff == 3">
                                                    <span v-if="calculate.currency == '<?php echo e(\App\Account::CURRENCY_RUB); ?>'">
                                                        <?php echo e(config('tariffs.2.from.rub')); ?> - <?php echo e(config('tariffs.2.to.rub')); ?>

                                                    </span>
                                                    <span v-if="calculate.currency == '<?php echo e(\App\Account::CURRENCY_USD); ?>'">
                                                        <?php echo e(config('tariffs.2.from.usd')); ?> - <?php echo e(config('tariffs.2.to.usd')); ?>

                                                    </span>
                                                    <span v-if="calculate.currency == '<?php echo e(\App\Account::CURRENCY_EUR); ?>'">
                                                        <?php echo e(config('tariffs.2.from.eur')); ?> - <?php echo e(config('tariffs.2.to.eur')); ?>

                                                    </span>
                                                    <span v-if="calculate.currency == '<?php echo e(\App\Account::CURRENCY_BTC_ONE); ?>'">
                                                        <?php echo e(config('tariffs.2.from.'. \App\Account::CURRENCY_BTC_ONE)); ?> - <?php echo e(config('tariffs.2.to.'. \App\Account::CURRENCY_BTC_ONE)); ?>

                                                    </span>
                                                    <span v-if="calculate.currency == '<?php echo e(\App\Account::CURRENCY_BTC_TWO); ?>'">
                                                        <?php echo e(config('tariffs.2.from.'. \App\Account::CURRENCY_BTC_TWO)); ?> - <?php echo e(config('tariffs.2.to.'. \App\Account::CURRENCY_BTC_TWO)); ?>

                                                    </span>
                                                </p>
                                                <p class="invest-plan__range" v-if="calculate.tariff == 4">
                                                    <span v-if="calculate.currency == '<?php echo e(\App\Account::CURRENCY_RUB); ?>'">
                                                        <?php echo e(config('tariffs.3.from.rub')); ?> - <?php echo e(config('tariffs.3.to.rub')); ?>

                                                    </span>
                                                    <span v-if="calculate.currency == '<?php echo e(\App\Account::CURRENCY_USD); ?>'">
                                                        <?php echo e(config('tariffs.3.from.usd')); ?> - <?php echo e(config('tariffs.3.to.usd')); ?>

                                                    </span>
                                                    <span v-if="calculate.currency == '<?php echo e(\App\Account::CURRENCY_EUR); ?>'">
                                                        <?php echo e(config('tariffs.3.from.eur')); ?> - <?php echo e(config('tariffs.3.to.eur')); ?>

                                                    </span>
                                                    <span v-if="calculate.currency == '<?php echo e(\App\Account::CURRENCY_BTC_ONE); ?>'">
                                                        <?php echo e(config('tariffs.3.from.'. \App\Account::CURRENCY_BTC_ONE)); ?> - <?php echo e(config('tariffs.3.to.'. \App\Account::CURRENCY_BTC_ONE)); ?>

                                                    </span>
                                                    <span v-if="calculate.currency == '<?php echo e(\App\Account::CURRENCY_BTC_TWO); ?>'">
                                                        <?php echo e(config('tariffs.3.from.'. \App\Account::CURRENCY_BTC_TWO)); ?> - <?php echo e(config('tariffs.3.to.'. \App\Account::CURRENCY_BTC_TWO)); ?>

                                                    </span>
                                                </p>
                                            </div>
                                        </div>
                                        <div class="invest-plan__profit-wrap  _active">
                                            <h4 class="invest-plan__block-title"> Доходность:</h4>
                                            <table class="invest-plan__profit">
                                                <tbody v-if="calculate.tariff == 1">
                                                    <tr>
                                                        <th>Период</th>
                                                        <th>Всего</th>
                                                    </tr>
                                                    <tr>
                                                        <td>День:</td>
                                                        <td>(<?php echo e(config('tariffs.0.percent')); ?>%)</td>
                                                    </tr>
                                                    <tr>
                                                        <td>В час:</td>
                                                        <td>(<?php echo e(number_format(config('tariffs.0.percent') / 24, 2, '.', ' ')); ?>%)</td>
                                                    </tr>
                                                </tbody>
                                                <tbody v-if="calculate.tariff == 2">
                                                    <tr>
                                                        <th>Период</th>
                                                        <th>Всего</th>
                                                    </tr>
                                                    <tr>
                                                        <td>День:</td>
                                                        <td>(<?php echo e(config('tariffs.1.percent')); ?>%)</td>
                                                    </tr>
                                                    <tr>
                                                        <td>В час:</td>
                                                        <td>(<?php echo e(number_format(config('tariffs.1.percent') / 24, 2, '.', ' ')); ?>%)</td>
                                                    </tr>
                                                </tbody>
                                                <tbody v-if="calculate.tariff == 3">
                                                    <tr>
                                                        <th>Период</th>
                                                        <th>Всего</th>
                                                    </tr>
                                                    <tr>
                                                        <td>День:</td>
                                                        <td>(<?php echo e(config('tariffs.2.percent')); ?>%)</td>
                                                    </tr>
                                                    <tr>
                                                        <td>В час:</td>
                                                        <td>(<?php echo e(number_format(config('tariffs.2.percent') / 24, 2, '.', ' ')); ?>%)</td>
                                                    </tr>
                                                </tbody>
                                                <tbody v-if="calculate.tariff == 4">
                                                    <tr>
                                                        <th>Период</th>
                                                        <th>Всего</th>
                                                    </tr>
                                                    <tr>
                                                        <td>День:</td>
                                                        <td>(<?php echo e(config('tariffs.3.percent')); ?>%)</td>
                                                    </tr>
                                                    <tr>
                                                        <td>В час:</td>
                                                        <td>(<?php echo e(number_format(config('tariffs.3.percent') / 24, 2, '.', ' ')); ?>%)</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <table class="invest-plan__advantages _active">
                                            <tbody>
                                            <tr>
                                                <td>Ставка:</td>
                                                <td>фиксированная</td>
                                            </tr>
                                            <tr>
                                                <td>Начисления:</td>
                                                <td>ежедневные</td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="invest-plan__note  _with-btn">
                                        <p> Тело инвестиции включено в выплаты,
                                             вывод средств производится по завершению работы депозита. Начисления происходят ежедневно без выходных.
                                        </p>
                                        <a class="invest-plan__btn  btn" href="#">Выбрать</a>
                                    </div>
                                </div>
                            </article>
                        </section>

                        <section class="user-section invest-platform-info fadeInUp" v-if="calculate.tariff != 0">
                            <div class="invest-platform-info__titles  titles">
                                <h2 class="titles__title">
                                    <span class="g-text-light">Новый депозит</span>
                                </h2>
                            </div>
                            <form method="post" action="<?php echo e(route('cabinet.deposits.store')); ?>" class="charge-form ng-untouched ng-invalid ng-dirty">
                                <?php echo csrf_field(); ?>
                                <ul class="errors-list">
                                    <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <li><?php echo e($error); ?></li>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </ul>
                                <div class="form__inputs-wrap">
                                    <div class="form__input _full form-group">
                                        <label class="form-group__label">Тариф</label>
                                        <select v-model="calculate.tariff" class="select-dropdown ng-untouched ng-pristine ng-valid">
                                            <option v-for="(tariff, index) in tariffs" :value="index">{{ tariff }}</option>
                                        </select>
                                    </div>
                                    <div class="form__input _full form-group">
                                        <label class="form-group__label">Валюта</label>
                                        <select name="currency" v-model="calculate.currency"  class="select-dropdown ng-untouched ng-pristine ng-valid">
                                            <option value="<?php echo e(\App\Account::CURRENCY_RUB); ?>">RUB</option>
                                            <option value="<?php echo e(\App\Account::CURRENCY_USD); ?>">USD</option>
                                            <option value="<?php echo e(\App\Account::CURRENCY_EUR); ?>">AM</option>
                                            <option value="<?php echo e(\App\Account::CURRENCY_BTC_ONE); ?>"><?php echo e(config('crypto.'. \App\Account::CURRENCY_BTC_ONE .'.name')); ?></option>
                                            <option value="<?php echo e(\App\Account::CURRENCY_BTC_TWO); ?>"><?php echo e(config('crypto.'. \App\Account::CURRENCY_BTC_TWO .'.name')); ?></option>
                                        </select>
                                    </div>
                                    <div class="form__input _full form-group">
                                        <label class="form-group__label">Введите сумму</label>
                                        <input class="form-group__input ng-untouched ng-pristine ng-invalid" name="amount" min="0" value="<?php echo e(old('amount')); ?>" step="0.01" type="number">
                                    </div>
                                    <div class="form__input _full form-group">
                                        <label class="form-group__label">Дни</label>
                                        <input name="days" min="5" value="<?php echo e(old('days')); ?>" type="number" class="form-group__input ng-untouched ng-pristine ng-invalid">
                                    </div>
                                </div>
                                <div class="form__btns-wrap">
                                    <button class="btn profile__btn">Открыть</button>
                                </div>
                            </form>
                        </section>
                    </div>

                    <?php echo $__env->make('layouts._balance', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                </div>
            </app-invest>
        </div>
    </main>
<?php $__env->stopSection(); ?>

<?php $__env->startPush('scripts'); ?>
    <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
    <script>
        $(document).ready(function () {
            $(".invest-rates__item").click(function () {
                setTimeout(function () {
                    $([document.documentElement, document.body]).animate({
                        scrollTop: $(".invest-plan").offset().top - 230
                    }, 1000);

                    $(".invest-plan__btn").click(function () {
                        $([document.documentElement, document.body]).animate({
                            scrollTop: $(".invest-platform-info__titles").offset().top - 100
                        }, 1000);

                        return false;
                    });
                }, 200);
            });
        });

        var app = new Vue({
            el: '#app-invest-container',
            data: {
                calculate: {
                    tariff: <?php if($errors->any()): ?> 1 <?php else: ?> 0 <?php endif; ?>,
                    currency: "<?php echo e(\App\Account::CURRENCY_RUB); ?>",
                },

                tariffs: {
                    1: "<?php echo e(config('tariffs.0.title')); ?>",
                    2: "<?php echo e(config('tariffs.1.title')); ?>",
                    3: "<?php echo e(config('tariffs.2.title')); ?>",
                    4: "<?php echo e(config('tariffs.3.title')); ?>",
                },
            },

            computed: {
                selectTariff(tariff) {
                    this.tariff = tariff;
                },
            },
        })
    </script>
<?php $__env->stopPush(); ?>
<?php $__env->startSection('old-content'); ?>
    <td width="10px"></td>
    <td align="left" style="vertical-align:top">
        <?php echo $__env->make('layouts._balance', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <br>
        <div class="ac-bals oper" align="center">
            <form method="post" action="<?php echo e(route('cabinet.deposits.store')); ?>" name="account/change_pass_frm">
                <?php echo csrf_field(); ?>
                <fieldset style="border:none;">
                    <center>
                        <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <?php echo e($error); ?>

                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </center>
                    <table class="formatTable">
                        <tbody>
                        <tr>
                            <td align="right" width="50%">
                                <label>
                                    <span class="descr_req">
                                        <?php echo app('translator')->get('app.Сумма'); ?>
                                    </span>
                                </label>
                            </td>
                            <td align="left">
                                <input name="amount" min="30" value="<?php echo e(old('amount')); ?>" type="number" class="form-control">
                            </td>
                        </tr>
                        <tr>
                            <td align="right" width="50%">
                                <label>
                                    <span class="descr_req">
                                        <?php echo app('translator')->get('app.Дни'); ?>
                                    </span>
                                </label>
                            </td>
                            <td align="left">
                                <input name="days" min="5" value="<?php echo e(old('days')); ?>" type="number" class="form-control">
                            </td>
                        </tr>
                        <tr>
                            <td align="right" width="50%">
                                <label>
                                    <span class="descr_req">
                                        <?php echo app('translator')->get('app.Валюта'); ?>
                                    </span>
                                </label>
                            </td>
                            <td align="left">
                                <select name="currency">
                                    <option value="<?php echo e(\App\Account::CURRENCY_RUB); ?>">RUB</option>
                                    <option value="<?php echo e(\App\Account::CURRENCY_USD); ?>">USD</option>
                                    <option value="<?php echo e(\App\Account::CURRENCY_EUR); ?>">AM</option>
                                </select>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </fieldset>
                <?php echo csrf_field(); ?>
                <br>
                <input name="account/change_pass_frm_btn" value="<?php echo app('translator')->get('app.Открыть'); ?>" type="submit" class="button-blue">
            </form>
        </div>
    </td>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/invest/resources/views/cabinet/newDeposit.blade.php ENDPATH**/ ?>