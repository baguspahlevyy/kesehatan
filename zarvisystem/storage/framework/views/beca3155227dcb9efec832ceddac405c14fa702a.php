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

        <table class="table  datatable-button-html5-columns">
            <thead>
            <tr style="background-color: yellow;">
                <th>NIK </th>
                <th>Nama</th>
		
                <th>DEP</th>
                <th>SUB DEP</th>
                <th>JABATAN</th>
                <th>DBM</th>
                <th>Manager</th>
                <th>Supervisor</th>
                <th>Sehat</th>
                <th>Sakit</th>
                <th>PDP</th>
                <th>Positif Corona</th>
		<th>Jenis Sakit</th>
		<th>Periksa Dokter?</th>
		<th> Surat Dokter</th>
		<th> Masuk Kerja </th>
			<th>Jml Hari Tidak Kerja</th>
		<th>Keterangan</th>
            </tr>
            </thead>
            <tbody>
            
            <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $r): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>  
                    <td class="text-center"><?php echo e($r->NIK); ?></td>                 
                    <td class="text-left"><?php echo e($r->NAMA); ?></td>                 
             
                          
                    <td class="text-center"><?php echo e($r->DEP); ?></td>               
                    <td class="text-center"><?php echo e($r->SUBDEP); ?></td>  
           
                    <td class="text-center"><?php echo e($r->JABATAN); ?></td>  
                    <td class="text-left"><?php echo e($r->DBM); ?></td>                 
                    <td class="text-left"><?php echo e($r->MANAGER); ?></td>                 
                    <td class="text-left"><?php echo e($r->SUPERVISOR); ?></td>                 
                    <td class="text-center"><?php echo e($r->SEHAT); ?></td>                 
                    <td class="text-center"><?php echo e($r->SAKITx); ?></td>                 
                    <td class="text-center"><?php echo e($r->PDP); ?></td>                 
                    <td class="text-center"><?php echo e($r->Positif); ?></td>                 
			          
                    <td class="text-center"><?php echo e($r->JENIS_SAKIT); ?></td>             
		   <td class="text-center"><?php echo e($r->PERIKSA); ?> </td>
			        
                    <td class="text-center"><?php echo e($r->SURAT); ?></td>             
                    <td class="text-center"><?php echo e($r->KERJA); ?></td>      
			<td class="text-center"> <?php echo e($r->HARI); ?> </td>
                    <td class="text-center"><?php echo e($r->KETERANGAN); ?></td>
                </tr>
            
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

<?php echo $__env->make('admin.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/kesehatan/zarvisystem/Modules/Reportall/Providers/../Resources/views/preview5.blade.php ENDPATH**/ ?>