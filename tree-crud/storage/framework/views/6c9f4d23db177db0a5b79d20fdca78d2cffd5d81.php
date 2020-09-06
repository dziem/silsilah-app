
<?php $__env->startSection('content'); ?>
    <div class="row">
        <div class="col-lg-12 margin-tb">
			<h2>Daftar anggota keluarga</h2>
			<hr>
			<a class="btn btn-success mb-3" href="<?php echo e(route('tree.create')); ?>">Tambah anggota keluarga</a>
        </div>
    </div>  

    <?php if($message = Session::get('success')): ?>
        <div class="alert alert-success" onclick="this.remove()">
            <p><?php echo e($message); ?></p>
        </div>
    <?php endif; ?>
    <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Jenis Kelamin</th>
            <th>Orang Tua</th>
            <th width="280px">Operasi</th>
        </tr>
        <?php $__currentLoopData = $tree; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <td><?php echo e(++$i); ?></td>
            <td><?php echo e($row->nama); ?></td>
			<?php if($row->jenis_kel === 'L'): ?>
				<td>Laki-laki</td>
			<?php else: ?>
				<td>Perempuan</td>
			<?php endif; ?>
            <td><?php echo e($row->orang_tua); ?></td>
            <td>
                <form action="<?php echo e(route('tree.destroy',$row->id_silsilah)); ?>" method="POST">
                    <!--<a class="btn btn-info" href="<?php echo e(route('tree.show',$row->id_silsilah)); ?>">Detail</a>-->
                    <a class="btn btn-primary" href="<?php echo e(route('tree.edit',$row->id_silsilah)); ?>">Ubah</a>
                    <?php echo csrf_field(); ?>
                    <?php echo method_field('DELETE'); ?>
                    <button type="submit" class="btn btn-danger">Hapus</button>
                </form>
            </td>
        </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </table>
    <?php echo $tree->links(); ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('tree.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH O:\Other\tes kerja\javan\misi 2\tree-crud\resources\views/tree/index.blade.php ENDPATH**/ ?>