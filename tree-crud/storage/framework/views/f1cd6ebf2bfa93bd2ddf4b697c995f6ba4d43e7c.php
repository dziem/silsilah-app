<!DOCTYPE html>
<html>
	<head>
		<title>Silsilah Keluarga</title>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	</head>

	<body>
		<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
		  <a class="navbar-brand" href="/">Silsilah Keluarga</a>
		  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		  </button>
		  <div class="collapse navbar-collapse" id="navbarNav">
			<ul class="navbar-nav">
			  <li class="nav-item <?php echo e(Request::is('/') ? 'active' : ''); ?>">
				<a class="nav-link" href="/">Silsilah keluarga</a>
			  </li>
			  <li class="nav-item <?php echo e(Request::is('tree','tree/*') ? 'active' : ''); ?>">
				<a class="nav-link" href="<?php echo e(route('tree.index')); ?>">Daftar anggota</a>
			  </li>
			</ul>
		  </div>
		</nav>
		<div class="container pt-3">
			<?php echo $__env->yieldContent('content'); ?>
		</div>
		<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
		<script>
			$(".alert").alert();
			window.setTimeout(function() { $(".alert").alert('close'); }, 2000);
		</script>
	</body>
</html><?php /**PATH O:\Other\tes kerja\javan\misi 2\tree-crud\resources\views/tree/layout.blade.php ENDPATH**/ ?>