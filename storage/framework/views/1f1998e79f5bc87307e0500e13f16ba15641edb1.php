<div class="container m-flx-g ">
    <div class="m-cont-form-theme m-flx-g" >
        <h1>Cadastre sua pesquisa</h1>
        <form action="/temas/edit/<?php echo e($theme->id); ?>" method="put">
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
<?php /**PATH C:\Users\julia\Documents\GitHub\PHP projects\Nova pasta\Vote-sytem-in-php-Laravel-and-VueJs\resources\views/theme/formThemeEdit.blade.php ENDPATH**/ ?>