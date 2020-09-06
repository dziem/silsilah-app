
<?php $__env->startSection('content'); ?>
<div class="row">
    <div class="col-lg-12">
		<h2>Tambah data keluarga baru</h2>
		<hr>
		<a class="btn btn-primary mb-3" href="<?php echo e(route('tree.index')); ?>"> Kembali</a>
    </div>
</div>

<?php if($errors->any()): ?>
    <div class="alert alert-danger">
        <strong>Whoops!</strong> Terdapat kesalahan input.<br><br>
        <ul>
            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <li><?php echo e($error); ?></li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </ul>
    </div>
<?php endif; ?>

<form action="<?php echo e(route('tree.store')); ?>" method="POST">
    <?php echo csrf_field(); ?>
     <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Nama:</strong>
                <input type="text" name="nama" class="form-control" placeholder="Nama">
            </div>
        </div>
		<div class="col-xs-12 col-sm-12 col-md-12">
			<div class="form-group">
				<p><strong>Jenis Kelamin:</strong></p>
				<div class="form-check form-check-inline">
					<input class="form-check-input" type="radio" name="jenis_kel" id="laki" value="L">
					<label class="form-check-label" for="laki">Laki-laki</label>
				</div>
				<div class="form-check form-check-inline">
					<input class="form-check-input" type="radio" name="jenis_kel" id="pere" value="P">
					<label class="form-check-label" for="pere">Perempuan</label>
				</div>
			</div>
		</div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Orang Tua:</strong>
                <select class="custom-select" name="id_orang_tua" required>
					<option selected disabled>Pilih orang tua</option>
					<option value="">Paling tua</option>
					<?php $__currentLoopData = $tree; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
						<option value="<?php echo e($row->id_silsilah); ?>"><?php echo e($row->nama); ?></option>
					<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
				</select>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
            <button type="submit" class="btn btn-primary">Tambah</button>
        </div>
    </div>
</form>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('tree.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH O:\Other\tes kerja\javan\misi 2\tree-crud\resources\views/tree/create.blade.php ENDPATH**/ ?>