<?php $__env->startSection('title', 'Editar Estudante'); ?>
<?php $__env->startSection('content'); ?>
    <h1>Editar Estudante</h1>
    <form action="<?php echo e(route('estudantes.edit', $estudante['id'])); ?>" method="POST">
        <?php echo csrf_field(); ?>
        <div class="mb-3">
            <label for="nome" class="form-label">Nome</label>
            <input type="text" name="nome" id="nome" class="form-control" value="<?php echo e($estudante['nome']); ?>" placeholder="Digite seu nome">
        </div>

        <div class="mb-3">
            <label for="cpf" class="form-label">CPF</label>
            <input type="number" name="cpf" id="cpf" class="form-control" value="<?php echo e($estudante['cpf']); ?>" placeholder="Digite seu CPF">
        </div>

        <div class="mb-3">
            <label for="nascimento" class="form-label">Nascimento</label>
            <input type="date" class="form-control" name="nascimento" id="nascimento" value="<?php echo e($estudante['nascimento']); ?>"></input>
        </div>

        <button class="btn btn-success" type="submit">Salvar</button>

    </form>    
<?php $__env->stopSection(); ?>
<?php echo $__env->make('app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/unialfa/Documents/laravel-php-aula4B/resources/views/estudantes/edit.blade.php ENDPATH**/ ?>