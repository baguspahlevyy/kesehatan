<?php
use App\Helpers\Tanggal;

?>


<?php $__env->startSection('styles'); ?>

    <!-- daterange picker -->
    <link rel="stylesheet" href="<?php echo e(asset('/global_assets/js/plugins/datepicker/datepicker3.css')); ?> ">
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>

    <!-- Basic initialization -->


    <div class="card">
        <div class="card-header header-elements-inline">
            <h5 class="card-title">Laporan Survey Kesehatan Karyawan<br/> 
            </h5>

            <div class="header-elements">
                <div class="list-icons">
                    <a class="list-icons-item" data-action="collapse"></a>
                    <a class="list-icons-item" data-action="reload"></a>
                    <a class="list-icons-item" data-action="remove"></a>
                </div>
            </div>
        </div>

        <div class="card-body border-left-3 border-left-blue-400 rounded-left-0">

            <fieldset class="mb-3">

                <legend class="text-uppercase font-size-sm font-weight-bold text-primary-600">Form </legend>
                <form class="form-horizontal" role="form" method="POST" action="<?php echo e(url('/reportall/preview')); ?>">

                    <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
                    <?php if( count( $errors ) > 0 ): ?>
                        <div class="alert alert-danger">
                            <strong>Whoops!</strong>
                            There were some problems with your input.<br><br>
                            <ul>
                                <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <li><?php echo e($error); ?></li>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </ul>
                        </div>
                    <?php endif; ?>

                    <div class="form-group row">
                        <label class="col-form-label col-lg-2  font-weight-bold">Tanggal</label>
                        <div class="col-lg-6">
                            <div class="row">
                                <div class="col-md-4">
                                    <input name="tanggal" type="text"data-date-format="yyyy-mm-dd" class="form-control mb-3 mb-md-0" id="tanggal" placeholder="Tanggal" required>
                                </div>
                            </div>
                        </div>
                    </div> 


                    
        


                    <div class="form-group row">
                        <label class="col-form-label col-lg-2">Jenis Laporan</label>
                        <div class="col-lg-6">
                            <div class="row">
                                <div class="col-md-6">
                                    <select name="jenis" data-placeholder="Select a Jabatan" class="form-control select-icons" data-fouc required>                                        
                                        <option value="manager" > Per Manager </option>
					<option value="supervisor"> Per Supervisor</option>
                                        <option value="all">Karyawan Belum Input</option>
					<option value="rekap" selected> Rekap per Cabang</option>
					<option value="all2">Rekap Kondisi Karyawan</option>
					<option value="sakit">Rekap Karyawan Sakit</option>
					<option value="sakit2">Rekap Karyawan Sakit 2</option>

                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                     
                    <div class="col-md-4 ">
                        <div class="text-center">
                            <button type="submit" class="btn btn-primary"
                                    onClick= "return confirm('Apakah Anda Yakin?')">
                                <i class="icon-eye4 ml-2"></i> Preview </button>
                        </div>
                    </div>
                </form>
            </fieldset>
        </div>

 
         
         
        </div>
    </div>
    </div>
    <!-- /basic initialization -->
<?php $__env->stopSection(); ?>
<?php $__env->startSection('scripts'); ?>
    <!-- Theme JS files--> 
    <script src="<?php echo e(asset('global_assets/js/plugins/extensions/jquery_ui/interactions.min.js')); ?>"></script> 
    <script src="<?php echo e(asset('global_assets/js/plugins/forms/inputs/touchspin.min.js')); ?>"></script>
    <script src="<?php echo e(asset('global_assets/js/plugins/forms/styling/uniform.min.js')); ?>"></script> 
    <script src="<?php echo e(asset('global_assets/js/demo_pages/form_input_groups.js')); ?>"></script>

    <script src="<?php echo e(asset('global_assets/js/plugins/forms/selects/select2.min.js')); ?>"></script>

    <script src="<?php echo e(asset('global_assets/js/demo_pages/form_select2.js')); ?>"></script>
    <script src="<?php echo e(asset('global_assets/js/plugins/extensions/jquery_ui/widgets.min.js')); ?>"></script>
    <script src="<?php echo e(asset('global_assets/js/plugins/extensions/jquery_ui/effects.min.js')); ?>"></script>
    <script src="<?php echo e(asset('global_assets/js/plugins/extensions/mousewheel.min.js')); ?>"></script>
    <!-- Theme JS files -->
    <script src="<?php echo e(asset('global_assets/js/plugins/ui/moment/moment.min.js')); ?>"></script> 

    <script src="<?php echo e(asset('/global_assets/js/moment.min.js')); ?> "></script>
    <script src="<?php echo e(asset('/global_assets/js/plugins/datepicker/bootstrap-datepicker.js')); ?> "></script>
    <!-- /theme JS files -->


    <script type="text/javascript">
        $(function () {

            //Date  picker
            $('#tanggal').datepicker({
                autoclose: true,
                todayHighlight: 1, 

                todayBtn:  1,
                startDate : '2020-01-01',
            });

        });

    </script>
    <!-- /theme JS files -->

 
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\kesehatan\zarvisystem\Modules\Reportall\Providers/../Resources/views/index.blade.php ENDPATH**/ ?>