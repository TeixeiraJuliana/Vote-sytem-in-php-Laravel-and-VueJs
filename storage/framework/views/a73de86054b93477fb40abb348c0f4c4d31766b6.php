<?php $__env->startSection('content'); ?>
<div class="container">
<div>
    <div class="m-dash-cont  m-flx-g">
        <div id="m-home-left">
            <h1>Seja Bem vindo</h1>
        </div>
        <div class="m-home-right m-flx-g" >
            <div id="m-home-rec">
                <h1 class="card-header"><?php echo e(__('Dashboard')); ?></h1>
            </div>
            <div id="m-home-op" >
                <h1>Pesquisas mais acessadas</h1>
                <a href="<?php echo e(url('/theme/teste')); ?>">Home</a>
            </div>
        </div>
    </div>
    <link rel="stylesheet" href="../assets/style/module/general.css">
</div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/usuario/Documentos/Vote-sytem-in-php-Laravel-and-VueJs/resources/views/home.blade.php ENDPATH**/ ?>