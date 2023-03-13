<div class="mobile-nav">
    <a href="<?php echo e(route('home')); ?>" class="logo">
        <img src="<?php echo e(asset('images/white-logo.png')); ?>" alt="Logo">
    </a>

    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="fas fa-bars"></span>
    </button>

    <div class="collapse navbar-collapse mobile-nav" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
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
        </ul>
    </div>
</div>
<?php /**PATH /Users/maksa988/www/invest3/resources/views/layouts/_mobile-nav.blade.php ENDPATH**/ ?>