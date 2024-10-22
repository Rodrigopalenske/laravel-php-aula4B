<?php $__env->startSection('tittle', 'Lista de Estudantes'); ?>
<?php $__env->startSection('content'); ?>
    
        <h1>Lista de Estudantes</h1>
        <table class="table">
            <thead>
                <tr>
                    <td>ID</td>
                    <td>ID-Sala</td>
                    <td>Nome</td>
                    <td>cpf</td>
                    <td>nascimento</td>
                    
                </tr>
            </thead>
            <tbody>
                <?php $__currentLoopData = $estudantes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $estudante): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td><?php echo e($estudante->id); ?></td>
                        <td>teste</td>
                        <td>
                            <a href="<?php echo e(route('estudantes.show', $estudante)); ?>">
                                <?php echo e($estudante->nome); ?>

                            </a>
                        </td>
                        <td><?php echo e($estudante->cpf); ?></td>
                        <td><?php echo e($estudante->nascimento); ?></td>
                        <td>
                            <a href="<?php echo e(route('estudantes.edit', $estudante['id'])); ?>">Editar</a>
                        </td>
                        <td>
                            <a href="<?php echo e(route('estudantes.destroy', $estudante['id'])); ?>">Excluir</a>
                        </td>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>

        <a href="<?php echo e(route('estudantes.create')); ?>" class="btn btn-success">Novo estudante</a>
        
<?php $__env->stopSection(); ?>
<?php echo $__env->make('app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/unialfa/Documents/laravel-php-aula4B/resources/views/estudantes/index.blade.php ENDPATH**/ ?>