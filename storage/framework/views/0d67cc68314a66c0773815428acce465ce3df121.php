<?php $__env->startSection('content'); ?>
<main class="page-content">
    <div class="page-content__content  news-page">



        <div class="about-page__bread-crumbs-wrap  page-content__bread-crumbs-wrap  g-page-wrap">
            <div class="bread-crumbs  g-content-wrap">
                <a href="/" class="bread-crumbs__link">Главная</a>
                <a href="<?php echo e(route('page.news')); ?>" class="bread-crumbs__link">Новости</a>
                <span class="bread-crumbs__link"><?php echo e($news->title); ?></span>
            </div>
        </div>


        <section class="news-page__content-wrap g-page-wrap fadeInUp" data-show-animation="fadeInUp">
            <div class="news-page__content  g-content-wrap">
                <time class="news-page__time"><?php echo e($news->published_at->format('d.m.Y')); ?></time>
                <h1 class="news-page__title"><?php echo e($news->title); ?></h1>
                <div class="news-page__text  text-block">

                    <p>
                        <?php echo str_replace('ellis-company-ru.com', 'company-ellis.com', $news->description); ?>

                    </p>
                </div>
            </div>
        </section>
    </div>
</main>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.front_app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/maksa988/www/invest3/resources/views/pages/one_news.blade.php ENDPATH**/ ?>