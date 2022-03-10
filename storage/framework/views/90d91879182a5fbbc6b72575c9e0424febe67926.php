


   <div class="container">
       <div id="m-cont-form-theme" >
            <h1>Formulário</h1>
            <Navbar/>
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
                    <label for="title">Título</label>
                    <input type="text" name="description">
                </div>
                <button type="submit">Cadastrar</button>
            </form>
            <?php endif; ?>
       </div>
   </div>


<?php /**PATH /home/usuario/Documentos/Vote-sytem-in-php-Laravel-and-VueJs/resources/views/theme/formTheme.blade.php ENDPATH**/ ?>