<?php $__env->startSection('tittle', 'Editar Cliente'); ?>
<?php $__env->startSection('content'); ?>
    <h1>Novo Cliente</h1>
    <form action="<?php echo e(route('clients.update', $client)); ?>" method="POST">
        <?php echo csrf_field(); ?>
        <?php echo method_field('PUT'); ?> 
        <div class="mb-3">
            <label for="nome" class="form-label">Nome</label>
            <input type="text" name="nome" id="nome" class="form-control" placeholder="Digite o nome" value="<?php echo e($client['nome']); ?>">
        </div>

        <div class="mb-3">
            <label for="endereco" class="form-label">Endereço</label>
            <input type="text" name="endereco" id="endereco" class="form-control" placeholder="Digite o endereço" value="<?php echo e($client['endereco']); ?>">
        </div>

        <div class="mb-3">
            <label for="observacao" class="form-label">Observação</label>
            <textarea class="form-control" name="observacao" id="observacao" rows="3"><?php echo e($client['observacao']); ?></textarea>
        </div>

        <button class="btn btn-success" type="submit">Enviar</button>
        <a href="<?php echo e(route('clients.index')); ?>"></a>
    </form>    
<?php $__env->stopSection(); ?>
<?php echo $__env->make('app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/unialfa/Documents/laravel-php-aula4B/resources/views/clients/edit.blade.php ENDPATH**/ ?>