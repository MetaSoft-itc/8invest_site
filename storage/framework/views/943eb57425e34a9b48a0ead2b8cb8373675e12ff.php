<!DOCTYPE html>
<html lang="ru">
<head>
    <base href="/">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="yandex-verification" content="31d393ac009f6df8" />
    <meta name="viewport" content="width=device-width, user-scalable=yes, initial-scale=1, shrink-to-fit=no" />
    <title>Ellis Company — онлайн-платформа для инвестрирования</title>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://kit.fontawesome.com/61cd522d8e.js" crossorigin="anonymous"></script>
    <link
        rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
    />
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.css">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">

    <link rel="stylesheet" href="<?php echo e(asset('css/app.css')); ?>?<?php echo e(time()); ?>">
</head>
<body>

<header class="page-header">
    <div class="page-header__top-wrap  g-page-wrap">
        <div class="page-header__top  g-content-wrap">
            <div class="page-header__contacts  contacts  d-2-none">
                <p class="contacts__contact  contacts__contact--address">
                    <svg>
                        <use xlink:href="/img/svg/sprite-main.svg#ico-map-point"></use>
                    </svg>
                    <span>7 RUSSELL'S WHARF FLATS HARROW ROAD LONDON UNITED KINGDOM W10 4RE</span>
                </p>
            </div>
            <?php if(auth()->guard()->check()): ?>
            <div class="page-header__lang  lang">
                <span style="font-size: 13px; color: #fff;"><?php echo e(Auth::user()->name); ?></span>
            </div>
            <?php endif; ?>
            <div class="page-header__log-links  log-links  d-none  d-2-flex">
                <?php if(auth()->guard()->guest()): ?>
                <a href="<?php echo e(route('login')); ?>" class="log-links__login">
                    <svg>
                        <use xlink:href="/img/svg/sprite-main.svg#ico-login"></use>
                    </svg>
                    <span>Войти</span>
                </a>
                <a href="<?php echo e(route('register')); ?>" class="log-links__registration  btn">
                    <svg class="d-none  d-2-block">
                        <use xlink:href="/img/svg/sprite-main.svg#ico-lock"></use>
                    </svg>
                    <span>Регистрация</span>
                </a>
                <?php endif; ?>
                <?php if(auth()->guard()->check()): ?>
                <a href="<?php echo e(route('cabinet')); ?>" class="log-links__login">
                    <svg>
                        <use xlink:href="/img/svg/sprite-main.svg#ico-lock"></use>
                    </svg>
                    <span>Кабинет</span>
                </a>
                <a href="<?php echo e(route('logout')); ?>" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" class="log-links__registration  btn">
                    <svg class="d-none  d-2-block">
                        <use xlink:href="/img/svg/sprite-main.svg#ico-login"></use>
                    </svg>
                    <span>Выйти</span>
                </a>
                <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" style="display: none;">
                    <?php echo csrf_field(); ?>
                </form>
                <?php endif; ?>
            </div>
        </div>
    </div>
    <div class="page-header__main-wrap  g-page-wrap">
        <div class="page-header__main  g-content-wrap">
            <a href="/" class="page-header__logo logo">
                <img src="/img/svg/Ellis7.png" alt="Ellis Company logo" class="logo__img">
            </a>

            <nav class="page-header__menu  menu  d-2-none">
                <a href="/" class="menu__link">Главная</a>

                <a href="<?php echo e(route('page.about')); ?>" class="menu__link">О компании</a>

                <a href="<?php echo e(route('page.news')); ?>" class="menu__link">Новости</a>
                <a href="<?php echo e(route('page.partners')); ?>" class="menu__link">Партнёру</a>
                <a href="<?php echo e(route('page.invest')); ?>" class="menu__link">Инвестору</a>
                <a href="<?php echo e(route('page.support')); ?>" class="menu__link">Контакты</a>
            </nav>

            <div class="page-header__log-links  log-links  d-2-none">
                <?php if(auth()->guard()->guest()): ?>
                <a href="<?php echo e(route('login')); ?>" class="log-links__login">
                    <svg>
                        <use xlink:href="/img/svg/sprite-main.svg#ico-login"></use>
                    </svg>
                    <span>Войти</span>
                </a>
                <a href="<?php echo e(route('register')); ?>" class="log-links__registration  btn">
                    <svg class="d-none  d-2-block">
                        <use xlink:href="/img/svg/sprite-main.svg#ico-lock"></use>
                    </svg>
                    <span>Регистрация</span>
                </a>
                <?php endif; ?>
                <?php if(auth()->guard()->check()): ?>
                    <?php if(\Illuminate\Support\Str::startsWith(Route::currentRouteName(), 'cabinet') || Route::currentRouteName() == 'income' || Route::currentRouteName() == 'home'): ?>
                        <a href="<?php echo e(route('logout')); ?>" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" class="log-links__login">
                            <svg>
                                <use xlink:href="/img/svg/sprite-main.svg#ico-login"></use>
                            </svg>
                            <span>Выйти</span>
                        </a>
                        <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" style="display: none;">
                            <?php echo csrf_field(); ?>
                        </form>
                    <?php else: ?>
                    <a href="<?php echo e(route('cabinet')); ?>" class="log-links__registration  btn">
                        <svg class="d-none  d-2-block">
                            <use xlink:href="<?php echo e(asset('/img/svg/sprite-main.svg')); ?>#ico-lock"></use>
                        </svg>
                        <span>Личный кабинет</span>
                    </a>
                    <?php endif; ?>
                <?php endif; ?>
            </div>

            <a href="#" class="page-header__mob-menu-link d-none d-2-block" data-modal-link="mob-menu">
                <svg>
                    <use xlink:href="/img/svg/sprite-main.svg#ico-menu"></use>
                </svg>
            </a>
        </div>
    </div>
</header>

<div class="mob-menu" data-modal="mob-menu">
    <div class="mob-menu__content" data-modal-content>
        <div class="mob-menu__head">
            <a href="/" class="mob-menu__logo logo">
                <img src="<?php echo e(asset('img/svg/Ellis7.png')); ?>" alt="Ellis Company logo" class="logo__img">
            </a>
            <a href="#" class="mob-menu__close" data-modal-close>
                <svg>
                    <use xlink:href="/img/svg/sprite-main.svg#ico-close"></use>
                </svg>
            </a>
        </div>
        <nav class="mob-menu__menu  menu">
            <?php if(\Illuminate\Support\Str::startsWith(Route::currentRouteName(), 'cabinet') || Route::currentRouteName() == 'income' || Route::currentRouteName() == 'home'): ?>
            <a href="<?php echo e(route('cabinet')); ?>" class="mob-menu__link _active-mob">Главная</a>
            <a href="<?php echo e(route('income')); ?>" class="mob-menu__link">Инвестировать</a>
            <a href="<?php echo e(route('cabinet.deposits.new')); ?>" class="mob-menu__link">Новый депозит</a>
            <a href="<?php echo e(route('cabinet.deposits')); ?>" class="mob-menu__link">Мои депозиты</a>
            <a href="<?php echo e(route('cabinet.account')); ?>" class="mob-menu__link">Личные данные</a>
            <a href="<?php echo e(route('cabinet.transfer')); ?>" class="mob-menu__link">Внутренний перевод</a>
            <a href="<?php echo e(route('cabinet.referals')); ?>" class="mob-menu__link">Реф. система</a>
            <a href="<?php echo e(route('cabinet.outcome')); ?>" class="mob-menu__link">Вывод средств</a>
            <a href="<?php echo e(route('cabinet.requisites')); ?>" class="mob-menu__link">Мои реквизиты</a>
            <a href="<?php echo e(route('cabinet.password')); ?>" class="mob-menu__link">Смена пароля</a>
            <a href="<?php echo e(route('cabinet.verification')); ?>" class="mob-menu__link">Верификация личности</a>
            <a href="<?php echo e(route('cabinet.calculator')); ?>" class="mob-menu__link">Калькулятор инвестора</a>
            <?php endif; ?>

            <a href="/" class="mob-menu__link _active-mob">Главная</a>
            <a href="<?php echo e(route('page.about')); ?>" class="mob-menu__link">О компании</a>
            <a href="<?php echo e(route('page.news')); ?>" class="mob-menu__link">Новости</a>
            <a href="<?php echo e(route('page.partners')); ?>" class="mob-menu__link">Партнёру</a>
            <a href="<?php echo e(route('page.invest')); ?>" class="mob-menu__link">Инвестору</a>
            <a href="<?php echo e(route('page.support')); ?>" class="mob-menu__link">Контакты</a>
            <?php if(auth()->guard()->check()): ?>
            <a href="<?php echo e(route('cabinet')); ?>" class="mob-menu__link _active-mob">Личный кабинет</a>
            <?php endif; ?>
        </nav>
        <div class="mob-menu__contacts  contacts">
            <p class="contacts__contact  contacts__contact--address">
                <svg>
                    <use xlink:href="/img/svg/sprite-main.svg#ico-map-point"></use>
                </svg>
                <span>7 RUSSELL'S WHARF FLATS HARROW ROAD LONDON UNITED KINGDOM W10 4RE</span>
            </p>
        </div>
    </div>
</div>

<?php echo $__env->yieldContent('content'); ?>
<style>
    .embed-container {
        position: relative;
        padding-bottom: 56.25%;
        overflow: hidden;
        margin-top: 30rem;
        margin-bottom: 30rem;
    }

    .embed-container iframe,
    .embed-container object,
    .embed-container embed {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
    }

</style>
<style>
    section.video_slider {
        display: none;
    }

    section.reviws.main-page__news-block.news-block.g-page-wrap {
        display: none;
    }
    .swiper-container-slider-graphics.swiper-container-horizontal {
        display: none;
    }



</style>


<footer class="page-footer  g-page-wrap">
    <div class="page-footer__content  g-content-wrap">
        <div class="page-footer__info">
            <a href="/" class="page-footer__logo logo">
                <img src="/img/svg/Ellis7.png" alt="Ellis Company logo" class="logo__img">
            </a>
            <p class="page-footer__copyright  d-2-none">&#169; 2018 - 2021 ELLIS COMPANY inc LTD. Все права защищены.</p>
            <a class="page-footer__rules-link  d-2-none">

            </a>
        </div>
        <nav class="page-footer__nav">
            <div class="page-footer__nav-col" style="margin-top: 0px;margin-right: 0px;">
                <a href="<?php echo e(route('page.about')); ?>" class="page-footer__nav-link">О компании</a>
                <a href="<?php echo e(route('page.news')); ?>" class="page-footer__nav-link">Новости</a>
                <a href="<?php echo e(route('page.about')); ?>#pdf-docs" class="page-footer__nav-link">Юридическая информация и конфиденциальность</a>
            </div>

            <div class="page-footer__nav-col d-2-none">
                <div class="footer-main-text">
                    <p style="text-align: center;">Бизнес-модель Ellis Company позволяет нашей компании не только работать стабильно и быть финансово устойчивой в очень изменчивых реалиях рынка, но и также дает нам возможность очень быстро принимать решения, быть мобильной и эффективной командой, ведь деньги не только не спят, но и не медлят.</p>
                </div>
            </div>
        </nav>
        <div class="d-none d-2-block">
            <div class="footer-main-text">
                <p style="text-align: center;">Бизнес-модель Ellis Company позволяет нашей компании не только работать стабильно и быть финансово устойчивой в очень изменчивых реалиях рынка, но и также дает нам возможность очень быстро принимать решения, быть мобильной и эффективной командой, ведь деньги не только не спят, но и не медлят.</p>
            </div>
        </div>
        <div class="page-footer__contacts">
            <h3 class="page-footer__sub-title">Мы в социальных сетях:</h3>
            <div class="page-footer__soc  soc">

                <a href="https://vk.com/ellis_company_ru" target="_blank" class="soc__link" style="background-image: url(/media/1081/vk_y.png);"></a>
                <a href="https://youtu.be/u0XixswgERs" target="_blank" class="soc__link" style="background-image: url(/media/1012/youtube.png);"></a>
            </div>

        </div>
        <div class="page-footer__mob-info  d-none  d-2-block">
            <p class="page-footer__copyright">&#169; 2018 - 2021 ELLIS COMPANY inc LTD. Все права защищены.</p>
            <a class="page-footer__rules-link">

            </a>
        </div>
    </div>
</footer>
<style>
    .footer-main-text {
        max-width: 600rem;
        margin-bottom: 20rem;
        opacity: 0.7;
    }
    .footer-main-text > p {
        font-size: 12.5rem;
        margin: auto;
    }
    .swiper-container-tupa-new .swiper-slide{

        height: 480px;
        border-radius: 8px;
        opacity: 0.4;
        transition: all 500ms cubic-bezier(0.065, 0.260, 0.410, 0.960); /* custom */

        transition-timing-function: cubic-bezier(0.065, 0.260, 0.410, 0.960); /* custom */
    }
    .swiper-container-tupa-new .swiper-slide.swiper-slide-prev + .swiper-slide{
        opacity: 1;
    }
    .video_slider h3{
        font-style: normal;
        font-weight: 500;
        font-size: 28px;
        line-height: 48px;
        /* identical to box height, or 171% */


        color: #000000;
        text-align: center;
        margin-bottom: 80px;
    }
    .video_slider p{
        max-width: 750px;
        text-align: left;
        margin: 30px auto 53px;
        font-style: normal;
        font-weight: normal;
        font-size: 17px;
        line-height: 31px;
        color: #666666;
    }
    .reviws{

        margin: 40px auto;
    }
    .swiper-container-rewiev{
        overflow: hidden;
        padding: 13px 18px 71px;
    }
    .swiper-container-rewiev .swiper-slide{
        background: #FFFFFF;
        box-shadow: 0px 20px 40px rgba(50, 46, 45, 0.1);
        border-radius: 10px;
        padding: 40px;
    }
    .swiper-container-rewiev .swiper-slide > p{
        font-style: normal;
        font-weight: 300;
        font-size: 15px;
        line-height: 30px;
        /* or 200% */


        /* text */

        color: #402B2B;
        margin: 0;
        min-height: 140px;
    }
    .swiper-container-rewiev .swiper-slide .info{
        display: flex;
        align-items: center;
    }
    .swiper-container-rewiev .swiper-slide .info span{
        font-style: normal;
        font-weight: bold;
        font-size: 16px;
        line-height: 30px;
        /* or 187% */

        display: flex;
        align-items: center;
        margin-left: 22px;
        color: #302626;

    }
    .reviws > p{
        font-style: normal;
        font-weight: 500;
        font-size: 28px;
        line-height: 34px;
        /* identical to box height */

        letter-spacing: 1px;
        text-align: center;

        color: #141414;
    }
    .slider_graphics{
        background: rgba(56, 17, 80, 0.03);
        padding-bottom: 64PX;
        margin-bottom: 24px;
    }
    .slider_graphics h3{
        font-style: normal;
        font-weight: bold;
        font-size: 28px;
        line-height: 48px;
        /* identical to box height, or 171% */

        letter-spacing: -1px;


        color: #000000;
        text-align: center;
        padding-top: 50px;
    }
    .slider_graphics .news-block > p{
        margin: 0 auto;
        font-style: normal;
        font-weight: normal;
        font-size: 17px;
        line-height: 31px;
        /* or 182% */

        text-align: center;

        color: #666666;
        max-width:560px;
        margin-bottom: 40px;
    }
    .slider_graphics .news-block .swiper-slide{
        background: #FFFFFF;
        box-shadow: 0px 15px 30px rgba(153, 153, 153, 0.2);
        border-radius: 20px;
        padding: 20px;
    }
    .slider_graphics .news-block .swiper-slide p{
        margin: 0;
    }
    .slider_graphics .news-block .swiper-slide p:last-child img{
        width: 100% !important;
        height: auto !important;
    }
    /*html:lang(en) .invest-page__work-scheme.new-block.g-page-wrap{*/
    /*    display: none;*/
    /*}*/
    /* html:lang(en) .video_slider{*/
    /*     display: none;*/
    /*}*/
    /*html:lang(en) .reviws.main-page__news-block.news-block.g-page-wrap{*/
    /*    display: none;*/
    /*}*/
    /*html:lang(en) .slider_graphics{*/
    /*    display: none;*/
    /*}*/
    html:lang(en) .rus_lang{
        display: none !important;
    }

    html:lang(ru) .eng_lang{
        display: none !important;
    }

</style>

<script>

    $(document).ready(function () {

        var mySwiper = new Swiper('.swiper-container-tupa-new', {
            speed: 400,
            spaceBetween: 60,
            slidesPerView: 1.5,
            centeredSlides: true,
            loop: true,


            breakpoints: {

                900: {
                    slidesPerView: 1,
                    spaceBetween: 20
                }

            }
        });



        var mySwiperRewiev = new Swiper('.swiper-container-rewiev', {
            speed: 400,
            spaceBetween: 20,
            slidesPerView: 3,
            centeredSlides: true,
            loop: true,


            breakpoints: {

                900: {
                    slidesPerView: 1,
                    spaceBetween: 20
                }

            }
        });

        var mySwiperGraphiks = new Swiper('.swiper-container-slider-graphics', {
            speed: 400,
            spaceBetween: 20,
            slidesPerView: 5,
            centeredSlides: true,
            loop: true,


            breakpoints: {

                900: {
                    slidesPerView: 1,
                    spaceBetween: 20
                }

            }
        });


    });
</script>

<!--<div class="modal" data-modal="sign-up">-->
<!--<form class="modal__content">-->
<!--<h2 class="modal__title">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</h2>-->
<!--<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium atque beatae blanditiis cum ea enim excepturi illo incidunt laborum molestiae mollitia nihil numquam officia, perferendis perspiciatis quaerat repellendus tempore voluptate!</p>-->
<!--<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium atque beatae blanditiis cum ea enim excepturi illo incidunt laborum molestiae mollitia nihil numquam officia, perferendis perspiciatis quaerat repellendus tempore voluptate!</p>-->
<!--</form>-->
<!--</div>-->
<!--<script src="https://cdn.polyfill.io/v2/polyfill.min.js"></script>-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!--<script src="js/owl.carousel.min.js"></script>-->
<script src="https://unpkg.com/swiper/swiper-bundle.js"></script>
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
<script src="<?php echo e(asset('js/app.js')); ?>?<?php echo e(time()); ?>"></script>
<?php echo $__env->yieldPushContent('scripts'); ?>
</body>
</html>
<?php /**PATH /Users/maksa988/www/invest2/resources/views/layouts/front_app.blade.php ENDPATH**/ ?>