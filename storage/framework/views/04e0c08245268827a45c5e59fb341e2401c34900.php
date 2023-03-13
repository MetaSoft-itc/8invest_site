<?php $__env->startSection('content'); ?>
<main class="page-content">
    <div class="page-content__content  news-list-page">


        <div class="about-page__bread-crumbs-wrap  page-content__bread-crumbs-wrap  g-page-wrap">
            <div class="bread-crumbs  g-content-wrap">
                <a href="/" class="bread-crumbs__link">Главная</a>
                <span class="bread-crumbs__link">Новости</span>
            </div>
        </div>

        <div class="news-list-page__content-wrap  g-page-wrap">
            <div class="news-list-page__content  g-content-wrap">
                <h1 class="news-list-page__title  page-content__title">Новости</h1>
                <div class="news-list-page__list">
                    <?php $__currentLoopData = $news; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <article class="news-list-page__prev-news prev-news fadeInUp">
                        <a href="<?php echo e(route('page.news.show', $item)); ?>" class="prev-news__img-wrap">
                            <img alt="" src="<?php echo e(asset($item->image_url)); ?>" class="prev-news__img">
                        </a>
                        <div class="prev-news__content">
                            <time class="prev-news__time"><?php echo e($item->published_at->format('d.m.Y')); ?></time>
                            <h3 class="prev-news__title"><a href="<?php echo e(route('page.news.show', $item)); ?>"><?php echo e($item->title); ?></a></h3>
                            <p class="prev-news__text"><?php echo e(Purify::clean(\Illuminate\Support\Str::limit($item->description, 500))); ?></p>
                        </div>
                    </article>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            </div>
        </div>
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
                                Кабинет<i class="bx bx-log-in-circle"></i>
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
        <div class="page-title-content"><h2><?php echo app('translator')->get('app.Новости'); ?></h2>
            <ul>
                <li><a href="<?php echo e(route('home')); ?>"><?php echo app('translator')->get('app.Главная'); ?></a></li>
                <li><?php echo app('translator')->get('app.Новости'); ?></li>
            </ul>
        </div>
    </div>
</div><!-- End Page Title Area --><!-- Strat News Area -->
<section class="news-area ptb-100">
    <div class="container">
        <div class="section-title"><span><?php echo app('translator')->get('app.Важные новости'); ?></span>
            <h2>Новости</h2></div>
        <div class="row">
            <?php $__currentLoopData = $news; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="col-lg-4 col-md-6">
                <div class="single-news">
                    <div class="blog-img text-center">
                        <a href="<?php echo e(route('page.news')); ?>">
                            <img src="<?php echo e(asset($item->image_url)); ?>" alt="Image" style="width: 350px;">
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
                        <p><?php echo $item->description; ?></p></div>
                </div>
            </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </div>
</section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.front_app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/maksa988/www/invest2/resources/views/pages/news.blade.php ENDPATH**/ ?>