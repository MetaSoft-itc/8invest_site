<?php $__env->startSection('content'); ?>
<main class="page-content">
    <div class="page-content__content contacts-page">
        <section class="contacts-page__content-wrap  g-page-wrap">
            <div class="contacts-page__content  g-content-wrap">

                <h1 class="contacts-page__title">Контакты</h1>
                <div class="contacts-page__text  text-block">
                    <p>Если у вас есть какие либо вопросы или предложения - напишите нам об этом.</p>
                </div>

                <div class="container">
                    <div class="row my-5">
                        <div class="col-md-4 col-12">
                            <div class="w-100 mt-3">
                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2482.315316818213!2d-0.20786778402766515!3d51.52577621718007!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x48761010ad280e05%3A0x944583d2e6031bb5!2sRussells%20Wharf%20Flats%2C%20Harrow%20Rd%2C%20London%20W10%204RE%2C%20UK!5e0!3m2!1sen!2sua!4v1611264517312!5m2!1sen!2sua" width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                            </div>

                            <h3><?php echo app('translator')->get('app.Контакты'); ?></h3>
                            <div class="contacts-row">
                                <div class="contacts-col">
                                    <h6><?php echo app('translator')->get('app.КЛИЕНТСКАЯ СЛУЖБА ПОДДЕРЖКИ'); ?></h6>
                                    <div class="mt-3">
                                        <span><i class="far fa-envelope"></i> support@company-ellis.com</span>
                                    </div>
                                    <div class="mt-3">
                                        <span><i class="fab fa-vk mr-3"></i><a href="https://vk.com/ellis_company_ru"> https://vk.com/ellis_company_ru </a></span>
                                    </div>
                                    <div class="mt-2">
                                        <span><i class="far fa-clock mr-2"></i> <?php echo app('translator')->get('app.time_one'); ?> </span>
                                    </div>
                                </div>
                                <div class="contacts-col">
                                    <h6><?php echo app('translator')->get('app.TЕХНИЧЕСКАЯ ПОДДЕРЖКА'); ?></h6>
                                    <div class="mt-3">
                                        <span><i class="far fa-envelope"></i> support@company-ellis.com</span>
                                    </div>
                                    <div class="mt-2">
                                        <span><i class="far fa-clock mr-2"></i> <?php echo app('translator')->get('app.time_two'); ?> </span>
                                    </div>
                                </div>
                                <div class="contacts-col">
                                    <h6><?php echo app('translator')->get('app.АДРЕС'); ?></h6>
                                    <div class="mt-3">
                                        <span><i class="fas fa-address-card"></i> Company Number 13041936 </span>
                                    </div>
                                    <div class="mt-3">
                                        <span><i class="fas fa-map-marked-alt"></i> 7 RUSSELL'S WHARF FLATS HARROW ROAD LONDON UNITED KINGDOM W10 4RE </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-8 col-12 mb-5 pb-5 pt-5">
                            <div class="row mt-5 contact-cards">
                                <div class="col-md-4 col-12">
                                    <div class="contact card" id="contact-1">
                                        <div class="card-body">
                                            <div class="d-flex justify-content-center mt-5"><img class="w-50 h-50" src="/images/1photo.png">
                                            </div>
                                            <div class="mt-2"><h5 class="name text-center">Вячеслав Волков</h5>
                                                <p class="job text-center"><?php echo app('translator')->get('app.1_position'); ?></p></div>
                                            
                                            
                                            
                                            
                                            <div class="mt-3">
                                    <span>
                                        <i class="fab fa-vk mr-3"></i>
                                        <a href="https://vk.com/write439659170"> vk.com/ellis_company_ru</a>
                                    </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 col-12">
                                    <div class="contact card" id="contact-2">
                                        <div class="card-body">
                                            <div class="d-flex justify-content-center mt-5"><img class="w-50 h-50" src="/images/2photo.png">
                                            </div>
                                            <div class="mt-2"><h5 class="name text-center">Adam Bramer</h5>
                                                <p class="job text-center">Company Director Сооснователь и директор компании</p></div>
                                            
                                            
                                            
                                            
                                        </div>
                                    </div>
                                </div>



                                <div class="col-md-4 col-12">
                                    <div class="contact card selected" id="contact-3">
                                        <div class="card-body">
                                            <div class="d-flex justify-content-center mt-5">
                                                <img class="img-fluid w-50 h-50" src="/images/3photo.png">
                                            </div>
                                            <div class="mt-2"><h5 class="name text-center">Natan Shultz</h5>
                                                <p class="job text-center">Company Director Директор компании</p></div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-4 col-12">
                                    <div class="contact card selected" id="contact-4">
                                        <div class="card-body">
                                            <div class="d-flex justify-content-center mt-5">
                                                <img class="img-fluid w-50 h-50" src="/images/4photo.png">
                                            </div>
                                            <div class="mt-2"><h5 class="name text-center">Eddie Smith</h5>
                                                <p class="job text-center">Company Director Разработчик алгоритмов, акционер и директор компании</p></div>
                                        </div>
                                    </div>
                                </div>


                            </div>
                        </div>
                    </div>
                </div>


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
<div class="page-title-area">
    <div class="container">
        <div class="page-title-content"><h2><?php echo app('translator')->get('app.Контакты'); ?></h2>
            <ul>
                <li><a href="<?php echo e(route('home')); ?>"><?php echo app('translator')->get('app.Главная'); ?></a></li>
                <li><?php echo app('translator')->get('app.Контакты'); ?></li>
            </ul>
        </div>
    </div>
</div><!-- End Page Title Area -->

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.front_app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/maksa988/www/invest2/resources/views/pages/support.blade.php ENDPATH**/ ?>