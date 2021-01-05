
<?php $__env->startSection('content'); ?>
<div class="row">
    <div class="col-lg-12">
        <?php if(session()->has('pesan')): ?>
            <div class="alert alert-success">
                <?php echo e(session()->get('pesan')); ?>

            </div>
        <?php endif; ?>
        <a href="<?php echo e(route('student.create')); ?>" class="btn btn-primary mb-2">Tambah</a>
        <div class="table-responsive">
            <table class="table table-hover">
                <tr>
                    <th>#</th>
                    <th>NIM</th>
                    <th>Name</th>
                    <th>Gender</th>
                    <th>Jurusan</th>
                    <th>Alamat</th>
                    <th>Aksi</th>
                </tr>
                <?php $__empty_1 = true; $__currentLoopData = $student; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $mahasiswa): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                <tr>
                    <td><?php echo e($loop->iteration); ?></td>
                    <td><?php echo e($mahasiswa->nim); ?></td>
                    <td><?php echo e($mahasiswa->name); ?></td>
                    <td><?php echo e($mahasiswa->gender); ?></td>
                    <td><?php echo e($mahasiswa->departement); ?></td>
                    <td><?php echo e($mahasiswa->address); ?></td>
                    <td>
                        <form action="<?php echo e(route('student.destroy',['id' => $mahasiswa->id])); ?>" method="post">
                            <?php echo method_field('DELETE'); ?>
                            <?php echo csrf_field(); ?>
                            <a href="<?php echo e(route('student.edit',['id' => $mahasiswa->id])); ?>" class="btn btn-info btn-sm">Edit</a>
                            <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
                        </form>
                    </td>
                </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                <tr>
                    <td class="text-center" colspan="7">Data tidak ada!</td>
                </tr>
                <?php endif; ?>

            </table>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('template.base', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\18104036_HELMI-APRIYANDA\practice_laravel\resources\views/student.blade.php ENDPATH**/ ?>