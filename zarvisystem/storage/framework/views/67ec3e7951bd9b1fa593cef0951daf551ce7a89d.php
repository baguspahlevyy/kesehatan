<?php $__env->startSection('styles'); ?>
<style type="text/css">
           
    #wrapper{background: -moz-linear-gradient(top,  darkslategray , azure);
     background:-ms-linear-gradient(top, brown, brown);
     background:-o-linear-gradient(top, brown, brown);
     }
     
     #loader {
           text-align: center;
           display: none;
     }
       
     #loaderCircle {
         text-align: center;
         z-index: 100;
         position: fixed;
         left: 45%;
         top: 50px;
         width: 200px;
         padding: 10px;
         background: #000; 
         opacity: 0.8;
         color: #FFF;
         -webkit-border-radius: 10px;
         -moz-border-radius: 10px;
         border-radius: 10px;
     }

.shape{    
     border-style: solid; border-width: 0 70px 40px 0; float:right; height: 0px; width: 0px;
     -ms-transform:rotate(360deg); /* IE 9 */
     -o-transform: rotate(360deg);  /* Opera 10.5 */
     -webkit-transform:rotate(360deg); /* Safari and Chrome */
     transform:rotate(360deg);
 }
 .offer{
     background:#fff; border:1px solid #ddd; box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2); margin: 15px 0; overflow:hidden;
 }
 
 .shape {
     border-color: rgba(255,255,255,0) #d9534f rgba(255,255,255,0) rgba(255,255,255,0);
 }
 .offer-radius{
     border-radius:7px;
 }
 .offer-danger {	border-color: #d9534f; }
 .offer-danger .shape{
     border-color: transparent #d9534f transparent transparent;
 }
 .offer-success {	border-color: #5cb85c; }
 .offer-success .shape{
     border-color: transparent #5cb85c transparent transparent;
 }
 .offer-default {	border-color: #999999; }
 .offer-default .shape{
     border-color: transparent #999999 transparent transparent;
 }
 .offer-primary {	border-color: #428bca; }
 .offer-primary .shape{
     border-color: transparent #428bca transparent transparent;
 }
 .offer-info {	border-color: #5bc0de; }
 .offer-info .shape{
     border-color: transparent #5bc0de transparent transparent;
 }
 .offer-warning {	border-color: #f0ad4e; }
 .offer-warning .shape{
     border-color: transparent #f0ad4e transparent transparent;
 }

 .shape-text{
     color:#fff; font-size:12px; font-weight:bold; position:relative; right:-40px; top:2px; white-space: nowrap;
     -ms-transform:rotate(30deg); /* IE 9 */
     -o-transform: rotate(360deg);  /* Opera 10.5 */
     -webkit-transform:rotate(30deg); /* Safari and Chrome */
     transform:rotate(30deg);
 }	
 .offer-content{
     padding:0 20px 10px;
 }
 

</style>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<div id="loader">
    <div id="loaderCircle">
        <img alt="Loading ...." src="http://45.127.133.123/survey/asset/images/loader_big.gif" width="15px"  /><span id="loaderText"></span>
    </div>
</div>

<div class="col-md-8 offset-md-2">
    <div class="card">
        <div class="card-header header-elements-inline">
            <h5 class="card-title">Monitoring Sales Realtime<br/>
            </h5>
            <div class="header-elements">
                <div class="list-icons">
                    <a class="list-icons-item" data-action="collapse"></a>
                    <a class="list-icons-item" data-action="reload"></a>
                    <a class="list-icons-item" data-action="remove"></a>
                </div>
            </div>
        </div>
        <div class="card-body">
            <fieldset class="mb-3">
                <form  class="form-horizontal" role="form" method="POST" action="<?php echo e(url('realtime')); ?>">
                    <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
                    <?php if( count( $errors ) > 0 ): ?>
                        <div class="alert alert-danger">
                            <strong>Whoops!</strong>
                            Silahkan Melengkapi Form Dibawah ini.<br><br>
                            <ul>
                                <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <li><?php echo e($error); ?></li>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </ul>
                        </div>  
                    <?php endif; ?>
                   

                    <div class="form-group row">
                        <label class="col-form-label col-lg-3 font-weight-bold">Kode Cabang</label>
                        <div class="col-lg-9">
                            <div class="row">
                                <div class="col-md-6">
                                    <select name="kdcab" id="kdcab" class="form-control select2"> 
                                            <option value=""> Kode Cabang</option> 
                                            <option value="G004"> G004 - JEMBER</option> 
                                                <option value="G025"> G025 - MALANG</option> 
                                                <option value="G148"> G148 - JOMBANG</option> 
                                                <option value="G174"> G174 - TERNATE</option> 
                                                <option value="G301"> G301 - SURABAYA</option> 
                                                <option value="G305"> G305 - GRESIK</option> 
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div> 
                    
                    <div class="form-group row">
                        <label class="col-form-label col-lg-3 font-weight-bold">Toko</label>
                        <div class="col-lg-9">
                            <div class="row">
                                <div class="col-md-6">
                                    <select name="kdtk" id="listtoko" class="form-control select2"> 
                                            <option value="all">All Toko</option>  
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>  
                    <hr/>
                    <div class="col-md-7 ">
                        <div class="text-right">
                            <button type="submit" id="preview" class="btn btn-primary">Preview Data <i class="icon-paperplane ml-2"></i></button> 
                        </div>
                    </div>

                </form>
            </fieldset>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>
    <!-- Theme JS files -->
    <script src="<?php echo e(asset('global_assets/js/plugins/extensions/jquery_ui/interactions.min.js')); ?>"></script>
    <script src="<?php echo e(asset('global_assets/js/plugins/forms/selects/select2.min.js')); ?>"></script>
    <script src="<?php echo e(asset('global_assets/js/demo_pages/form_select2.js')); ?>"></script>
    <script src="<?php echo e(asset('global_assets/js/plugins/forms/inputs/touchspin.min.js')); ?>"></script>
    <script src="<?php echo e(asset('global_assets/js/plugins/forms/styling/uniform.min.js')); ?>"></script>
    

    <script src="<?php echo e(asset('global_assets/js/plugins/extensions/jquery_ui/widgets.min.js')); ?>"></script>
    <script src="<?php echo e(asset('global_assets/js/plugins/extensions/jquery_ui/effects.min.js')); ?>"></script>
    <script src="<?php echo e(asset('global_assets/js/plugins/extensions/mousewheel.min.js')); ?>"></script>

     <!-- Theme JS files -->
     <script src="<?php echo e(asset('global_assets/js/plugins/ui/moment/moment.min.js')); ?>"></script>
     <script src="<?php echo e(asset('global_assets/js/plugins/pickers/anytime.min.js')); ?>"></script>
 
 
     <script src="<?php echo e(asset('global_assets/js/demo_pages/form_inputs.js')); ?>"></script>
     <!-- /theme JS files -->

    <script src="<?php echo e(asset('js/jquery.number.js')); ?>"></script> 
    <!--<script src="<?php echo e(asset('js/sweetalert.min.js')); ?>"></script> -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
    <!-- Theme JS files -->

 
	<script type="text/javascript">
      $(function () {
        //Initialize Select2 Elements
        $(".select2").select2(); 


      });
    </script>
    <script type="text/javascript"> 
        $('.nomor').number(true, 0, ',', ''); 
    </script>
 
<!-- /theme JS files -->


<script type="text/javascript">

    $(document).ready(function(){

        $('#kdcab').change(function(){
			var id = $(this).val();
			$("#listunit").empty(); 
			if(id){
				$.ajax({
					type:"GET",
					url:"<?php echo e(url('realtime/listtoko')); ?>/"+id,
					success:function(res){
						$("#listtoko").empty(); 
						if(res){
							
							$("#listtoko").append('<option value="all">All Toko</option>');
							$.each(res,function(key,value){

								$("#listtoko").append('<option value="'+value['KDTK']+'" data-icon="location3">'+value['KDTK']+' - '+value['NAMA']+'</option>');

							});
						} 

					}

				});

			}else{

				$("#listtoko").empty(); 

			}

		}); 

        $("#preview").click(function(){ 
            var kdcab = $('#kdcab').val(); 
            if(kdcab === '')
            Swal.fire({
                    title: "Pesan kesalahan",
                    text: "Silahkan Pilih Kode Cabang",
                    icon: "error",
                });
        });

 

    function loaderOpen(text){
                    $('#loaderText').html(text);
                    $('#loader').show();
                } 
    function loaderClose(){
                    $('#loaderText').html('');
                    $('#loader').hide();
                }

    });
 
</script>
    

<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/kesehatan/zarvisystem/Modules/Realtime/Providers/../Resources/views/index.blade.php ENDPATH**/ ?>