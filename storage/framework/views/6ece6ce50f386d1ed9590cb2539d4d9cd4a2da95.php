<?php $__env->startSection('content'); ?>
<?php if( Request::is('*/edit')): ?>
    <div class="container m-flx-g ">
        <div class="m-cont-form-theme m-flx-g" >
            <h1>Cadastre sua pesquisa</h1>
            <form action="/temas/edit/<?php echo e($theme->id); ?>" method="post">
                <?php echo csrf_field(); ?>
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
        </div>
    </div>
        <?php else: ?>
    <div class="container m-flx-g ">
        <div class="m-cont-form-theme m-flx-g" >
        <form action="<?php echo e(url('/temas/criarTema')); ?>" method="POST">
            <?php echo csrf_field(); ?>
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
    </div>
</div>
<?php endif; ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\julia\Documents\GitHub\PHP projects\Nova pasta\Vote-sytem-in-php-Laravel-and-VueJs\resources\views/theme/formTheme.blade.php ENDPATH**/ ?>