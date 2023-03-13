@extends('layouts.front_app')

@section('content')
    <article class="main-layout__content"><!-- Begin page-->
        <section class="investments-intro">
            <div class="container">
                <div class="investments-intro__row">
                    <div class="investments-intro__col">
                        <div class="investments-intro__content"><h1 class="investments-intro__title title"><span
                                    class="color-primary">{{__("Liquidity")}} </span> {{__("pools")}}</h1>
                            <div class="investments-intro__description"><p>{{__("liq_info1")}} </p>
                            </div>
                        </div>
                    </div>
                    <div class="investments-intro__col">
                        <div class="investments-intro__earn">
                            <div class="investments-intro__earn-icon">
                                <svg class="svg-icon">
                                    <use href="assets/icons/sprite.svg#icon-wallet"></use>
                                </svg>
                            </div>
                            <p class="investments-intro__earn-label">{{__("Earn up to")}}</p>
                            <p class="investments-intro__earn-value">320<sub>%</sub></p>
                            <p class="investments-intro__earn-subtext">{{__("a year")}}</p></div>
                    </div>
                </div>
                <div class="investments-intro__swiper swiper-container js-investments-swiper swiper-no-swiping">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="investments-swiper-item">
                                <div class="investments-swiper-item__icon">
                                    <svg class="svg-icon">
                                        <use href="assets/icons/sprite.svg#icon-group2"></use>
                                    </svg>
                                </div>
                                <p class="investments-swiper-item__title">{{__("TOTAL CLIENTS")}}</p>
                                <p class="investments-swiper-item__value">5.5K</p></div>
                        </div>
                        <div class="swiper-slide">
                            <div class="investments-swiper-item">
                                <div class="investments-swiper-item__icon">
                                    <svg class="svg-icon">
                                        <use href="assets/icons/sprite.svg#icon-inftx"></use>
                                    </svg>
                                </div>
                                <p class="investments-swiper-item__title">{{__("INVESTED")}}</p>
                                <p class="investments-swiper-item__value">$20.6M</p></div>
                        </div>
                        <div class="swiper-slide">
                            <div class="investments-swiper-item">
                                <div class="investments-swiper-item__icon">
                                    <svg class="svg-icon">
                                        <use href="assets/icons/sprite.svg#icon-monets"></use>
                                    </svg>
                                </div>
                                <p class="investments-swiper-item__title">{{__("CLIENT'S INCOME")}}</p>
                                <p class="investments-swiper-item__value">$8.8M</p></div>
                        </div>
                        <div class="swiper-slide">
                            <div class="investments-swiper-item">
                                <div class="investments-swiper-item__icon">
                                    <svg class="svg-icon">
                                        <use href="assets/icons/sprite.svg#icon-wallet2"></use>
                                    </svg>
                                </div>
                                <p class="investments-swiper-item__title">{{__("AVERAGE DEPOSIT")}}</p>
                                <p class="investments-swiper-item__value">$3.75K</p></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="growing">
            <div class="container">
                <div class="growing__row">
                    <div class="growing__content"><p class="growing__subtitle">{{__("Last 30 days")}}</p>
                        <h3 class="growing__title h2">{{__("Growing")}}</h3></div>
                    <div class="growing__media"><img class="growing__image" src="{{asset('assets/images/growing/chart.png')}}"
                                                     alt="" role="presentation"/></div>
                </div>
            </div>
        </section>
        <section class="calculate">
            <div class="container">
                <h2 class="calculate__title title">
                    <span class="color-primary">{{__("Calculate")}}</span>
                    {{__("Your Income")}}</h2>
                <div class="calculate__block">
                    <form>
                        <div class="calculate__block-row">
                            <div class="calculate__block-col">
                                <div class="calculate__field field"><label class="calculate__label">Currency</label>
                                    <div class="field-payment">
                                        <div class="field-payment__icon"><img
                                                src="assets/images/currency/Bitcoin.svg" alt=""></div>
                                        <select class="js-select-payment" name="PSys" id="PSys">
                                            <option value="6" data-icon-src="{{asset('assets/images/currency/Bitcoin.svg')}}">
                                                Bitcoin
                                            </option>
                                            <option value="7" data-icon-src="{{asset('assets/images/currency/ETH.svg')}}">
                                                Ethereum
                                            </option>
                                            <option value="8" data-icon-src="{{asset('assets/images/currency/LTC.svg')}}">
                                                Litecoin
                                            </option>
                                            <option value="10" data-icon-src="{{asset('assets/images/currency/DOGE.svg')}}">
                                                Dogecoin
                                            </option>
                                            <option value="11"
                                                    data-icon-src="{{asset('assets/images/currency/BNB.svg')}}">BNB
                                                (BEP20)
                                            </option>
                                            <option value="12" data-icon-src="{{asset('assets/images/currency/XRP.svg')}}">
                                                Ripple
                                            </option>
                                            <option value="13" data-icon-src="{{asset('assets/images/currency/TRX.svg')}}">
                                                TRON
                                            </option>
                                            <option value="14"
                                                    data-icon-src="{{asset('assets/images/currency/USDT (TRC20).svg')}}">USDT
                                                (TRC20)
                                            </option>
                                            <option value="15"
                                                    data-icon-src="{{asset('assets/images/currency/USDC.svg')}}">USDC
                                                (BEP20)
                                            </option>
                                            <option value="16"
                                                    data-icon-src="{{asset('assets/images/currency/BUSD (BEP20).svg')}}">BUSD
                                                (BEP20)
                                            </option>
                                            <option value="17"
                                                    data-icon-src="{{asset('assets/images/currency/USDC.svg')}}">USDC
                                                (ERC20)
                                            </option>
                                            <option value="18"
                                                    data-icon-src="{{asset('assets/images/currency/DAI.svg')}}">DAI
                                                (ERC20)
                                            </option>
                                        </select></div>
                                </div>
                                <p class="calculate__block-value-label">{{__("Average Income Per Year")}}</p>
                                <p class="calculate__block-value">320%</p>
                                <button class="btn btn--primary-gr calculate__btn"><span>{{__("Invest now")}}</span></button>
                            </div>
                            <div class="calculate__block-col">
                                <div class="calculate__field field"><label class="calculate__label">{{__("Deposit Total")}}</label>
                                    <div class="calculate__field-group js-slider-field" min="100" max="1000000"
                                         step="10"><input type="number" min="100" max="1000000" value="520000"
                                                          name="total" id="Sum">
                                        <div class="calculate__field-group-after" id="curr"></div>
                                    </div>
                                    <div class="calculate__progress">
                                        <div class="calculate__progress-labels"><p>100</p>
                                            <p>1,000,000</p></div>
                                    </div>
                                </div>
                                <table class="calculate__block-table">
                                    <tbody>
                                    <tr>
                                        <td>{{__("Daily Income")}}</td>
                                        <td><strong class="color-success"><span id="calc1">0</span> <span
                                                    id="calc1curr"></span></strong></td>
                                    </tr>
                                    <tr>
                                        <td>{{__("Monthly Income")}}</td>
                                        <td><strong class="color-success"><span id="calc2">0</span> <span
                                                    id="calc2curr"></span></strong></td>
                                    </tr>
                                    <tr>
                                        <td>{{__("Yearly Income")}}</td>
                                        <td><strong class="color-success"><span id="calc3">0</span> <span
                                                    id="calc3curr"></span></strong></td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </section>
        <script>rate = 1;
            ccc = {
                6: 'BTC',
                7: 'ETH',
                8: 'LTC',
                10: 'DOGE',
                11: 'BNB',
                12: 'XRP',
                13: 'TRX',
                14: 'USDT',
                15: 'USDC',
                16: 'BUSD',
                17: 'USDC',
                18: 'DAI',
            };

            function sch() {
                cid = $('#PSys').val();
                curr = ccc[cid];
                $('#curr').html(curr);
                $('#calc1curr').html(curr);
                $('#calc2curr').html(curr);
                $('#calc3curr').html(curr);
                recalc();
            }

            sch();
            $('#PSys').change(sch);
            setInterval(sch, 250);

            function recalc() {
                z = 1 * $('#Sum').val();
                cid = $('#PSys').val();
                $('#calc1').html(1 * ((z * 0.87 / 100).toFixed(6)));
                $('#calc2').html(1 * ((z * 26.6 / 100).toFixed(6)));
                $('#calc3').html(1 * ((z * 320 / 100).toFixed(6)));
            }

            $('#Sum').on('change', recalc);</script>
        <section class="trading-bot">
            <div class="container">
                <div class="trading-bot__row">
                    <div class="trading-bot__content"><h2 class="trading-bot__title title"><span
                                class="color-primary"> {{__(("Investment strategy for"))}}</span> {{__("Liq pools")}}</h2>
                        <div class="trading-bot__text typography"><p>{{__("liq_info2")}}</p>
                            <p>{{__("liq_info3")}}</p></div>
                        <div class="trading-bot__buttons"><a class="btn btn--primary-gr trading-bot__btn"
                                                             href="{{route('register')}}"> <span>{{__("Invest now")}}</span></a></div>
                    </div>
                    <div class="trading-bot__media"><img class="trading-bot__image"
                                                         src="assets/images/trading-bot/image.png" alt=""
                                                         role="presentation"/></div>
                </div>
            </div>
        </section><!-- End page  --></article>
@endsection
