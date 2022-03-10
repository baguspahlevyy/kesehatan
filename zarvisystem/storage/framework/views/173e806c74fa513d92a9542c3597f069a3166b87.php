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
        <div class="table-responsive">
        <table class="table table-bordered datatable-button-html5-columns">
            <thead>
            <tr style="background-color: yellow;">
                <th rowspan="2"> Cabang </th>
                <th rowspan="2">Dept</th>
                <th rowspan="2">Jabatan</th>
                <th rowspan="2">No</th>
                <th rowspan="2">NIK</th>
                <th rowspan="2">Nama Karyawan</th>
                <th rowspan="2">Tanggal Sakit</th>
                <th rowspan="2">Sakit</th>
                <th rowspan="2">Masih Sakit</th>
                <th rowspan="2">Sudah Sembuh</th>
                <th rowspan="2">PDP</th>
                <th rowspan="2">Positif</th>
                <th colspan="4">SAKIT TIDAK TERKAIT COVID-19</th>                 
                <th rowspan="2">Surat Dokter 1</th>
                <th rowspan="2">Surat Dokter 2</th>
                <th rowspan="2">Rapid Test</th>
                <th rowspan="2">Tanggal Rapid Test</th>
                <th rowspan="2">Hasil Rapid</th>
                <th rowspan="2">Karantina</th>
                <th rowspan="2">Swab 1</th>
                <th rowspan="2">Hasil Swab 1</th>
                <th rowspan="2">Swab 2</th>
                <th rowspan="2">Hasil Swab 2</th>
                <th rowspan="2">Masuk Kerja</th>
                <th rowspan="2">Lain-Lain</th>
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
					<?php if($dept <> $r->dep): ?>
						<?php $dept = $r->dep ;  $no = "1"; ?>
						<td class="text-left"><?php echo e($r->dep); ?></td>     
					<?php else: ?> 
						<td class="text-left"></td>     
					<?php endif; ?>
            <td class="text-center"><?php echo e($r->JABATAN); ?></td> 
			<td class="text-center"><?php echo e($no); ?></td>
            <td class="text-center"><?php echo e($r->NIK); ?></td>     
            <td class="text-left"><?php echo e($r->NAMA); ?></td>     
            <td class="text-center"><?php echo e($r->tanggal_sakit); ?></td>     
            <td class="text-center"></td>     
            <td class="text-center"></td>                    
                    <td class="text-center"><?php echo e($r->PDP); ?></td>                 
                                    
                    <td class="text-center"><?php echo e($r->POSITIF); ?></td> 
                    
                    <td class="text-center"><?php echo e($r->sakit); ?></td>                       
					
		<?php if($r->hari >= 1 && $r->hari <= 3): ?>
						<td class="text-center"> &#10004;</td> 
					<?php else: ?>
						<td class="text-center"> </td>                 
					<?php endif; ?>
					
					<?php if($r->hari >= 4 && $r->hari <= 7): ?>
						<td class="text-center"> &#10004;</td> 
					<?php else: ?>
						<td class="text-center"> </td>                 
					<?php endif; ?>                
					<?php if($r->hari >= 8 && $r->hari <= 14): ?>
						<td class="text-center"> &#10004;</td> 
					<?php else: ?>
						<td class="text-center"> </td>                 
					<?php endif; ?>                        
					<?php if($r->hari > 14 ): ?>
						<td class="text-center"> &#10004;</td> 
					<?php else: ?>
						<td class="text-center"> </td>                 
                    <?php endif; ?>
                              
                                    
                    <td class="text-center"><?php echo e($r->sdokter1); ?></td>       
                    <td class="text-center"><?php echo e($r->sdokter2); ?></td>      
                    <td class="text-center"><?php echo e($r->rapid); ?></td>     
                    <td class="text-center"><?php echo e($r->tanggal_rapid); ?></td>      
                    <td class="text-center"><?php echo e($r->hrapid); ?></td>      
                    <td class="text-center"><?php echo e($r->tanggal_karantina); ?></td>      
                    <td class="text-center"><?php echo e($r->tanggal_swab1); ?></td>        
                    <td class="text-center"><?php echo e($r->hswab1); ?></td>        
                    <td class="text-center"><?php echo e($r->tanggal_swab2); ?></td>        
                    <td class="text-center"><?php echo e($r->hswab2); ?></td>           
                    <td class="text-center"><?php echo e($r->akhir); ?></td>     
                    <td class="text-left"><?php echo e($r->tempat); ?></td>                 
                </tr>
				<?php $no++; ?>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>
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

<?php echo $__env->make('admin.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/kesehatan/zarvisystem/Modules/Reportall/Providers/../Resources/views/sakitall2.blade.php ENDPATH**/ ?>