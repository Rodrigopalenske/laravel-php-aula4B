<?php $__env->startSection('tittle', 'Detalhes do Cliente'); ?>
<?php $__env->startSection('content'); ?>
        <div class="card">
            <div class="card-header">
                Detalhes do cliente <?php echo e($client->nome); ?>

            </div>
            <div class="card-body">
                <p><strong>ID:</strong> <?php echo e($client->id); ?></p>
                <p><strong>Nome:</strong> <?php echo e($client->nome); ?></p>
                <p><strong>Endereço:</strong> <?php echo e($client->endereco); ?></p>
                <p><strong>Observação:</strong> <?php echo e($client->descricao); ?></p>
                <br>
                <a class="btn btn-success" href="<?php echo e(route('clients.index')); ?>">Voltar</a>
            </div>
        </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/unialfa/Documents/laravel-php-aula4B/resources/views/clients/show.blade.php ENDPATH**/ ?>