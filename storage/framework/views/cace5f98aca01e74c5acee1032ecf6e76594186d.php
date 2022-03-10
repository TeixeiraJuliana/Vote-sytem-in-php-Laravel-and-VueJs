<?php $__env->startSection('content'); ?>
    <h1>Formulário</h1>
    <?php if( Request::is('*/edit')): ?>
    <form action="<?php echo e(url('/temas/add')); ?>" method="POST">
        <?php echo csrf_field(); ?>
        <div>
            <label for="id">id tema</label>
            <input type="number" name="id"  >
        </div>
        <div>
            <label for="id-theme">id user</label>
            <input type="number" name="user-id" value="$->user-id">
        </div>
        <div>
            <label for="title">Título</label>
            <input type="text" name="title" value="$addTheme->title">
        </div>
        <div>
            <label for="title">Título</label>
            <input type="text" name="description" value="$addTheme->description">
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
            <label for="title">Título</label>
            <input type="text" name="description">
        </div>
        <button type="submit">Cadastrar</button>
    </form>
    <?php endif; ?>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\julia\Documents\GitHub\PHP projects\Testes\Vote-sytem-in-php-Laravel-and-VueJs\resources\views/theme/formTheme.blade.php ENDPATH**/ ?>