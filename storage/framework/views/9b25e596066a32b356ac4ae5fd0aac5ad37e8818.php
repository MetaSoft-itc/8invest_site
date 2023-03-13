<?php $__env->startPush('scripts'); ?>
    <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
    <script>
        var app = new Vue({
            el: '#invest-calculator',
            data: {
                currency: "<?php echo e(\App\Account::CURRENCY_RUB); ?>",
                amount: <?php echo e(config('tariffs.0.from.rub')); ?>,
            },

            computed: {
                currentTariff() {
                    let name = "<?php echo e(config('tariffs.3.title')); ?>";

                    if(this.currency === 'rub') {
                        if (this.amount < <?php echo e(config('tariffs.0.to.rub')); ?>) {
                            name = "<?php echo e(config('tariffs.0.title')); ?>";
                        } else if (this.amount >= <?php echo e(config('tariffs.1.from.rub')); ?> && this.amount < <?php echo e(config('tariffs.1.to.rub')); ?>) {
                            name = "<?php echo e(config('tariffs.1.title')); ?>";
                        } else if (this.amount >= <?php echo e(config('tariffs.2.from.rub')); ?> && this.amount < <?php echo e(config('tariffs.2.to.rub')); ?>) {
                            name = "<?php echo e(config('tariffs.2.title')); ?>";
                        }
                    } else if(this.currency === 'usd') {
                        if (this.amount < <?php echo e(config('tariffs.0.to.usd')); ?>) {
                            name = "<?php echo e(config('tariffs.0.title')); ?>";
                        } else if (this.amount >= <?php echo e(config('tariffs.1.from.usd')); ?> && this.amount < <?php echo e(config('tariffs.1.to.usd')); ?>) {
                            name = "<?php echo e(config('tariffs.1.title')); ?>";
                        } else if (this.amount >= <?php echo e(config('tariffs.2.from.usd')); ?> && this.amount < <?php echo e(config('tariffs.2.to.usd')); ?>) {
                            name = "<?php echo e(config('tariffs.2.title')); ?>";
                        }
                    } else if(this.currency === '<?php echo e(\App\Account::CURRENCY_BTC_ONE); ?>') {
                        if (this.amount < <?php echo e(config('tariffs.0.to.'. \App\Account::CURRENCY_BTC_ONE)); ?>) {
                            name = "<?php echo e(config('tariffs.0.title')); ?>";
                        } else if (this.amount >= <?php echo e(config('tariffs.1.from.'. \App\Account::CURRENCY_BTC_ONE)); ?> && this.amount < <?php echo e(config('tariffs.1.to.'. \App\Account::CURRENCY_BTC_ONE)); ?>) {
                            name = "<?php echo e(config('tariffs.1.title')); ?>";
                        } else if (this.amount >= <?php echo e(config('tariffs.2.from.'. \App\Account::CURRENCY_BTC_ONE)); ?> && this.amount < <?php echo e(config('tariffs.2.to.'. \App\Account::CURRENCY_BTC_ONE)); ?>) {
                            name = "<?php echo e(config('tariffs.2.title')); ?>";
                        }
                    } else if(this.currency === '<?php echo e(\App\Account::CURRENCY_BTC_TWO); ?>') {
                        if (this.amount < <?php echo e(config('tariffs.0.to.'. \App\Account::CURRENCY_BTC_TWO)); ?>) {
                            name = "<?php echo e(config('tariffs.0.title')); ?>";
                        } else if (this.amount >= <?php echo e(config('tariffs.1.from.'. \App\Account::CURRENCY_BTC_TWO)); ?> && this.amount < <?php echo e(config('tariffs.1.to.'. \App\Account::CURRENCY_BTC_TWO)); ?>) {
                            name = "<?php echo e(config('tariffs.1.title')); ?>";
                        } else if (this.amount >= <?php echo e(config('tariffs.2.from.'. \App\Account::CURRENCY_BTC_TWO)); ?> && this.amount < <?php echo e(config('tariffs.2.to.'. \App\Account::CURRENCY_BTC_TWO)); ?>) {
                            name = "<?php echo e(config('tariffs.2.title')); ?>";
                        }
                    } else {
                        if (this.amount < <?php echo e(config('tariffs.0.to.eur')); ?>) {
                            name = "<?php echo e(config('tariffs.0.title')); ?>";
                        } else if (this.amount >= <?php echo e(config('tariffs.1.from.eur')); ?> && this.amount < <?php echo e(config('tariffs.1.to.eur')); ?>) {
                            name = "<?php echo e(config('tariffs.1.title')); ?>";
                        } else if (this.amount >= <?php echo e(config('tariffs.2.from.eur')); ?> && this.amount < <?php echo e(config('tariffs.2.to.eur')); ?>) {
                            name = "<?php echo e(config('tariffs.2.title')); ?>";
                        }
                    }

                    return name;
                },

                resultSum() {
                    let percent = <?php echo e(config('tariffs.3.percent')); ?>;

                    if(this.currency === 'rub') {
                        if (this.amount < <?php echo e(config('tariffs.0.to.rub')); ?>) {
                            percent = <?php echo e(config('tariffs.0.percent')); ?>;
                        } else if (this.amount >= <?php echo e(config('tariffs.1.from.rub')); ?> && this.amount < <?php echo e(config('tariffs.1.to.rub')); ?>) {
                            percent = <?php echo e(config('tariffs.1.percent')); ?>;
                        } else if (this.amount >= <?php echo e(config('tariffs.2.from.rub')); ?> && this.amount < <?php echo e(config('tariffs.2.to.rub')); ?>) {
                            percent = <?php echo e(config('tariffs.2.percent')); ?>;
                        }
                    } else if(this.currency === 'usd') {
                        if (this.amount < <?php echo e(config('tariffs.0.to.usd')); ?>) {
                            percent = <?php echo e(config('tariffs.0.percent')); ?>;
                        } else if (this.amount >= <?php echo e(config('tariffs.1.from.usd')); ?> && this.amount < <?php echo e(config('tariffs.1.to.usd')); ?>) {
                            percent = <?php echo e(config('tariffs.1.percent')); ?>;
                        } else if (this.amount >= <?php echo e(config('tariffs.2.from.usd')); ?> && this.amount < <?php echo e(config('tariffs.2.to.usd')); ?>) {
                            percent = <?php echo e(config('tariffs.2.percent')); ?>;
                        }
                    } else if(this.currency === '<?php echo e(\App\Account::CURRENCY_BTC_ONE); ?>') {
                        if (this.amount < <?php echo e(config('tariffs.0.to.'. \App\Account::CURRENCY_BTC_ONE)); ?>) {
                            percent = <?php echo e(config('tariffs.0.percent')); ?>;
                        } else if (this.amount >= <?php echo e(config('tariffs.1.from.'. \App\Account::CURRENCY_BTC_ONE)); ?> && this.amount < <?php echo e(config('tariffs.1.to.'. \App\Account::CURRENCY_BTC_ONE)); ?>) {
                            percent = <?php echo e(config('tariffs.1.percent')); ?>;
                        } else if (this.amount >= <?php echo e(config('tariffs.2.from.'. \App\Account::CURRENCY_BTC_ONE)); ?> && this.amount < <?php echo e(config('tariffs.2.to.'. \App\Account::CURRENCY_BTC_ONE)); ?>) {
                            percent = <?php echo e(config('tariffs.2.percent')); ?>;
                        }
                    } else if(this.currency === '<?php echo e(\App\Account::CURRENCY_BTC_TWO); ?>') {
                        if (this.amount < <?php echo e(config('tariffs.0.to.'. \App\Account::CURRENCY_BTC_TWO)); ?>) {
                            percent = <?php echo e(config('tariffs.0.percent')); ?>;
                        } else if (this.amount >= <?php echo e(config('tariffs.1.from.'. \App\Account::CURRENCY_BTC_TWO)); ?> && this.amount < <?php echo e(config('tariffs.1.to.'. \App\Account::CURRENCY_BTC_TWO)); ?>) {
                            percent = <?php echo e(config('tariffs.1.percent')); ?>;
                        } else if (this.amount >= <?php echo e(config('tariffs.2.from.'. \App\Account::CURRENCY_BTC_TWO)); ?> && this.amount < <?php echo e(config('tariffs.2.to.'. \App\Account::CURRENCY_BTC_TWO)); ?>) {
                            percent = <?php echo e(config('tariffs.2.percent')); ?>;
                        }
                    } else {
                        if (this.amount < <?php echo e(config('tariffs.0.to.eur')); ?>) {
                            percent = <?php echo e(config('tariffs.0.percent')); ?>;
                        } else if (this.amount >= <?php echo e(config('tariffs.1.from.eur')); ?> && this.amount < <?php echo e(config('tariffs.1.to.eur')); ?>) {
                            percent = <?php echo e(config('tariffs.1.percent')); ?>;
                        } else if (this.amount >= <?php echo e(config('tariffs.2.from.eur')); ?> && this.amount < <?php echo e(config('tariffs.2.to.eur')); ?>) {
                            percent = <?php echo e(config('tariffs.2.percent')); ?>;
                        }
                    }

                    return (((this.amount / 100) * percent) * 30).toFixed(1);
                },
            },
        })
    </script>
<?php $__env->stopPush(); ?>

<?php $__env->startSection('content'); ?>
    <main class="page-content">
        <div class="page-content__content  user-page">
            <?php echo $__env->make('cabinet._navigation', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <app-invest>
                <div class="user-page__main" id="invest-calculator">
                    <section class="user-page__calc calc user-section fadeInUp" data-scroll-to="calc">
                        <div class="calc__content  g-content-wrap">
                            <h2 _ngcontent-c5="" class="user-section__title  g-fs-20">Калькулятор инвестора</h2>
                            <div class="calc__main" data-tabs-wrap="">
                                <!-- dsktp -->
                                <header class="calc__head tabs swiper-container swiper-container-horizontal swiper-container-free-mode">
                                    <div id="tariffs-tabs" class="tabs__wrap  swiper-wrapper" style="transform: translate3d(0px, 0px, 0px);">
                                        <a :class="{'tabs__btn swiper-slide ': true, '_active swiper-slide-active': currentTariff == '<?php echo e(config('tariffs.0.title')); ?>'}" @click="amount = <?php echo e(config('tariffs.0.from.rub')); ?>"><?php echo e(config('tariffs.0.title')); ?></a>
                                        <a :class="{'tabs__btn swiper-slide': true, '_active swiper-slide-active': currentTariff == '<?php echo e(config('tariffs.1.title')); ?>'}" @click="amount = <?php echo e(config('tariffs.1.from.rub')); ?>"><?php echo e(config('tariffs.1.title')); ?></a>
                                        <a :class="{'tabs__btn swiper-slide': true, '_active swiper-slide-active': currentTariff == '<?php echo e(config('tariffs.2.title')); ?>'}" @click="amount = <?php echo e(config('tariffs.2.from.rub')); ?>"><?php echo e(config('tariffs.2.title')); ?></a>
                                        <a :class="{'tabs__btn swiper-slide': true, '_active swiper-slide-active': currentTariff == '<?php echo e(config('tariffs.3.title')); ?>'}" @click="amount = <?php echo e(config('tariffs.3.from.rub')); ?>"><?php echo e(config('tariffs.3.title')); ?></a>
                                    </div>
                                    <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span>
                                </header>

                                <div id="tariff-tab-block" class="calc__tab-block _active" data-tab-block="calc-tab">

                                    <div class="calc__left-col">
                                        <div class="calc__group  calc__group--currencies">
                                            <h3 class="calc__group-title">Выберите валюту инвестирования:</h3>
                                            <div id="tariff-currencies" class="calc__currencies">

                                                <label class="calc__radio  radio">
                                                    RUB
                                                    <input type="radio" v-model="currency" value="<?php echo e(\App\Account::CURRENCY_RUB); ?>" name="calc-currency" checked="">
                                                    <span class="radio__mark"></span>
                                                </label>

                                                <label class="calc__radio  radio">
                                                    USD
                                                    <input type="radio" v-model="currency" value="<?php echo e(\App\Account::CURRENCY_USD); ?>" name="calc-currency">
                                                    <span class="radio__mark"></span>
                                                </label>

                                                <label class="calc__radio  radio">
                                                    EUR
                                                    <input type="radio" v-model="currency" value="<?php echo e(\App\Account::CURRENCY_EUR); ?>" name="calc-currency">
                                                    <span class="radio__mark"></span>
                                                </label>













                                            </div>
                                        </div>

                                        <div class="calc__group">
                                            <h3 class="calc__group-title">Введите сумму, которую хотите инвестировать:</h3>
                                            <div class="calc__num-slider  num-slider">
                                                <input v-model="amount" type="number" class="num-slider__output">
                                                
                                            </div>
                                        </div>
                                    </div>

                                    <div class="calc__result-wrap">
                                        <table class="calc__result">
                                            <tbody><tr>
                                                <td id="tariff--period">Ваше ежедневное начисление составит:</td>
                                                <td id="tariff-daily-profit">{{ (resultSum / 30).toFixed() }}</td>
                                            </tr>
                                            <tr>
                                                <td>Ваша прибыль за 30 дней:</td>
                                                <td id="tariff-total-profit">{{ resultSum }}</td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>

                                    <div class="calc__btn-wrap">
                                        <a href="<?php echo e(route('cabinet.deposits.new')); ?>" class="calc__btn  btn  btn--large">Инвестировать</a>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </section>
                </div>
            </app-invest>
        </div>
    </main>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.front_app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/maksa988/www/invest2/resources/views/cabinet/calculator.blade.php ENDPATH**/ ?>