
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="qskmmperS84TecZCbwIbN7guTNE0f2P79wXbhtms">

    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="<?php echo e(asset('css/admin.css')); ?>" rel="stylesheet">

</head>

<body>

<div class="d-flex" id="app">

    <!-- Sidebar -->
    <div class="bg-light border-right" id="sidebar-wrapper">
        <div class="sidebar-heading">Admin</div>
        <div class="list-group list-group-flush">
            <a href="<?php echo e(route('admin.dashboard')); ?>" class="list-group-item list-group-item-action bg-light">Главная</a>
            <a href="<?php echo e(route('admin.users.index')); ?>" class="list-group-item list-group-item-action bg-light">Пользователи</a>
            <a href="<?php echo e(route('admin.promocodes.index')); ?>" class="list-group-item list-group-item-action bg-light">Промокоды</a>
            <a href="<?php echo e(route('admin.news.index')); ?>" class="list-group-item list-group-item-action bg-light">Новости</a>
        </div>
    </div>
    <!-- /#sidebar-wrapper -->

    <!-- Page Content -->
    <div id="page-content-wrapper">

        <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom">
            <button class="btn btn-primary" id="menu-toggle">Toggle Menu</button>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">


                <!-- Right Side Of Navbar -->
                <ul class="navbar-nav ml-auto">
                    <!-- Authentication Links -->
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <?php echo e(auth()->user()->name); ?> <span class="caret"></span>
                        </a>

                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="<?php echo e(route('logout')); ?>"
                               onclick="event.preventDefault();
                                     document.getElementById('logout-form').submit();">
                                Logout
                            </a>

                            <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" style="display: none;">
                                <?php echo csrf_field(); ?>
                            </form>
                        </div>
                    </li>
                </ul>
            </div>
        </nav>

        <?php echo $__env->yieldContent('content'); ?>
    </div>
    <!-- /#page-content-wrapper -->

</div>
<!-- /#wrapper -->

<!-- Scripts -->

<script src="https://kit.fontawesome.com/61cd522d8e.js" crossorigin="anonymous"></script>
<script src="https://cdn.ckeditor.com/ckeditor5/24.0.0/classic/ckeditor.js"></script>
<script src="<?php echo e(asset('js/admin.js')); ?>" defer></script>
<script>
    ClassicEditor
        .create(document.querySelector( '.editor' ), {
            heading: {
                options: [
                    { model: 'paragraph', title: 'Paragraph', class: 'ck-heading_paragraph' },
                    { model: 'heading1', view: 'h1', title: 'Heading 1', class: 'ck-heading_heading1' },
                    { model: 'heading2', view: 'h2', title: 'Heading 2', class: 'ck-heading_heading2' },
                    { model: 'heading3', view: 'h3', title: 'Heading 3', class: 'ck-heading_heading3' },
                    { model: 'heading4', view: 'h4', title: 'Heading 4', class: 'ck-heading_heading4' },
                    { model: 'heading5', view: 'h5', title: 'Heading 5', class: 'ck-heading_heading5' }
                ]
            },
            ckfinder: {
                uploadUrl: '<?php echo e(route('image.upload')); ?>'
            },
        })
        .catch( error => {
            console.error( error );
        });
</script>
</body>

</html>
<?php /**PATH /var/www/invest/resources/views/admin/layout.blade.php ENDPATH**/ ?>