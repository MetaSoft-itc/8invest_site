<?php $__env->startSection('content'); ?>
    <main class="flex flex-column flex-grow trans-margin-left trans-0-3 news-page">
        <div data-v-6a617831="">
            <div data-v-6a617831="" class="box">
                <div data-v-383f5412="" data-v-6a617831="" class="grid grid-gap-3 grid-gap-4--lg margin-y-4 padding-left-0 no-list relative z-index-1">
                    <div data-v-383f5412="" class=""></div>

                    <div data-v-f6930a7e="" data-v-6a617831="" class="flex flex-row--md flex-column padding-bottom-3 grid-column-12" data-v-383f5412="">
                        <div data-v-f6930a7e="" class="news-card-horizontal__content flex flex-column flex-grow margin-right-3 justify-between">
                            <div data-v-f6930a7e="" class="news-date flex items-center trans-transform trans-0-3 margin-top-3 margin-bottom-2 font-xs color-gray font-medium text-upper">
                                <span data-v-f6930a7e=""><?php echo e($news->published_at->format('Y-m-d')); ?></span><!----></div>
                            <div data-v-f6930a7e="" class="news-title trans-transform trans-0-3 margin-bottom-2 text-tight font-medium color-default">
                                <?php echo e($news->title); ?>

                            </div>
                            <div data-v-f6930a7e="" class="news-content trans-transform trans-0-3 color-gray">
                                <?php echo $news->description; ?>

                            </div>
                        </div>
                    </div>

                    <div class="text-center">
                        <img style="max-width: 500px; max-height: 500px;" src="<?php echo e(asset($news->image_url)); ?>" alt="<?php echo e($news->title); ?>">
                    </div>
                </div>
            </div>
        </div>
    </main>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('old-content'); ?>
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

<?php echo $__env->make('layouts.front_app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/invest/resources/views/pages/one_news.blade.php ENDPATH**/ ?>