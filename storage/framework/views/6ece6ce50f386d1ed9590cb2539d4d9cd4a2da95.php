

<?php $__env->startSection('content'); ?>
<div class="container m-flx-g ">
       <div class="m-cont-form-theme m-flx-g" >
            <h1>Cadastre sua pesquisa</h1>
            <?php if( Request::is('*/editar')): ?>
            <form action="/temas/aditado/<?php echo e($theme->id); ?>" method="post">
                <?php echo csrf_field(); ?>
                <div>
                    <label for="id">id tema</label>
                    <input type="number" name="id"  >
                </div>
                <div>
                    <label for="id-theme">id user</label>
                    <input type="number" name="user-id" value="$theme->user-id">
                </div>
                <div>
                    <label for="title">Título</label>
                    <input type="text" name="title" value="$theme->title">
                </div>
                <div>
                    <label for="title">Descrição</label>
                    <input type="text" name="description" value="$theme->description">
                </div>
                <button type="submit">Cadastrar</button>
            </form>
        <?php else: ?>
            <form action="<?php echo e(url('/temas/criarTema')); ?>" method="POST">
                <?php echo csrf_field(); ?>
                <div>
                    <label for="id">id tema</label>
                    <input type="number" name="id">
                </div>
                <div>
                    <label for="id-theme">id user</label>
                    <input type="number" name="user-id">
                </div>
                <div>
                    <label for="title">Título</label>
                    <input type="text" name="title">
                </div>
                <div>
                    <label for="title">Descrição</label>
                    <input id="m-inp-desc" type="text" name="description">
                </div>
                <div>
                    <label for="title">Opções</label>
                    <input type="text" name="">
                </div>
                <button id="m-btn-form" type="submit">Cadastrar</button>
            </form>
            <?php endif; ?>
       </div>
   </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\julia\Documents\GitHub\PHP projects\Nova pasta\Vote-sytem-in-php-Laravel-and-VueJs\resources\views/theme/formTheme.blade.php ENDPATH**/ ?>