<?php $__env->startSection('styles'); ?>

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

        <table class="table datatable-button-html5-columns">
            <thead>
            <tr style="background-color: yellow;">
                <th rowspan="2"> Cabang </th>
                <th rowspan="2">Dept</th>
                <th rowspan="2">No</th>
                <th rowspan="2">Nama Karyawan</th>
                <th rowspan="2">Sakit</th>
                <th rowspan="2">PDP</th>
                <th rowspan="2">Positif</th>
                <th colspan="4">Jumlah Hari</th>
                <th rowspan="2">Keterangan</th>
            </tr>
	 <tr style="background-color: yellow;">
                <th>1-3 </th>
                <th>4-7</th>
                <th>8-14</th>
                <th> > 14</th>
            </tr>
			
            </thead>
            <tbody>
            <?php 
				$dept = "" ;
				$no = "1" ;
			
			?>
            <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $r): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>  
                    <td class="text-center">Jember</td>        
					<?php if($dept <> $r->DEP): ?>
						<?php $dept = $r->DEP ;  $no = "1"; ?>
						<td class="text-center"><?php echo e($r->DEP); ?></td>     
					<?php else: ?> 
						<td class="text-center"></td>     
					<?php endif; ?>
			<td class="text-center"><?php echo e($no); ?></td>
                    <td class="text-center"><?php echo e($r->NAMA); ?></td>     
                    <td class="text-center"><?php echo e($r->SAKIT); ?></td>                 
                    <td class="text-center"><?php echo e($r->PDP); ?></td>                 
                                    
                    <td class="text-center"><?php echo e($r->POSITIF); ?></td>                 
					
		<?php if($r->HARI >= 1 && $r->HARI <= 3): ?>
						<td class="text-center"> &#10004;</td> 
					<?php else: ?>
						<td class="text-center"> </td>                 
					<?php endif; ?>
					
					<?php if($r->HARI >= 4 && $r->HARI <= 7): ?>
						<td class="text-center"> &#10004;</td> 
					<?php else: ?>
						<td class="text-center"> </td>                 
					<?php endif; ?>                
					<?php if($r->HARI >= 8 && $r->HARI <= 14): ?>
						<td class="text-center"> &#10004;</td> 
					<?php else: ?>
						<td class="text-center"> </td>                 
					<?php endif; ?>                        
					<?php if($r->HARI > 14 ): ?>
						<td class="text-center"> &#10004;</td> 
					<?php else: ?>
						<td class="text-center"> </td>                 
					<?php endif; ?>
                    <td class="text-left"><?php echo e($r->KETERANGAN); ?></td>                 
                </tr>
				<?php $no++; ?>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>
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

<?php echo $__env->make('admin.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/kesehatan/zarvisystem/Modules/Reportall/Providers/../Resources/views/sakitall.blade.php ENDPATH**/ ?>