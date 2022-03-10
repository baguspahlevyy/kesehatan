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
            <tr>
                <th >No.</th>
                <th >Nik</th>
                <th >Nama</th>
                <th > Departement</th>
                <th > Sub Departement</th>
                <th > Jabatan</th>
                <th > Supervisor</th>
                <th > Manager</th>
            </tr>
            
            </thead>
            <tbody>
            <?php $no=1; ?>
            <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $r): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td class="text-center"><?php echo e($no); ?></td>
                    <td class="text-left"><?php echo e($r->nik); ?></td> 
                    <td class="text-left"><?php echo e($r->nama); ?></td> 
                    <td class="text-left"><?php echo e($r->dep); ?></td> 
                    <td class="text-left"><?php echo e($r->subdep); ?></td> 
                    <td class="text-left"><?php echo e($r->jabatan); ?></td> 
                    <td class="text-left"><?php echo e($r->supervisor); ?></td> 
                    <td class="text-left"><?php echo e($r->manager); ?></td> 
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

<?php echo $__env->make('admin.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/kesehatan/zarvisystem/Modules/Reportall/Providers/../Resources/views/preview2.blade.php ENDPATH**/ ?>