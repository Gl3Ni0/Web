<?php $__env->startSection('content'); ?>
<div class="container">
    <h1>Lista de Alunos</h1>
    <a href="<?php echo e(route('alunos.create')); ?>" class="btn btn-primary">Adicionar Aluno</a>
    <table class="table mt-4">
        <thead>
            <tr>
                <th>Nome</th>
                <th>Email</th>
                <th>Matrícula</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            <?php $__currentLoopData = $alunos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $aluno): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($aluno->nome); ?></td>
                    <td><?php echo e($aluno->email); ?></td>
                    <td><?php echo e($aluno->matricula); ?></td>
                    <td>
                        <a href="<?php echo e(route('alunos.show', $aluno->id)); ?>" class="btn btn-info">Ver</a>
                        <a href="<?php echo e(route('alunos.edit', $aluno->id)); ?>" class="btn btn-warning">Editar</a>
                        <form action="<?php echo e(route('alunos.destroy', $aluno->id)); ?>" method="POST" style="display:inline;">
                            <?php echo csrf_field(); ?>
                            <?php echo method_field('DELETE'); ?>
                            <button type="submit" class="btn btn-danger">Excluir</button>
                        </form>
                    </td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/alunoifpe/laravel-test/curso_web_2/laravel-crud-01-wsl1/resources/views/alunos/index.blade.php ENDPATH**/ ?>