<?php $__env->startSection('title', 'Novo Estudante'); ?>
<?php $__env->startSection('content'); ?>
    <h1>Novo Estudante</h1>
    <form action="<?php echo e(route('estudantes.store')); ?>" method="POST">
        <?php echo csrf_field(); ?>
        <div class="mb-3">
            <label for="nome" class="form-label">Nome</label>
            <input type="text" name="nome" id="nome" class="form-control" placeholder="Digite o nome">
        </div>

        <div class="mb-3">
            <label for="cpf" class="form-label">CPF</label>
            <input type="number" name="cpf" id="cpf" class="form-control" placeholder="Digite o cpf">
        </div>

        <div class="mb-3">
            <label for="nascimento" class="form-label">Nascimento</label>
            <input type="date" class="form-control" name="nascimento" id="nascimento"></input>
        </div>

        <button class="btn btn-success" type="submit">Enviar</button>

    </form>    
<?php $__env->stopSection(); ?>
<?php echo $__env->make('app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/unialfa/Documents/laravel-php-aula4B/resources/views/estudantes/create.blade.php ENDPATH**/ ?>