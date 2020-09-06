
<?php $__env->startSection('content'); ?>
<div class="row">
    <div class="col-lg-12">
		<h2>Ubah data keluarga</h2>
		<hr>
		<a class="btn btn-primary mb-3" href="<?php echo e(route('tree.index')); ?>">Kembali</a>
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

<form action="<?php echo e(route('tree.update', $tree->id_silsilah)); ?>" method="POST">
    <?php echo csrf_field(); ?>
	<?php echo method_field('PUT'); ?>
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Nama:</strong>
                <input type="text" name="nama" class="form-control" placeholder="Nama" value="<?php echo e($tree->nama); ?>">
            </div>
        </div>
		<div class="col-xs-12 col-sm-12 col-md-12">
			<div class="form-group">
				<p><strong>Jenis Kelamin:</strong></p>
				<div class="form-check form-check-inline">
					<input class="form-check-input" type="radio" name="jenis_kel" id="laki" value="L" <?php echo e(($tree->jenis_kel=="L")? "checked" : ""); ?>>
					<label class="form-check-label" for="laki">Laki-laki</label>
				</div>
				<div class="form-check form-check-inline">
					<input class="form-check-input" type="radio" name="jenis_kel" id="pere" value="P" <?php echo e(($tree->jenis_kel=="P")? "checked" : ""); ?>>
					<label class="form-check-label" for="pere">Perempuan</label>
				</div>
			</div>
		</div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Orang Tua:</strong>
                <select class="custom-select" name="id_orang_tua">
					<option>Pilih orang tua</option>
					<?php $__currentLoopData = $trees; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
						<?php if($row->id_silsilah != $tree->id_silsilah): ?>
							<option value="<?php echo e($row->id_silsilah); ?>" <?php echo e(($tree->id_orang_tua==$row->id_silsilah)? "selected" : ""); ?>><?php echo e($row->nama); ?></option>
						<?php endif; ?>
					<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
				</select>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
            <button type="submit" class="btn btn-primary">Ubah</button>
        </div>
    </div>
</form>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('tree.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH O:\Other\tes kerja\javan\misi 2\tree-crud\resources\views/tree/edit.blade.php ENDPATH**/ ?>