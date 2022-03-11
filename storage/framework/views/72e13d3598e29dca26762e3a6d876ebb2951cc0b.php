<!doctype html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

    <title>Signo - Sistema de votação</title>

    <!-- Scripts -->
    <script src="<?php echo e(mix('js/app.js')); ?>" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->

    <link rel="stylesheet" href="./assets/style/base/reset.css">
    <link rel="stylesheet" href="./assets/style/module/general.css">
    <link rel="stylesheet" href="./assets/style/theme/general-themes.css">
    <link rel="stylesheet" href="./assets/style/leyout/text.css">

</head>
<body>
    <div id="app">
        <div>
            <nav>
                <div class="container-navbar">
                    <div>
                        <li>Logo</li>
                    </div>
                    <?php if(auth()->guard()->guest()): ?>
                    <ul class="m-flx-g m-reg-log">
                        <?php if(Route::has('login')): ?>
                            <li class="nav-item">
                                <a class="nav-link" href="<?php echo e(route('login')); ?>"><?php echo e(__('Login')); ?></a>
                            </li>
                        <?php endif; ?>
                        <?php if(Route::has('register')): ?>
                            <li class="nav-item">
                                <a class="nav-link" href="<?php echo e(route('register')); ?>"><?php echo e(__('Register')); ?></a>
                            </li>
                    </ul>
                </div>
                    <?php endif; ?>
                    <?php else: ?>
                <div class="container-navbar">
                    <div class="m-my-itens-nav m-flx-g">
                        <a href="<?php echo e(url('/home')); ?>">Home</a>
                        <a href="<?php echo e(url('/temas/novoTema')); ?>">Novo tema</a>
                        <a href="<?php echo e(url('temas')); ?>">Dashboard</a>
                    </div>
                    <div >
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            <?php echo e(Auth::user()->name); ?>

                        </a>
                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="<?php echo e(route('logout')); ?>"
                                onclick="event.preventDefault();
                                                document.getElementById('logout-form').submit();">
                                <?php echo e(__('Logout')); ?>

                            </a>
                            <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" class="d-none">
                                <?php echo csrf_field(); ?>
                            </form>
                        </div>
                    </div>
                </div>
                    <?php endif; ?>
            </nav>
            <div>
                    <?php echo $__env->yieldContent('content' ); ?>
            </div>
        </div>
    </div>
    <script src="<?php echo e(mix('js/app.js')); ?>"></script>
</body>
</html>
<?php /**PATH /home/usuario/Documentos/Vote-sytem-in-php-Laravel-and-VueJs/resources/views///layouts/app.blade.php ENDPATH**/ ?>