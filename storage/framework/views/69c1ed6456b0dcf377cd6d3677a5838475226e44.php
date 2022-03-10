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
                <div class="container-navbar m-flx-g">
                    <div>
                        <div class="m-l-nav">
                            <a class="navbar-brand" href="<?php echo e(url('/')); ?>">

                            </a>
                        </div>
                        <div class="m-m-nav-"> <!--MEIO -->
                            <div class="m-navbar-midle collapse navbar-collapse" id="navbarSupportedContent">
                                <!--Left Side Of Navbar -->
                                <ul class="navbar-nav me-auto">
                                    <ul class="navbar-nav me-auto">
                                        <Navbar></Navbar>
                                        <a href="<?php echo e(url('/temas/novoTema')); ?>">Criar Tema</a>
                                    </ul>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="m-r-nav"> <!--FIM-->
                        <!-- Right Side Of Navbar -->
                        <div>
                            <ul class="m-flx-g ">
                                <!-- Authentication Links -->
                                <?php if(auth()->guard()->guest()): ?>
                                    <?php if(Route::has('login')): ?>

                                        <li class="nav-item">
                                            <a class="nav-link" href="<?php echo e(route('login')); ?>"><?php echo e(__('Login')); ?></a>
                                        </li>
                                    <?php endif; ?>

                                    <?php if(Route::has('register')): ?>
                                        <li class="nav-item">
                                            <a class="nav-link" href="<?php echo e(route('register')); ?>"><?php echo e(__('Register')); ?></a>
                                        </li>
                                    <?php endif; ?>
                                <?php else: ?>
                                    <li class="nav-item dropdown">
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
                                    </li>
                                <?php endif; ?>
                            </ul>
                        </div>
                    </div>
                </div>
            </nav>
            <main class="py-4">
                <?php echo $__env->yieldContent('content' ); ?>
            </main>
        </div>
    </div>
    <script src="<?php echo e(mix('js/app.js')); ?>"></script>
</body>
</html>
<?php /**PATH C:\Users\julia\Documents\GitHub\PHP projects\Testes\Vote-sytem-in-php-Laravel-and-VueJs\resources\views/layouts/app.blade.php ENDPATH**/ ?>