<?php $__env->startSection('tittle', 'Lista de Clientes'); ?>
<?php $__env->startSection('content'); ?>
    <h1>Lista de Produtos</h1>
    <table class="table">
        <thead>
             <tr>
                <td>ID</td>
                <td>Nome</td>
                <td>Valor</td>
                <td>Estoque Disponível</td>
            </tr>
        </thead>
        <tbody>
            <?php $__currentLoopData = $produtos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $produto): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($produto->id); ?></td>
                    <td>
                        <a href="<?php echo e(route('produtos.show', $produto)); ?>">
                            <?php echo e($produto->nome); ?>

                        </a>
                    </td>
                    <td><?php echo e($produto->valor); ?></td>
                        td><?php echo e($produto->estoque); ?></td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/unialfa/Documents/laravel-php-aula4B/resources/views/produtos/index.blade.php ENDPATH**/ ?>