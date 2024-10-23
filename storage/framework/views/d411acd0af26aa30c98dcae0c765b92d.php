<?php $__env->startSection('tittle', 'Lista de Clientes'); ?>
<?php $__env->startSection('content'); ?>
    
        <h1>Lista de Clientes</h1>
        <table class="table">
            <thead>
                <tr>
                    <td>ID</td>
                    <td>Nome</td>
                    <td>Endereço</td>
                    <td>Ações</td>
                </tr>
            </thead>
            <tbody>
                <?php $__currentLoopData = $clients; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $client): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td><?php echo e($client->id); ?></td>
                        <td>
                            <a href="<?php echo e(route('clients.show', $client)); ?>">
                                <?php echo e($client->nome); ?>

                            </a>
                        </td>
                        <td><?php echo e($client->endereco); ?></td>
                        <td>
                            <a href="<?php echo e(route('clients.edit', $client)); ?>" class="btn btn-primary">Atualizar</a>
                            <form action="<?php echo e(route('clients.destroy', $client)); ?>" method="POST">
                                <?php echo csrf_field(); ?>
                                <?php echo method_field('DELETE'); ?>
                                <button class="btn btn-danger" type="submit" onclick="return confirm('Tem certeza que deseja apagar?')">Apagar</button>
                            </form>
                        </td>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>

        <a href="<?php echo e(route('clients.create')); ?>" class="btn btn-success">Novo Cliente</a>
        
<?php $__env->stopSection(); ?>
<?php echo $__env->make('app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/unialfa/Documents/laravel-php-aula4B/resources/views/clients/index.blade.php ENDPATH**/ ?>