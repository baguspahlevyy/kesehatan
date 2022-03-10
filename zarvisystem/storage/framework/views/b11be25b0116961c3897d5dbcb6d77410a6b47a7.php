<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>PT. Indomarco Prismatama</title>

	<!-- Global stylesheets -->
	<link href="<?php echo e(asset('fonts.googleapis.com/css1381.css?family=Roboto:400,300,100,500,700,900')); ?>" rel="stylesheet" type="text/css">
	<link href="<?php echo e(asset('global_assets/css/icons/icomoon/styles.css')); ?>" rel="stylesheet" type="text/css">
	<link href="<?php echo e(asset('assets/css/bootstrap.min.css')); ?>" rel="stylesheet" type="text/css">
	<link href="<?php echo e(asset('assets/css/bootstrap_limitless.min.css')); ?>" rel="stylesheet" type="text/css">
	<link href="<?php echo e(asset('assets/css/layout.min.css')); ?>" rel="stylesheet" type="text/css">
	<link href="<?php echo e(asset('assets/css/components.min.css')); ?>" rel="stylesheet" type="text/css">
	<link href="<?php echo e(asset('assets/css/colors.min.css')); ?>" rel="stylesheet" type="text/css">
	<!-- /global stylesheets -->
	  <!-- Core JS files -->
	  <script src="<?php echo e(asset('/global_assets/js/main/jquery.min.js')); ?>"></script>
	  <script src="<?php echo e(asset('/global_assets/js/main/bootstrap.bundle.min.js')); ?>"></script>
	  <script src="<?php echo e(asset('/global_assets/js/plugins/loaders/blockui.min.js')); ?>"></script>
	  <script src="<?php echo e(asset('/global_assets/js/plugins/ui/ripple.min.js')); ?>"></script>
	  <!-- /core JS files -->
      <style>
          .sidebar-user-material-body{background:url('<?php echo e(url('global_assets/images/backgrounds/user_bg4.jpg')); ?>') center center no-repeat;background-size:cover}
      </style>


	  <?php echo $__env->yieldContent('styles'); ?>

</head>

 <body class="hold-transition skin-purple sidebar-collapse sidebar-xs">

       <?php echo $__env->make('admin.partials.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

      <!-- Page content -->
	<div class="page-content">
    
         
        <!-- Main content -->
		<div class="content-wrapper">

			 
			
			<!-- Content area -->
			<div class="content">
				<?php echo $__env->yieldContent('content'); ?>

			</div>
			<!-- /Content area -->
			<?php echo $__env->make('admin.partials.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
			
		</div>
		<!-- /content-wrapper -->


    </div><!-- /.Page content -->



	   <?php echo $__env->yieldContent('scripts'); ?>
			   <!-- Theme JS files -->
	   <script src="<?php echo e(asset('assets/js/app.js')); ?>"></script>
	   <!-- /theme JS files -->

 </body>
</html>
 
 

<?php /**PATH C:\wamp64\www\kesehatan\zarvisystem\resources\views/admin/layout.blade.php ENDPATH**/ ?>