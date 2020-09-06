

<?php $__env->startSection('content'); ?>
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Keluarga <?php echo e($tree->nama); ?></h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="<?php echo e(route('tree.index')); ?>">Kembali</a>
            </div>
        </div>
    </div>
   
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <h3>Orang Tua</h3>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <h3>Saudara Kandung</h3>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('tree.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH O:\Other\tes kerja\javan\misi 2\tree-crud\resources\views/tree/show.blade.php ENDPATH**/ ?>