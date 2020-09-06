
<?php $__env->startSection('content'); ?>
<link href="<?php echo e(asset('css/tree.css')); ?>" rel="stylesheet" type="text/css" >
<?php 
	function buildTree(array $elements, $parentId = 0) {
		$branch = array();
		foreach ($elements as $element) {
			if ($element['id_orang_tua'] == $parentId) {
				$children = buildTree($elements, $element['id_silsilah']);
				if ($children) {
					$element['children'] = $children;
				}
				$branch[] = $element;
			}
		}
		return $branch;
	}
	
	function printName($row){
		echo '<a href="#"';
		if($row['jenis_kel'] == 'L'){
			echo 'class="blue"';
		}else{
			echo 'class="red"';
		}
		echo '>'.$row['nama'].'</a>';
	}
	
	function printChild($tree){
		echo '<ul>';
		foreach($tree as $row){
			echo '<li>';
			if(array_key_exists('children', $row)){
				printName($row);
				printChild($row['children']);
			} else {
				printName($row);
			}
			echo '</li>';
		}
		echo '</ul>';
	}
	$wholeTree = buildTree($tree);
	echo '<h2>Silsilah lengkap keluarga</h2><hr>';
	echo '<div class="tree">';
	printChild($wholeTree);
	echo '</div>';
	
?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('tree.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH O:\Other\tes kerja\javan\misi 2\tree-crud\resources\views/tree/silsilah.blade.php ENDPATH**/ ?>