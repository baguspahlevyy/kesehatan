<?php $__env->startSection('styles'); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<div class="col-md-10 offset-md-1">
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

	
<div class="table-responsive">
        <table class="table table-bordered" >
            <thead>
            <tr style="background-color: yellow;">
                <th>Cabang </th>
                <th>Total Karyawan</th>
                <th>Sudah Input</th>
                <th> %Sudah Input</th>
                <th> Belum Input</th>
                <th> %Belum Input</th>
            </tr>
            </thead>
            <tbody>
            
            <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $r): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr> 
                    <td class="text-left">JEMBER</td>
                    <td class="text-center"><?php echo e(number_format($r->TOTAL_KARYAWAN)); ?></td>
                    <td class="text-center"><?php echo e(number_format($r->TOTAL_KARYAWAN - $r->TOTAL_BELUM)); ?></td>
                    <td class="text-center"><?php echo e(round(( $r->TOTAL_KARYAWAN - $r->TOTAL_BELUM) / $r->TOTAL_KARYAWAN *100 ,2)); ?></td>
                    <td class="text-center"><?php echo e(number_format($r->TOTAL_BELUM)); ?></td>
                    <td class="text-center"><?php echo e(round($r->TOTAL_BELUM / $r->TOTAL_KARYAWAN *100,2)); ?></td>                    
                </tr>
            
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>
</div>
    </div>
</div>
    <!-- /basic initialization -->
<?php $__env->stopSection(); ?>
<?php $__env->startSection('scripts'); ?>
    <!-- Theme JS files-->
    <script src="<?php echo e(asset('global_assets/js/plugins/tables/datatables/datatables.min.js')); ?>"></script>
    <script src="<?php echo e(asset('global_assets/js/plugins/forms/selects/select2.min.js')); ?>"></script>
    <script src="<?php echo e(asset('global_assets/js/plugins/tables/datatables/extensions/jszip/jszip.min.js')); ?>"></script>
    <script src="<?php echo e(asset('global_assets/js/plugins/tables/datatables/extensions/pdfmake/pdfmake.min.js')); ?>"></script>
    <script src="<?php echo e(asset('global_assets/js/plugins/tables/datatables/extensions/pdfmake/vfs_fonts.min.js')); ?>"></script>
    <script src="<?php echo e(asset('global_assets/js/plugins/tables/datatables/extensions/buttons.min.js')); ?> "></script>
    <script src="<?php echo e(asset('global_assets/js/demo_pages/datatables_extension_buttons_html5.js')); ?>"></script>
    
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/kesehatan/zarvisystem/Modules/Reportall/Providers/../Resources/views/preview4.blade.php ENDPATH**/ ?>