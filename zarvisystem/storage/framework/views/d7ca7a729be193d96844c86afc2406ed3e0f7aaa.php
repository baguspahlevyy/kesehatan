<!-- Main navbar -->

<div class="navbar navbar-expand-md navbar-dark  navbar-static" xmlns="http://www.w3.org/1999/html">

		<div class="navbar-brand">
                <a href="home">
				<img width="165px" src="<?php echo e(asset('images/indomaret.png')); ?>" alt=""></a>

		</div>



		<div class="d-md-none" >

			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-mobile">

				<i class="icon-tree5"></i>

			</button>

			<button class="navbar-toggler sidebar-mobile-main-toggle" type="button">

				<i class="icon-paragraph-justify3"></i>

			</button>

		</div>



		<div class="collapse navbar-collapse" id="navbar-mobile">

			<ul class="navbar-nav">

				<li class="nav-item">

					<a href="#" class="navbar-nav-link sidebar-control sidebar-main-toggle d-none d-md-block">

						<i class="icon-paragraph-justify3"></i> 

					</a>

				</li>

			</ul>



			<span class="navbar-text ml-md-3">

				<span class="badge badge-mark border-orange-300 mr-2"></span>
				
				<?php echo e(App\Helpers\Tanggal::indonesian_date(date('Y-m-d H:i:s'))); ?>


			</span>



			 
		</div>

	</div>

	<!-- /main navbar -->
<?php /**PATH /var/www/html/kesehatan/zarvisystem/resources/views/admin/partials/header.blade.php ENDPATH**/ ?>