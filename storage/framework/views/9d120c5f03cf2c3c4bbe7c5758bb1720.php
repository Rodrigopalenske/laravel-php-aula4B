<?php $__env->startSection('title', 'Novo Cliente'); ?>
<?php $__env->startSection('content'); ?>
    <h1>Novo Cliente</h1>
    <form action="<?php echo e(route('clients.store')); ?>" method="POST">
        <?php echo csrf_field(); ?>
        <div class="mb-3">
            <label for="nome" class="form-label">Nome</label>
            <input type="text" name="nome" id="nome" class="form-control" placeholder="Digite o nome">
        </div>

        <div class="mb-3">
            <label for="endereco" class="form-label">Endereço</label>
            <input type="text" name="endereco" id="endereco" class="form-control" placeholder="Digite o endereço">
        </div>

        <div class="mb-3">
            <label for="observacao" class="form-label">Observação</label>
            <textarea class="form-control" name="observacao" id="observacao" rows="3"></textarea>
        </div>

        <button class="btn btn-success" type="submit">Enviar</button>

    </form>    
<?php $__env->stopSection(); ?>
<?php echo $__env->make('app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/unialfa/Documents/laravel-php-aula4B/resources/views/clients/create.blade.php ENDPATH**/ ?>