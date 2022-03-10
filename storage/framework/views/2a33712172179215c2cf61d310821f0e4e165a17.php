

<?php $__env->startSection('content'); ?>
<div class="container">

<div>
    <div class="m-dash-cont  m-flx-g">
        <div id="m-home-left">
        <h1>Pesquisas mais acessadas</h1>
        </div>
        <div class="m-home-right m-flx-g" >
            <div id="m-home-rec">
                <div class="card-header"><?php echo e(__('Dashboard')); ?></div>
            </div>
            <div id="m-home-op" >
                <h1>Seja Bem vindo</h1>
                <a href="<?php echo e(url('temas')); ?>">Temas de votações</a>
                <a href="<?php echo e(url('/temas/novoTema')); ?>">Criar Tema</a>
            </div>
        </div>
    </div>
</div>
    <Footer></Footer>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\julia\Documents\GitHub\PHP projects\Nova pasta\Vote-sytem-in-php-Laravel-and-VueJs\resources\views/home.blade.php ENDPATH**/ ?>