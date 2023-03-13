<?php $__env->startSection('content'); ?>
<main class="page-content">
    <div class="page-content__content  main-page">
        <section class="main-page__main-carousel  main-carousel">
            <div class="main-carousel__content" data-m-parallax>
                <div class="swiper-container swiper-slider-custom">
                    <!-- Additional required wrapper -->
                    <div class="swiper-wrapper">
                        <!-- Slides -->
                        <div class="swiper-slide">
                            <div class="main-carousel__item  g-page-wrap">
                                <div class="main-carousel__item-content  g-content-wrap">
                                    <div class="main-carousel__item-main">
                                        <h2 class="main-carousel__item-title">Ellis Company</h2>
                                        <div class="main-carousel__item-text"><p><strong>Ellis Company</strong> - инвестиционная онлайн-платформа, предоставляющая возможность инвестировать средства в перспективные инвестиционные пакеты со стабильной степенью доходности и минимальными рисками! </p></div>
                                        <a href="<?php echo e(route('page.about')); ?>" class="main-carousel__item-btn  btn  btn--large">Подробнее</a>
                                    </div>
                                    <picture class="main-carousel__item-img-wrap">
                                        <source class="main-carousel__item-img" srcset="/media/1009/21.jpg" media="(max-width: 800px)">
                                        <img alt="" class="main-carousel__item-img" src="/media/1007/11.jpg">
                                    </picture>
                                    <!--<a href="#" class="main-carousel__item-btn  btn  btn--large  d-none  d-2-inline-flex">Подробнее</a>-->
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="main-carousel__item  g-page-wrap">
                                <div class="main-carousel__item-content  g-content-wrap">
                                    <div class="main-carousel__item-main">
                                        <h2 class="main-carousel__item-title">Безопасные инвестиции</h2>
                                        <div class="main-carousel__item-text"><p>Инвестируя с <strong>Ellis Company</strong>, Вы исключаете возможность потери вложенных средств благодаря двухстороннему цифровому договору</p></div>
                                        <a href="<?php echo e(route('page.invest')); ?>" class="main-carousel__item-btn  btn  btn--large">Подробнее</a>
                                    </div>
                                    <picture class="main-carousel__item-img-wrap">
                                        <source class="main-carousel__item-img" srcset="/media/1010/22.jpg" media="(max-width: 800px)">
                                        <img alt="" class="main-carousel__item-img" src="/media/1008/12.jpg">
                                    </picture>
                                    <!--<a href="#" class="main-carousel__item-btn  btn  btn--large  d-none  d-2-inline-flex">Подробнее</a>-->
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="main-carousel__item  g-page-wrap">
                                <div class="main-carousel__item-content  g-content-wrap">
                                    <div class="main-carousel__item-main">
                                        <h2 class="main-carousel__item-title">Большой выбор инвестиционных тарифов</h2>
                                        <div class="main-carousel__item-text"><p>Регистрируйтесь на сайте, выбирайте выгодный инвестиционный пакет и начинайте получать прибыль. Участвуйте в партнерских программах и зарабатывайте еще больше</p></div>
                                        <a href="<?php echo e(route('register')); ?>" class="main-carousel__item-btn  btn  btn--large">Подробнее</a>
                                    </div>
                                    <picture class="main-carousel__item-img-wrap">
                                        <source class="main-carousel__item-img" srcset="/media/1007/11.jpg" media="(max-width: 800px)">
                                        <img alt="" class="main-carousel__item-img" src="/media/1009/21.jpg">
                                    </picture>
                                    <!--<a href="#" class="main-carousel__item-btn  btn  btn--large  d-none  d-2-inline-flex">Подробнее</a>-->
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- If we need pagination -->
                    <div class="swiper-pagination"></div>
                    <!-- If we need navigation buttons -->
                    <div class="swiper-button-prev">
                        <svg>
                            <use xlink:href="/img/svg/sprite-main.svg#ico-arrow"></use>
                        </svg>
                    </div>
                    <div class="swiper-button-next">
                        <svg>
                            <use xlink:href="/img/svg/sprite-main.svg#ico-arrow"></use>
                        </svg>
                    </div>
                </div>
                <div class="main-carousel__coins" ></div>
            </div>
        </section>

        <section class="main-page__news-block  news-block  g-page-wrap">
            <div class="main-page__content  g-content-wrap">
                <div class="embed-container" style="padding-bottom: 40px">
                    <video style="max-width: 100%; max-height: 600px" controls poster="<?php echo e(asset('media/preview.jpeg')); ?>">
                        <source src="<?php echo e(asset('media/welcome.mp4')); ?>" type="video/mp4">
                        Your browser does not support the video tag.
                    </video>

                </div>
            </div>
        </section>

        <section class="invest-page__achievements  achievements  g-page-wrap">
            <div class="achievements__content  g-content-wrap">
                <div class="achievements__list">
                    <article class="achievements__item achievements-item fadeInLeftBig">

                    </article>
                </div>
            </div>
        </section>



        <section class="invest-page__work-scheme  work-scheme  g-page-wrap">


            <div class="work-scheme__content  g-content-wrap">
                <h2 class="work-scheme__title">Принцип работы платформы</h2>
                <div class="work-scheme__list">
                    <article class="work-scheme__item  work-scheme-item ">
                        <div class="work-scheme-item__icon  _login">
                            <svg>
                                <use xlink:href="/img/svg/sprite-work-scheme.svg#ico-login"></use>
                            </svg>
                        </div>
                        <h4 class="work-scheme-item__num">01</h4>
                        <h5 class="work-scheme-item__text">Регистрация на сайте платформы</h5>
                        <span class="work-scheme-item__next-step ">
      <svg>
        <use xlink:href="/img/svg/sprite-main.svg#ico-arrow"></use>
      </svg>
    </span>
                    </article>
                    <article class="work-scheme__item  work-scheme-item delay-3">
                        <div class="work-scheme-item__icon  _select-plan">
                            <svg>
                                <use xlink:href="/img/svg/sprite-work-scheme.svg#ico-select-plan"></use>
                            </svg>
                        </div>
                        <h4 class="work-scheme-item__num">02</h4>
                        <h5 class="work-scheme-item__text">Выбор тарифного пакета</h5>
                        <span class="work-scheme-item__next-step ">
      <svg>
        <use xlink:href="/img/svg/sprite-main.svg#ico-arrow"></use>
      </svg>
    </span>
                    </article>
                    <article class="work-scheme__item  work-scheme-item delay-6">
                        <div class="work-scheme-item__icon  _create-invest">
                            <svg>
                                <use xlink:href="/img/svg/sprite-work-scheme.svg#ico-create-invest"></use>
                            </svg>
                        </div>
                        <h4 class="work-scheme-item__num">03</h4>
                        <h5 class="work-scheme-item__text">Создание инвестиции</h5>
                        <span class="work-scheme-item__next-step ">
      <svg>
        <use xlink:href="/img/svg/sprite-main.svg#ico-arrow"></use>
      </svg>
    </span>
                    </article>
                    <article class="work-scheme__item  work-scheme-item delay-9">
                        <div class="work-scheme-item__icon  _get-profit">
                            <svg>
                                <use xlink:href="/img/svg/sprite-work-scheme.svg#ico-get-profit"></use>
                            </svg>
                        </div>
                        <h4 class="work-scheme-item__num">04</h4>
                        <h5 class="work-scheme-item__text">Получение заявленной прибыли</h5>
                        <span class="work-scheme-item__next-step _ok">
      <svg>
        <use xlink:href="/img/svg/sprite-main.svg#ico-tick"></use>
      </svg>
    </span>
                    </article>
                </div>
            </div>
        </section>

        <section class="video_slider">
            <h3 class="rus_lang">Узнайте больше об инвестировании</h3>

            <h3 class="eng_lang">Learn more about investing</h3>
            <div class="swiper-container-tupa-new">
                <!-- Additional required wrapper -->
                <div class="swiper-wrapper">
                    <!-- Slides -->
                    <div class="swiper-slide" style="background: url(/media/1171/img-red-juice.jpg); background-size: cover; background-position: center;"></div>
                    <div class="swiper-slide" style="background: url(/media/1171/img-red-juice.jpg); background-size: cover; background-position: center;"></div>
                    <div class="swiper-slide" style="background: url(/media/1171/img-red-juice.jpg); background-size: cover; background-position: center;"></div>
                    <div class="swiper-slide" style="background: url(/media/1171/img-red-juice.jpg); background-size: cover; background-position: center;"></div>
                    <div class="swiper-slide" style="background: url(/media/1171/img-red-juice.jpg); background-size: cover; background-position: center;"></div>
                    <div class="swiper-slide" style="background: url(/media/1171/img-red-juice.jpg); background-size: cover; background-position: center;"></div>

                </div>
                <!-- If we need pagination -->
                <!--<div class="swiper-pagination"></div>-->

                <!-- If we need navigation buttons -->
                <!--<div class="swiper-button-prev"></div>-->
                <!--<div class="swiper-button-next"></div>-->

                <!-- If we need scrollbar -->
                <!--<div class="swiper-scrollbar"></div>-->
            </div>
            <p class="rus_lang">Without a doubt there is something very relaxing and pleasurable about cooking and eating grilled food. There are countless ways you can turn your grilling.</p>

            <p class="eng_lang">Without a doubt there is something very relaxing and pleasurable about cooking and eating grilled food. There are countless ways you can turn your grilling.</p>
        </section>

        <section class="reviws main-page__news-block news-block g-page-wrap">
            <p class="rus_lang">Отзывы наших клиентов</p>
            <p class="eng_lang">Feedback from our clients</p>
            <div class="swiper-container-rewiev  ">
                <!-- Additional required wrapper -->
                <div class="swiper-wrapper">
                    <!-- Slides -->
                    <div class="swiper-slide">
                        <p>
                            Yes, you will need to have the land owner sign the permit application as the Permittee, and you sign the permit as the Applicant or Agent for the Permittee.
                        </p>
                        <div class="info">
                            <img src="/media/1172/ellipse-9-2.png">
                            <span>Isak Pettersson</span>
                        </div>

                    </div>

                    <div class="swiper-slide">
                        <p>
                            From most barricade or traffic control companies located in the phone book. They employ certified Traffic Control Supervisors (TCS) who can generate and certify the traffic control plan.
                        </p>
                        <div class="info">
                            <img src="/media/1174/ellipse-9-1.png">
                            <span>Simon Sandberg</span>
                        </div>

                    </div>
                    <div class="swiper-slide">
                        <p>
                            An A-Line, or access restriction deed is a property right that has been obtained by CDOT for the sole purpose of prohibiting direct
                        </p>
                        <div class="info">
                            <img src="/media/1173/ellipse-9.png">
                            <span>Simon Sandberg</span>
                        </div>

                    </div>

                    <div class="swiper-slide">
                        <p>
                            Yes, you will need to have the land owner sign the permit application as the Permittee, and you sign the permit as the Applicant or Agent for the Permittee.
                        </p>
                        <div class="info">
                            <img src="/media/1172/ellipse-9-2.png">
                            <span>Isak Pettersson</span>
                        </div>

                    </div>

                    <div class="swiper-slide">
                        <p>
                            From most barricade or traffic control companies located in the phone book. They employ certified Traffic Control Supervisors (TCS) who can generate and certify the traffic control plan.
                        </p>
                        <div class="info">
                            <img src="/media/1174/ellipse-9-1.png">
                            <span>Simon Sandberg</span>
                        </div>

                    </div>
                    <div class="swiper-slide">
                        <p>
                            An A-Line, or access restriction deed is a property right that has been obtained by CDOT for the sole purpose of prohibiting direct
                        </p>
                        <div class="info">
                            <img src="/media/1173/ellipse-9.png">
                            <span>Simon Sandberg</span>
                        </div>

                    </div>

                </div>
                <!-- If we need pagination -->
                <!--<div class="swiper-pagination"></div>-->

                <!-- If we need navigation buttons -->
                <!--<div class="swiper-button-prev"></div>-->
                <!--<div class="swiper-button-next"></div>-->

                <!-- If we need scrollbar -->
                <div class="swiper-scrollbar"></div>
            </div>

        </section>
        <section class="slider_graphics">

            <div class="main-page__news-block news-block g-page-wrap">
                <h3 class="rus_lang">Инвестируйте в самые популярные активы</h3>
                <p class="rus_lang">От хорошо знакомых компаний до горячих стартапов — здесь всегда есть из чего выбрать.</p>


                <h3 class="eng_lang">Invest in the most popular assets</h3>
                <p class="eng_lang">From well-known companies to hot startups, there is always a lot to choose from.</p>





                <div id="graphics">

                    <!-- TradingView Widget BEGIN -->
                    <div class="tradingview-widget-container">
                        <div class="tradingview-widget-container__widget"></div>
                        <div class="tradingview-widget-copyright"><a href="https://ru.tradingview.com/markets/stocks-usa/" rel="noopener" target="_blank"><span class="blue-text">Рынок акций сегодня</span></a> от TradingView</div>
                        <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-hotlists.js" async>
                            {
                                "colorTheme": "light",
                                "dateRange": "12M",
                                "exchange": "NASDAQ",
                                "showChart": true,
                                "locale": "ru",
                                "largeChartUrl": "",
                                "isTransparent": false,
                                "showSymbolLogo": false,
                                "width": "285",
                                "height": "525",
                                "plotLineColorGrowing": "rgba(255, 0, 0, 1)",
                                "plotLineColorFalling": "rgba(106, 168, 79, 1)",
                                "gridLineColor": "rgba(240, 243, 250, 1)",
                                "scaleFontColor": "rgba(101, 101, 101, 1)",
                                "belowLineFillColorGrowing": "rgba(255, 12, 2, 0.08)",
                                "belowLineFillColorFalling": "rgba(106, 168, 79, 0.16)",
                                "symbolActiveColor": "rgba(33, 150, 243, 0.12)"
                            }
                        </script>
                    </div>
                    <!-- TradingView Widget END -->


                    <!-- TradingView Widget BEGIN -->
                    <div class="tradingview-widget-container">
                        <div class="tradingview-widget-container__widget"></div>
                        <div class="tradingview-widget-copyright"><a href="https://ru.tradingview.com/markets/stocks-usa/" rel="noopener" target="_blank"><span class="blue-text">Рынок акций сегодня</span></a> от TradingView</div>
                        <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-hotlists.js" async>
                            {
                                "colorTheme": "light",
                                "dateRange": "12M",
                                "exchange": "US",
                                "showChart": true,
                                "locale": "ru",
                                "largeChartUrl": "",
                                "isTransparent": false,
                                "showSymbolLogo": false,
                                "width": "285",
                                "height": "525",
                                "plotLineColorGrowing": "rgba(255, 0, 0, 1)",
                                "plotLineColorFalling": "rgba(106, 168, 79, 1)",
                                "gridLineColor": "rgba(240, 243, 250, 1)",
                                "scaleFontColor": "rgba(101, 101, 101, 1)",
                                "belowLineFillColorGrowing": "rgba(255, 12, 2, 0.08)",
                                "belowLineFillColorFalling": "rgba(106, 168, 79, 0.16)",
                                "symbolActiveColor": "rgba(33, 150, 243, 0.12)"
                            }
                        </script>
                    </div>
                    <!-- TradingView Widget END -->

                    <!-- TradingView Widget BEGIN -->
                    <div class="tradingview-widget-container">
                        <div class="tradingview-widget-container__widget"></div>
                        <div class="tradingview-widget-copyright"><a href="https://ru.tradingview.com/markets/stocks-canada/" rel="noopener" target="_blank"><span class="blue-text">Рынок акций сегодня</span></a> от TradingView</div>
                        <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-hotlists.js" async>
                            {
                                "colorTheme": "light",
                                "dateRange": "12M",
                                "exchange": "OTC",
                                "showChart": true,
                                "locale": "ru",
                                "largeChartUrl": "",
                                "isTransparent": false,
                                "showSymbolLogo": false,
                                "width": "285",
                                "height": "525",
                                "plotLineColorGrowing": "rgba(255, 0, 0, 1)",
                                "plotLineColorFalling": "rgba(106, 168, 79, 1)",
                                "gridLineColor": "rgba(240, 243, 250, 1)",
                                "scaleFontColor": "rgba(101, 101, 101, 1)",
                                "belowLineFillColorGrowing": "rgba(255, 12, 2, 0.08)",
                                "belowLineFillColorFalling": "rgba(106, 168, 79, 0.16)",
                                "symbolActiveColor": "rgba(33, 150, 243, 0.12)"
                            }
                        </script>
                    </div>
                    <!-- TradingView Widget END -->

                    <!-- TradingView Widget BEGIN -->
                    <div class="tradingview-widget-container">
                        <div class="tradingview-widget-container__widget"></div>
                        <div class="tradingview-widget-copyright"><a href="https://ru.tradingview.com/markets/stocks-usa/" rel="noopener" target="_blank"><span class="blue-text">Рынок акций сегодня</span></a> от TradingView</div>
                        <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-hotlists.js" async>
                            {
                                "colorTheme": "light",
                                "dateRange": "12M",
                                "exchange": "LSE",
                                "showChart": true,
                                "locale": "ru",
                                "largeChartUrl": "",
                                "isTransparent": false,
                                "showSymbolLogo": false,
                                "width": "285",
                                "height": "525",
                                "plotLineColorGrowing": "rgba(255, 0, 0, 1)",
                                "plotLineColorFalling": "rgba(106, 168, 79, 1)",
                                "gridLineColor": "rgba(240, 243, 250, 1)",
                                "scaleFontColor": "rgba(101, 101, 101, 1)",
                                "belowLineFillColorGrowing": "rgba(255, 12, 2, 0.08)",
                                "belowLineFillColorFalling": "rgba(106, 168, 79, 0.16)",
                                "symbolActiveColor": "rgba(33, 150, 243, 0.12)"
                            }
                        </script>
                    </div>
                    <!-- TradingView Widget END -->
                </div>

                <style type="text/css">
                    .tradingview-widget-copyright{
                        display: none !important;
                    }
                    .tv-widget-watch-list__row{
                        height: 43px !important;
                    }
                </style>

            </div>
        </section>

        <style>
            .invest-page__work-scheme.new-block.g-page-wrap{
                display: flex;
                justify-content: space-between;
            }
            .invest-page__work-scheme.new-block.g-page-wrap div{
                display: flex;
                flex-direction: column;
                align-items: center;
                justify-content: flex-start;
            }
            .invest-page__work-scheme.new-block.g-page-wrap div p{
                margin: 0;
                max-width: 220px;
                text-align: center;
            }
            .invest-page__work-scheme.new-block.g-page-wrap div p img{
                margin-left: 25px;
            }
            .invest-page__work-scheme.new-block.g-page-wrap div p strong{
                font-family: open sans;
                font-style: normal;
                font-weight: 900;
                font-size: 32px;
                line-height: 37px;
                color: #292929;
                margin-bottom: 15px;
                display: block;
            }
            #graphics{
                display: flex;
                justify-content: space-between;
                max-width: 1220px;
                margin: 0 auto;
            }
            #graphics iframe{
                box-shadow: 0 42rem 38rem rgba(47,35,86,.15);
            }

            body .slider_graphics h3{
                font-weight: 500;
            }
        </style>


        <section class="main-page__news-block  news-block  g-page-wrap">
            <div class="main-page__content  g-content-wrap">
                <div class="titles">
                    <h3 class="titles__sub-title">Новости</h3>
                    <h2 class="titles__title">Последние публикации</h2>
                </div>
                <div class="news-block__list">

                    <?php $__currentLoopData = $news; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <article class="news-block__prev-news  prev-news <?php if($loop->index >= 0 && $loop->index < 2): ?> prev-news--large <?php endif; ?>">
                            <a href="<?php echo e(route('page.news')); ?>" class="prev-news__link">
                                <a href="<?php echo e(route("page.news.show", $item)); ?>" class="prev-news__img-wrap">
                                    <img alt="" src="<?php echo e(asset($item->image_url)); ?>" class="prev-news__img">
                                </a>
                                <div class="prev-news__content">
                                    <time class="prev-news__time"><?php echo e($item->published_at->format('d.m.Y')); ?></time>
                                    <h3 class="prev-news__title"><a href="<?php echo e(route('page.news.show', $item)); ?>"><?php echo e($item->title); ?></a></h3>
                                    <p class="prev-news__text"><?php echo e(Purify::clean(\Illuminate\Support\Str::limit($item->description, 500))); ?></p>
                                </div>
                            </a>
                        </article>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
                <a href="<?php echo e(route('page.news')); ?>" class="news-block__btn-more  btn  btn--light  btn--large  d-none  d-2-inline-flex">Все новости</a>
            </div>
        </section>

    </div>
</main>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('old-content'); ?>
    <div id="header" class="arduix-nav-style" style="top: 0px;">
        <div class="navbar-area"><!-- Menu For Mobile Device -->
            <?php echo $__env->make('layouts._mobile-nav', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <!-- Menu For Desktop Device -->
            <div class="main-nav">
                <nav class="navbar navbar-expand-md navbar-light">
                    <div class="container">
                        <a class="navbar-brand" href="<?php echo e(route('home')); ?>">
                            <img src="<?php echo e(asset('images/white-logo.png')); ?>" alt="Logo">
                        </a>
                        <div class="collapse navbar-collapse mean-menu" id="navbarSupportedContent" style="display: block;">
                            <ul class="navbar-nav m-auto">
                                <li class="nav-item"><a href="<?php echo e(route('home')); ?>"><?php echo app('translator')->get('app.Главная'); ?></a></li>
                                <li class="nav-item"><a href="<?php echo e(route('page.about')); ?>" class="nav-link dropdown-toggle"><?php echo app('translator')->get('app.О компании'); ?></a></li>
                                <li class="nav-item"><a href="<?php echo e(route('page.faq')); ?>" class="nav-link dropdown-toggle"><?php echo app('translator')->get('app.Вопросы'); ?></a>
                                </li>
                                <li class="nav-item"><a href="<?php echo e(route('page.news')); ?>" class="nav-link dropdown-toggle"><?php echo app('translator')->get('app.Новости'); ?></a>
                                </li>
                                <li class="nav-item">
                                    <a href="<?php echo e(route('page.partners')); ?>" class="nav-link dropdown-toggle"><?php echo app('translator')->get('app.Партнерам'); ?></a>
                                </li>
                                <li class="nav-item"><a href="<?php echo e(route('page.support')); ?>" class="nav-link dropdown-toggle"><?php echo app('translator')->get('app.Контакты'); ?></a>
                                </li>
                            </ul>
                            <div class="others-option">
                                <a class="default-btn" href="<?php echo e(route('cabinet')); ?>">
                                    <?php echo app('translator')->get('app.Кабинет'); ?><i class="bx bx-log-in-circle"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
    </div>
    <section class="main-banner-area main-banner-area-three">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6">
                    <div class="banner-text">
                        <h1><?php echo app('translator')->get('app.Торговый робот для пассивного заработка'); ?></h1>
                        <p><?php echo app('translator')->get('app.home_desc'); ?></p>
                        <div class="banner-btn">
                            <a class="default-btn" href="#calculateModal" data-toggle="modal" ><?php echo app('translator')->get('app.Калькулятор прибыли'); ?></a>
                            <a class="default-btn active popup" href="<?php echo e(route('login')); ?>"><i style="left: 14px;" class="fa fa-money fa-fw"></i><?php echo app('translator')->get('app.Инвестировать'); ?></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="banner-main-img banner-one-main-img"><img
                            src="<?php echo e(asset('images/banner-three-main-img.png')); ?>" alt="Image">
                    </div>
                    <div class="banner-img">
                        <img class="wow fadeInDown" data-wow-delay=".1s" src="<?php echo e(asset('images/home_1.png')); ?>" alt="Image" style="visibility: visible; animation-delay: 0.1s;">
                        <img class="wow fadeInDown" data-wow-delay=".6s" src="<?php echo e(asset('images/home_2.png')); ?>" alt="Image" style="visibility: visible; animation-delay: 0.6s;"></div>
                </div>
            </div>
        </div>
        <div class="whites-shape"><img src="<?php echo e(asset('images/white-bottom-shape-banner-three.png')); ?>" alt="Image"></div>
        <div class="over-shape">
            <img src="<?php echo e(asset('images/1(1).png')); ?>" alt="Image">
            <img src="<?php echo e(asset('images/1(1).png')); ?>" alt="Image">
            <img src="<?php echo e(asset('images/2(1).png')); ?>" alt="Image">
            <img src="<?php echo e(asset('images/2(1).png')); ?>" alt="Image">
            <img src="<?php echo e(asset('images/3.png')); ?>" alt="Image">
        </div>
    </section><!-- End Main Banner Area --><!-- Start About Area -->
    <section class="about-area pt-100">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="about-img"><img src="<?php echo e(asset('images/about-img-three.png')); ?>" alt="Image"></div>
                </div>
                <div class="col-lg-6">
                    <div class="about-content"><span><?php echo app('translator')->get('app.about'); ?></span>
                        <h2><?php echo app('translator')->get('app.about_heading'); ?></h2>
                        <p><?php echo app('translator')->get('app.about_desc'); ?></p>
                        <div class="row">
                            <div class="col-lg-6 col-sm-6">
                                <ul>
                                    <li><i class="fas fa-check"></i><?php echo app('translator')->get('app.Поддержка 24/7'); ?></li>
                                    <li><i class="fas fa-check"></i><?php echo app('translator')->get('app.Моментальные начисления'); ?></li>
                                </ul>
                            </div>
                            <div class="col-lg-6 col-sm-6">
                                <ul>
                                    <li><i class="fas fa-check"></i><?php echo app('translator')->get('app.Гарантия выплат'); ?></li>
                                    <li><i class="fas fa-check"></i><?php echo app('translator')->get('app.Легальная компания'); ?></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section><!-- End About Area --><br><br><br><!-- Start Industries Area -->
    <section class="industries-area pb-100">
        <div class="container">
            <div class="section-title">
                <span><?php echo app('translator')->get('app.Наше предложение'); ?></span>
                <h2><?php echo app('translator')->get('app.Investment plans'); ?></h2>
            </div>
            <div class="tab industries-list-tab">
                <div class="row align-items-center">
                    <div class="col-lg-3">
                        <ul class="tabs active">
                            <li class="current">
                                <a href="#mini">
                                    <i class="fas fa-brain"></i>
                                    <h3>Mini</h3>
                                    <span>1.5% <?php echo app('translator')->get('app.за'); ?> 24 <?php echo app('translator')->get('app.часа'); ?></span>
                                </a>
                            </li>
                            <li>
                                <a href="#standart">
                                    <i class="fas fa-code-branch"></i>
                                    <h3>Standart</h3>
                                    <span>1.8% <?php echo app('translator')->get('app.за'); ?> 24 <?php echo app('translator')->get('app.часа'); ?></span>
                                </a>
                            </li>
                            <li>
                                <a href="#normal">
                                    <i class="fas fa-hospital"></i>
                                    <h3>Normal</h3>
                                    <span>2.4% <?php echo app('translator')->get('app.за'); ?> 24 <?php echo app('translator')->get('app.часа'); ?></span>
                                </a>
                            </li>
                            <li>
                                <a href="#premium">
                                    <i class="fas fa-robot"></i>
                                    <h3>Premium</h3>
                                    <span>2.8% <?php echo app('translator')->get('app.за'); ?> 24 <?php echo app('translator')->get('app.часа'); ?></span>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-lg-9">
                        <div class="tab_content">
                            <div class="tabs_item active" id="mini">
                                <div class="row align-items-center">
                                    <div class="col-lg-6">
                                        <div class="industries-img">
                                            <img src="<?php echo e(asset('images/industries-img.png')); ?>" alt="Image">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="industries-content"><h3>Mini</h3>
                                            <p><?php echo app('translator')->get('app.mini_desc'); ?></p>
                                            <p class="mb">* <?php echo app('translator')->get('app.mini_desc_second'); ?></p>
                                            <div class="row">
                                                <div class="col-lg-6 col-sm-6">
                                                    <ul class="industries-item">
                                                        <li><i class="fas fa-check"></i>Min: 30$</li>
                                                        <li><i class="fas fa-check"></i>Profit: 1.5%</li>
                                                        <li><i class="fas fa-check"></i>Instant payments</li>
                                                    </ul>
                                                </div>
                                                <div class="col-lg-6 col-sm-6">
                                                    <ul class="industries-item">
                                                        <li><i class="fas fa-check"></i>Max: 325$</li>
                                                        <li><i class="fas fa-check"></i>Hourly: 0.06%</li>
                                                        <li><i class="fas fa-check"></i>Deposit Included</li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <a class="default-btn" href="<?php echo e(route('cabinet')); ?>"><?php echo app('translator')->get('app.invest'); ?></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tabs_item" id="standart">
                                <div class="row align-items-center">
                                    <div class="col-lg-6">
                                        <div class="industries-img"><img src="<?php echo e(asset('images/2(2).png')); ?>" alt="Image">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="industries-content"><h3>Standart</h3>
                                            <p><?php echo app('translator')->get('app.standart_desc'); ?></p>
                                            <p class="mb"><?php echo app('translator')->get('app.standart_desc_mini'); ?></p>
                                            <div class="row">
                                                <div class="col-lg-6 col-sm-6">
                                                    <ul class="industries-item">
                                                        <li><i class="fas fa-check"></i>Min: 325$</li>
                                                        <li><i class="fas fa-check"></i>Profit: 1.8%</li>
                                                        <li><i class="fas fa-check"></i>Instant payments</li>
                                                    </ul>
                                                </div>
                                                <div class="col-lg-6 col-sm-6">
                                                    <ul class="industries-item">
                                                        <li><i class="fas fa-check"></i>Max: 900$</li>
                                                        <li><i class="fas fa-check"></i>Hourly: 0.075%</li>
                                                        <li><i class="fas fa-check"></i>Deposit included</li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <a class="default-btn" href="<?php echo e(route('cabinet')); ?>"><?php echo app('translator')->get('app.invest'); ?></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tabs_item" id="normal">
                                <div class="row  align-items-center">
                                    <div class="col-lg-6">
                                        <div class="industries-img"><img src="<?php echo e(asset('images/3(1).png')); ?>" alt="Image">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="industries-content"><h3>Normal</h3>
                                            <p><?php echo app('translator')->get('app.normal_desc'); ?></p>
                                            <p class="mb"><?php echo app('translator')->get('app.normal_desc_mini'); ?></p>
                                            <div class="row">
                                                <div class="col-lg-6 col-sm-6">
                                                    <ul class="industries-item">
                                                        <li><i class="fas fa-check"></i>Min: 900$</li>
                                                        <li><i class="fas fa-check"></i>Profit: 2.4%</li>
                                                        <li><i class="fas fa-check"></i>Instant payments</li>
                                                    </ul>
                                                </div>
                                                <div class="col-lg-6 col-sm-6">
                                                    <ul class="industries-item">
                                                        <li><i class="fas fa-check"></i>Max: 2000$</li>
                                                        <li><i class="fas fa-check"></i>Hourly: 0.1%</li>
                                                        <li><i class="fas fa-check"></i>Deposit Included</li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <a class="default-btn" href="<?php echo e(route('cabinet')); ?>"><?php echo app('translator')->get('app.invest'); ?></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tabs_item" id="premium">
                                <div class="row  align-items-center">
                                    <div class="col-lg-6">
                                        <div class="industries-img"><img src="<?php echo e(asset('images/premium3.png')); ?>" alt="Image">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="industries-content"><h3>Premium</h3>
                                            <p><?php echo app('translator')->get('app.premium_desc'); ?></p>
                                            <div class="row">
                                                <div class="col-lg-6 col-sm-6">
                                                    <ul class="industries-item">
                                                        <li><i class="fas fa-check"></i>Min: 2000$</li>
                                                        <li><i class="fas fa-check"></i>Profit: 2.8%</li>
                                                        <li><i class="fas fa-check"></i>Instant payments</li>
                                                    </ul>
                                                </div>
                                                <div class="col-lg-6 col-sm-6">
                                                    <ul class="industries-item">
                                                        <li><i class="fas fa-check"></i>Max: 6000$</li>
                                                        <li><i class="fas fa-check"></i>Hourly: 0.116%</li>
                                                        <li><i class="fas fa-check"></i>Deposit Included</li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <a class="default-btn" href="<?php echo e(route('cabinet')); ?>">Инвестировать</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section><!-- End Industries Area --><!-- Start What We Offer Area -->
    <section class="choose-ue-area pb-100">
        <div class="container">
            <div class="row">
                <div class="col-8">
                    <div class="choose-title">
                        <h2><?php echo app('translator')->get('app.Как начать?'); ?></h2>
                    </div>
                </div>
            </div>
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="choose-content">
                        <ul>
                            <li><span>01 <i class="fas fa-sync"></i></span>
                                <h3><?php echo app('translator')->get('app.Регистрация'); ?></h3>
                                <p><?php echo app('translator')->get('app.Пройдите бесплатную регистрацию для создания депозита'); ?></p></li>
                            <li class="ml"><span>02 <i class="fas fa-shield-alt"></i></span>
                                <h3><?php echo app('translator')->get('app.Депозит'); ?></h3>
                                <p><?php echo app('translator')->get('app.Откройте депозит с удобной для вас платежной системой'); ?></p></li>
                            <li class="ml-25"><span>03 <i class="fas fa-user"></i></span>
                                <h3><?php echo app('translator')->get('app.Прибыль'); ?></h3>
                                <p><?php echo app('translator')->get('app.Получайте прибыль каждый день. Выводите или делайте реинвест с баланса'); ?></p></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="choose-img"><img src="<?php echo e(asset('images/choose-img.png')); ?>" alt="Image"></div>
                </div>
            </div>
        </div>
    </section>
    <section class="my-5">
        <div class="container mb-4">
            <h2 class="text-center"><?php echo app('translator')->get('app.Дорожная карта'); ?></h2>
            <div class="bar"></div>
            <div class="timeline">
                <?php $__currentLoopData = __('app.roadmap'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="entry">
                    <h1><?php echo e($item['date']); ?></h1>
                    <?php echo $item['text']; ?>

                </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </div>
    </section>
    <div class="container my-5">
        <div class="row">
            <div class="col-12 text-center">
                <iframe width="800" style="max-width: 100%" height="500" src="https://www.youtube.com/embed/Z5YmgUKp_v0" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
            <div class="col-12 calendar">
                <div class="card h-100">
                    <div class="card-body h-100 Light">
                        <h3 class="mt-2"><?php echo app('translator')->get('Доходность компании'); ?></h3>
                        <div class="table-container table-responsive">
                            <div class="d-flex justify-content-between mb-3">
                                <h4><?php echo e(\Illuminate\Support\Str::ucfirst(now()->getTranslatedMonthName('MMMM'))); ?></h4>
                            </div>
                            <table class="w-100 table table-borderless spaceless">
                                <thead class="table-header">
                                <tr>
                                    <th><?php echo app('translator')->get('app.Понедельник'); ?></th>
                                    <th><?php echo app('translator')->get('app.Вторник'); ?></th>
                                    <th><?php echo app('translator')->get('app.Среда'); ?></th>
                                    <th><?php echo app('translator')->get('app.Четверг'); ?></th>
                                    <th><?php echo app('translator')->get('app.Пятница'); ?></th>
                                    <th><?php echo app('translator')->get('app.Суббота'); ?></th>
                                    <th><?php echo app('translator')->get('app.Воскресенье'); ?></th>
                                </tr>
                                </thead>
                                <tbody><!---->
                                <?php $__currentLoopData = $calendar->chunk(7); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $chunk): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                        <?php $__currentLoopData = $chunk; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $date => $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <?php if($item['value'] == null || $item['date']->getTimestamp() > now()->getTimestamp()): ?>
                                                <td class="day">
                                                    <div class="disabled-day">

                                                    </div>
                                                </td>
                                            <?php else: ?>
                                                <td class="day">
                                                    <div class="active-day <?php if($item['date']->format('d.m') == now()->format('d.m')): ?> current <?php endif; ?>">
                                                        <div class="d-flex align-items-center">
                                                            <span class="m-2"><?php echo e($item['date']->format('d')); ?></span>
                                                            <h5 class="text-center">
                                                                <span class="text-center mx-auto">
                                                                    <?php if(\Illuminate\Support\Str::startsWith($item['value']->value, 'down')): ?>
                                                                        <span class="ml-2 text-danger">
                                                                            <i class="fas fa-sort-down"></i>
                                                                        </span>
                                                                    <?php endif; ?>
                                                                    <?php if(\Illuminate\Support\Str::startsWith($item['value']->value, 'up')): ?>
                                                                        <span class="ml-2 text-success">
                                                                            <i class="fas fa-sort-up"></i>
                                                                        </span>
                                                                    <?php endif; ?>

                                                                    <?php echo \Illuminate\Support\Str::replaceFirst('down', '', \Illuminate\Support\Str::replaceFirst('up', '', $item['value']->value)); ?>

                                                                </span>
                                                            </h5>
                                                            <div class="empty-divider"></div>
                                                        </div>
                                                    </div>
                                                </td>
                                            <?php endif; ?>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <section class="refs">
        <div class="container">
            <h2 class="title with-icon">
                <i class="fas fa-users"></i> <?php echo app('translator')->get('app.Партнерская программа'); ?>
            </h2>
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-7">
                    <p><?php echo app('translator')->get('app.partners_desc'); ?>
                    </p></div>
                <div class="col-sm-12 col-lg-5 col-xs-mt-20 col-sm-mt-40 col-md-mt-40 col-lg-mt-0">
                    <div class="refs-panel">
                        <div class="row">
                            <div class="col-sm-6 col-lg-12">
                                <p>
                                    <?php echo app('translator')->get('app.Ознакомиться с условиями партнерской программы можно в разделе'); ?>
                                </p>
                            </div>
                        </div>
                        <a href="/partners" class="btn btn-empty1 btn-inline"><?php echo app('translator')->get('app.Перейти на страницу'); ?></a></div>
                </div>
            </div>
        </div>
    </section>
    <div class="container">
        <section class="partners wow fadeInUp" data-wow-duration="0.4s" data-wow-delay="0.2s"
                 style="visibility: visible; animation-duration: 0.4s; animation-delay: 0.2s; animation-name: fadeInUp;">
            <div class="left"><b><?php echo app('translator')->get('app.Партнеры с которыми мы работаем'); ?></b>
                <img src="/images/panel-right-arrow.svg" class="svg-arrow">
            </div>
            <div class="right">
                <ul>
                    <li><a><img src="/images/bittrex.png" class="partner-item-5" alt=""></a></li>
                    <li><a><img src="/images/huobi.png" class="partner-item-2" alt=""></a></li>
                    <li><a><img src="/images/binance.png" class="partner-item-3" alt=""></a></li>
                    <li><a><img src="/images/kraken.png" class="partner-item-4" alt=""></a></li>
                    <li><a><img src="/images/poloniex.png" class="partner-item-5" alt=""></a></li>
                </ul>
            </div>
        </section>

        <div class="my-3">
            <p style="font-size: 23px">
                <?php echo app('translator')->get('app.Поделись своей партнерской ссылкой прямо сейчас, и увеличивай ежедневный процент прибыли !'); ?>
            </p>
        </div>
    </div>
    <?php echo $__env->make('pages._faq', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <section class="news-area pb-70">
        <div class="container">
            <div class="section-title"><br><br>
                <h2><?php echo app('translator')->get('app.news'); ?></h2>
            </div>
            <div class="row">
                <?php $__currentLoopData = $news; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="col-lg-4 col-md-6">
                    <div class="single-news">
                        <div class="blog-img text-center">
                            <a href="<?php echo e(route('page.news')); ?>">
                                <img src="<?php echo e(asset($item->image_url)); ?>" alt="Image" style="max-width: 350px; width: 100%">
                            </a>
                            <div class="dates"><span><?php echo e($item->published_at->format('d.m.Y')); ?></span>
                            </div>
                        </div>
                        <div class="news-content-wrap">
                            <ul>
                                <li><a href="<?php echo e(route('page.news')); ?>#"><i class="bx bx-user-check"></i><?php echo app('translator')->get('app.Администратор'); ?></a></li>
                                <li></li>
                            </ul>
                            <a href="<?php echo e(route('page.news')); ?>"><h3><?php echo e($item->title); ?></h3></a>
                            <p><?php echo \Illuminate\Support\Str::limit($item->description, 300); ?></p>
                        </div>
                    </div>
                </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </div>
    </section><!-- End News Area --><!-- Jquery Slim JS -->

    <div class="modal fade" id="calculateModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title w-100" id="exampleModalLabel"><?php echo app('translator')->get('app.Калькулятор прибыли'); ?></h5>
                    <button type="button" class="close w-100 text-right" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-lg-6">
                            <label><?php echo app('translator')->get('app.Сумма депозита'); ?></label>
                            <input v-model="calculate.sum" type="number" min="2000" class="form-control" placeholder="<?php echo app('translator')->get('app.Сумма депозита'); ?>">

                            <label class="mt-4"><?php echo app('translator')->get('app.Начисленная прибыль'); ?></label>
                            <input :value="resultSum" type="text" class="form-control" readonly>
                        </div>
                        <div class="col-lg-6">
                            <label><?php echo app('translator')->get('app.Количество дней'); ?></label>
                            <input type="number" v-model="calculate.days" min="5" class="form-control" placeholder="<?php echo app('translator')->get('app.Количество дней'); ?>">

                            <label class="mt-4"><?php echo app('translator')->get('app.Сумма после окончания депозита'); ?></label>
                            <input :value="parseInt(resultSum) + parseInt(calculate.sum)" type="text" class="form-control" readonly>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <a href="<?php echo e(route('cabinet')); ?>" type="button" class="btn btn-primary w-100"><?php echo app('translator')->get('app.Инвестировать'); ?></a>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
































<?php echo $__env->make('layouts.front_app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/maksa988/www/invest2/resources/views/welcome.blade.php ENDPATH**/ ?>