<?php $__env->startSection('tittle', 'Detalhes do Estudante'); ?>
<?php $__env->startSection('content'); ?>
        <div class="card">
            <div class="card-header">
                Detalhes do estudante <?php echo e($estudante->nome); ?>

            </div>
            <div class="card-body">
                <p><strong>ID:</strong> <?php echo e($estudante->id); ?></p>
                <p><strong>Nome:</strong> <?php echo e($estudante->nome); ?></p>
                <p><strong>CPF:</strong> <?php echo e($estudante->cpf); ?></p>
                <p><strong>Nascimento:</strong> <?php echo e($estudante->nascimento); ?></p>
                <br>
                <a class="btn btn-success" href="<?php echo e(route('estudantes.index')); ?>">Voltar</a>
            </div>
        </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/unialfa/Documents/laravel-php-aula4B/resources/views/estudantes/show.blade.php ENDPATH**/ ?>