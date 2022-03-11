<?php $__env->startSection('content'); ?>
    <div class="container">
        <div id="m-theme-table">
            <h1>Concursos em andamento</h1>
            <div>
                <div id="m-table-theme-heading">
                    <div>Titulo</div>
                    <div>descrição</div>
                    <div>Data de criação</div>
                    <div>Data de finalização</div>
                    <div>Ações</div>
                </div>
            </div>
            <?php $__currentLoopData = $themes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tema): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div  id="m-theme-table-rows">
                <div  id="m-theme-table-row">
                    <div id="m-row-title"><?php echo e($tema->title); ?></div>
                    <div><?php echo e($tema->description); ?></div>
                    <div><?php echo e($tema->created_at); ?></div>
                    <div><?php echo e($tema->created_at); ?></div>
                    <div id="m-icons-up-del">

                        <div>
                            <a href="temas/edit/<?php echo e($tema->id); ?>"><img src="./assets/img/update.png" alt=""></a>
                        </div>
                        <div>
                            <form action="temas/<?php echo e($tema->id); ?>" method="post">
                                <?php echo csrf_field(); ?>
                                <?php echo method_field('delete'); ?>
                                <button type="submit"><img src="./assets/img/trash.png" alt=""></button>
                            </form>
                        </div>
                        <div>
                            <a href="temas/edit/<?php echo e($tema->id); ?>"><img src="./assets/img/options.png" alt=""></a>
                        </div>
                    </div>
                </div>
            </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </div>
<?php $__env->stopSection(); ?>








<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\julia\Documents\GitHub\PHP projects\Testes\Vote-sytem-in-php-Laravel-and-VueJs\resources\views/theme/themes.blade.php ENDPATH**/ ?>