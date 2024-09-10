<?php $__env->startSection('content'); ?>
<div class="container">
    <h1>Adicionar Aluno</h1>
    <form action="<?php echo e(route('alunos.store')); ?>" method="POST">
        <?php echo csrf_field(); ?>
        <div class="form-group">
            <label for="nome">Nome</label>
            <input type="text" class="form-control" id="nome" name="nome" value="<?php echo e(old('nome')); ?>" required>
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" class="form-control" id="email" name="email" value="<?php echo e(old('email')); ?>" required>
        </div>
        <div class="form-group">
            <label for="matricula">Matrícula</label>
            <input type="text" class="form-control" id="matricula" name="matricula" value="<?php echo e(old('matricula')); ?>" required>
        </div>
        <button type="submit" class="btn btn-primary">Salvar</button>
        <a href="<?php echo e(route('alunos.index')); ?>" class="btn btn-secondary">Voltar</a>
    </form>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/alunoifpe/laravel-test/curso_web_2/laravel-crud-01-wsl1/resources/views/alunos/create.blade.php ENDPATH**/ ?>