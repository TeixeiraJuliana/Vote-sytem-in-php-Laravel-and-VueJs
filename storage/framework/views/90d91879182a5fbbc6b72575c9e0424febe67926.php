
    <link rel="stylesheet" href="../assets/style/base/reset.css">
    <link rel="stylesheet" href="../assets/style/module/general.css">
    <link rel="stylesheet" href="../assets/style/theme/general-themes.css">
    <link rel="stylesheet" href="../assets/style/leyout/text.css">
    <?php $__env->startSection('content'); ?>
    <?php $__env->stopSection(); ?>
<?php if( Request::is('*/edit')): ?>
    <div class="container m-flx-g ">
        <div class="m-cont-form-theme m-flx-g" >
            <form action="/temas/edit/<?php echo e($theme->id); ?>" method="post">
            <h1>Atualize sua pesquisa</h1>
                <?php echo csrf_field(); ?>
                <div class="m-item-form">
                    <label for="title">Título</label>
                    <input type="text" name="title" value="$theme->title">
                </div>
                <div class="m-item-form">
                    <label for="title">Descrição</label>
                    <input type="textarea" name="description" value="$theme->description">
                </div>
                <button type="submit">Cadastrar</button>
            </form>
        </div>
    </div>
        <?php else: ?>
    <div class="container m-flx-g ">
        <div class="m-cont-form-theme m-flx-g" >
            <h1>Cadastre sua pesquisa</h1>
            <form action="<?php echo e(url('/temas/criarTema')); ?>" method="POST">
                <?php echo csrf_field(); ?>
                <div>
                    <label for="title">Título</label>
                    <input type="text" name="title">
                </div>
                <div>
                    <label for="title">Descrição</label>
                    <input id="m-inp-desc" type="textearea" name="description">
                </div>
                <div>
                    <label for="title">Opções</label>
                    <input type="text" name="">
                </div>
                <button class="btn btn-form" type="submit">Cadastrar</button>
            </form>
        </div>
    </div>
<?php endif; ?>

<?php /**PATH /home/usuario/Documentos/Vote-sytem-in-php-Laravel-and-VueJs/resources/views/theme/formTheme.blade.php ENDPATH**/ ?>