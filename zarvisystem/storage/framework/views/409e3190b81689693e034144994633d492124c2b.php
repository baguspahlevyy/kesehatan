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
            <h5 class="card-title">Silahkan Input Kondisi Kesehatan Anda<br/>
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
                <legend class="font-size-sm text-warning">*) Data akan di-rahasiakan</legend>
                <form id="formkesehatan" class="form-horizontal" role="form" method="POST" action="javascript:void(0)">
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
                        <label class="col-form-label col-lg-3 font-weight-bold">Nik</label>
                        <div class="col-lg-9">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group form-group-feedback form-group-feedback-left">
                                        <input type="text" id="nik" name="nik"  class="nomor form-control form-control-lg" placeholder="NIK Karyawan" required>
                                        <div class="form-control-feedback form-control-feedback-lg">
                                            <i class="icon-user-tie "></i>
                                        </div> 
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-form-label col-lg-3 font-weight-bold">Nama </label>
                        <div class="col-lg-9">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group form-group-feedback form-group-feedback-left">
                                        <input type="text" id="nama" name="nama" class="form-control form-control-lg" placeholder="Nama Karyawan" readonly>
                                        <div class="form-control-feedback form-control-feedback-lg">
                                            <i class="icon-user-tie "></i>
                                        </div> 
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    
                    <div class="form-group row">
                        <label class="col-form-label col-lg-3 font-weight-bold">Department </label>
                        <div class="col-lg-9">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group form-group-feedback form-group-feedback-left">
                                        <input type="text" id="dep" name="dep" class="form-control form-control-lg" placeholder="Department" readonly>
                                        <div class="form-control-feedback form-control-feedback-lg">
                                            <i class="icon-user-tie "></i>
                                        </div> 
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group form-group-feedback form-group-feedback-left">
                                        <input type="text" id="subdep" name="subdep" class="form-control form-control-lg" placeholder="Sub Department" readonly>
                                        <div class="form-control-feedback form-control-feedback-lg">
                                            <i class="icon-user-tie "></i>
                                        </div> 
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="form-group row">
                        <label class="col-form-label col-lg-3 font-weight-bold">Jabatan </label>
                        <div class="col-lg-9">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group form-group-feedback form-group-feedback-left">
                                        <input type="text" id="jabatan" name="jabatan" class="form-control form-control-lg" placeholder="Jabatan" readonly>
                                        <div class="form-control-feedback form-control-feedback-lg">
                                            <i class="icon-user-tie "></i>
                                        </div> 
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="form-group row">
                        <label class="col-form-label col-lg-3 font-weight-bold">PT </label>
                        <div class="col-lg-9">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group form-group-feedback form-group-feedback-left">
                                        <input type="text" id="pt" name="pt" class="form-control form-control-lg" placeholder="Perusahaan" readonly>
                                        <div class="form-control-feedback form-control-feedback-lg">
                                            <i class="icon-user-tie "></i>
                                        </div> 
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-form-label col-lg-3 font-weight-bold">Kondisi</label>
                        <div class="col-lg-9">
                            <div class="row">
                                <div class="col-md-6">
                                    <select name="kondisi" id="kondisi" class="form-control select2"> 
                                            <option value=""> Pilih Kondisi</option>
                                            <option value="Sehat"> Sehat</option>
                                            <option value="Sakit"> Sakit</option>
 
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div> 
                    
                    <div class="form-group row ssakit">
                        <label class="col-form-label col-lg-3 font-weight-bold">Sakit yang diderita</label>
                        <div class="col-lg-9">
                            <div class="row">
                                <div class="col-md-6">
                                    <select name="sakit" id="sakit" class="form-control select2" disabled="disabled"> 
                                            <option value="">Pilih Jenis Sakit</option> 
											<option value="Batuk saja">Batuk saja</option>
											<option value="Demam Saja">Demam Saja</option>
											<option value="Flue saja">Flue saja</option>
											<option value="Batuk & Flue">Batuk & Flue</option>
											<option value="Batuk & Flue & Demam">Batuk & Flue  & Demam</option>
											<option value="Batuk & Demam">Batuk & Demam</option> 
                                            <option value="ODP">ODP</option> 
                                            <option value="PDP">PDP</option> 
                                            <option value="Positif">Positif Covid</option>
                                            <option value="Lain-lain">Lain-lain</option> 
 
 
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div> 

 <div class="form-group row speriksa">
                        <label class="col-form-label col-lg-3 font-weight-bold">Sudah Periksa ?</label>
                        <div class="col-lg-9">
                            <div class="row">
                                <div class="col-md-6">
                                    <select name="periksa" id="periksa" class="form-control select2" disabled="disabled"> 
<option value="" selected>Pilih </option> 
                                            <option value="Sudah" >Sudah</option> 
											<option value="Belum">Belum</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div> 

 <div class="form-group row tampilsurat" style="display:none;">
                        <label class="col-form-label col-lg-3 font-weight-bold">Ada Surat Dokter ?</label>
                        <div class="col-lg-9">
                            <div class="row">
                                <div class="col-md-6">
                                    <select name="surat" id="surat" class="form-control select2" disabled="disabled"> 
                                        <option>Pilih</option> 
                                        <option value="Ada">Ada</option> 
											<option value="Tidak Ada">Tidak Ada</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div> 
                    
                    <div class="form-group row tglmsakit" style="display: none;">
                        <label class="col-form-label col-lg-3 font-weight-bold">Tanggal Mulai Sakit</label>
                        <div class="col-lg-9">
                            <div class="row">
                                    <div class="col-md-4">
                                        <input name="tanggal_sakit" type="text" date-format="YYYY-mm-dd" class="form-control mb-3 mb-md-0" id="tanggal5" placeholder="Tanggal Mulai Sakit">
                                    </div>

                            </div>
                        </div>
                    </div> 
                    
                    <div class="form-group row sdokter1" style="display: none;">
                        <label class="col-form-label col-lg-3 font-weight-bold">Surat Dokter 1</label>
                        <div class="col-lg-9">
                            <div class="row">
                                    <div class="col-md-4">
                                        <input name="sdokter1" type="text" date-format="YYYY-mm-dd" class="form-control mb-3 mb-md-0" id="tanggal6">
                                    </div>

                            </div>
                        </div>
                    </div>  
                    
                    <div class="form-group row sdokter2" style="display: none;">
                        <label class="col-form-label col-lg-3 font-weight-bold">Surat Dokter 2</label>
                        <div class="col-lg-9">
                            <div class="row">
                                    <div class="col-md-4">
                                        <input name="sdokter2" type="text" date-format="YYYY-mm-dd" class="form-control mb-3 mb-md-0" id="tanggal7" >
                                    </div>

                            </div>
                        </div>
                    </div> 

                    
                    <div class="form-group row akhir" style="display: none;">
                        <label class="col-form-label col-lg-3 font-weight-bold">Tgl Berakhir Surat Dokter</label>
                        <div class="col-lg-9">
                            <div class="row">
                                    <div class="col-md-4">
                                        <input name="akhir" type="text" date-format="YYYY-mm-dd" class="form-control mb-3 mb-md-0" id="tanggal10">
                                    </div>

                            </div>
                        </div>
                    </div>  
                    

 <div class="form-group row skerja">
                        <label class="col-form-label col-lg-3 font-weight-bold">Masuk Kerja ?</label>
                        <div class="col-lg-9">
                            <div class="row">
                                <div class="col-md-6">
                                    <select name="kerja" id="kerja" class="form-control select2" disabled="disabled"> 
<option value="" selected>Pilih </option> 
                                            <option value="Masuk Kerja" >Masuk Kerja</option> 
											<option value="Rawat Jalan">Rawat Jalan</option>
											<option value="Rawat Inap">Rawat Inap</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div> 
                    <div class="form-group row tampilhari"  style="display:none;">
                        <label class="col-form-label col-lg-3 font-weight-bold">Jumlah Hari Sakit </label>
                        <div class="col-lg-9">
                            <div class="row">
                                <div class="col-md-2">
                                    <div class="form-group form-group-feedback form-group-feedback-left">
                                        <input type="number" id="hari" min="1" max="30" name="hari" class="form-control form-control-lg">
                                        <div class="form-control-feedback form-control-feedback-lg">
                                            <i class="icon-calendar "></i>
                                        </div> 
                                    </div>
                                </div>
								
                            </div>
                        </div>
                    </div>	

                    <div class="form-group row rapid" style="display: none;">
                        <label class="col-form-label col-lg-3 font-weight-bold">Rapid Test?</label>
                        <div class="col-lg-9">
                            <div class="row">
                                <div class="col-md-6">
                                    <select name="rapid" id="periksa" class="form-control select2"> 
                                            <option value="" selected>Pilih </option> 
                                            <option value="Sudah" >Sudah</option> 
											<option value="Belum">Belum</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div> 
                    
                    
                    <div class="form-group row tanggal_rapid" style="display: none;">
                        <label class="col-form-label col-lg-3 font-weight-bold">Tanggal Rapid Test</label>
                        <div class="col-lg-9">
                            <div class="row">
                                    <div class="col-md-4">
                                        <input name="tanggal_rapid" type="text" date-format="YYYY-mm-dd" class="form-control mb-3 mb-md-0" id="tanggal8" placeholder="Tanggal Rapid Test">
                                    </div>

                            </div>
                        </div>
                    </div> 

                                  

                    <div class="form-group row hrapid" style="display: none;">
                        <label class="col-form-label col-lg-3 font-weight-bold">Hasil Rapid Test?</label>
                        <div class="col-lg-9">
                            <div class="row">
                                <div class="col-md-6">
                                    <select name="hrapid" id="periksa" class="form-control select2"> 
                                            <option value="" selected>Pilih </option> 
                                            <option value="Negatif" >Negatif</option> 
											<option value="Positif">Positif</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div> 
                    

                    <div class="form-group row tglkarantina" style="display: none;">
                        <label class="col-form-label col-lg-3 font-weight-bold">Tanggal Karantina</label>
                        <div class="col-lg-9">
                            <div class="row">
                                    <div class="col-md-4">
                                        <input name="tanggal_karantina" type="text" date-format="YYYY-mm-dd" class="form-control mb-3 mb-md-0" id="tanggal" placeholder="Tanggal Karantina">
                                    </div>

                            </div>
                        </div>
                    </div>

                    
                    <div class="form-group row tglswab1" style="display: none;">
                        <label class="col-form-label col-lg-3 font-weight-bold">Tanggal SWAB 1</label>
                        <div class="col-lg-9">
                            <div class="row">
                                    <div class="col-md-4">
                                        <input name="tanggal_swab1" type="text" date-format="YYYY-mm-dd" class="form-control mb-3 mb-md-0" id="tanggal2" placeholder="Tanggal SWAB1">
                                    </div>

                            </div>
                        </div>
                    </div> 

                      
                    <div class="form-group row hswab1" style="display: none;">
                        <label class="col-form-label col-lg-3 font-weight-bold">Hasil SWAB 1</label>
                        <div class="col-lg-9">
                            <div class="row">
                                <div class="col-md-6">
                                    <select name="hswab1" id="periksa" class="form-control select2"> 
                                            <option value="" selected>Pilih </option> 
                                            <option value="Negatif" >Negatif</option> 
											<option value="Positif">Positif</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div> 

                    <div class="form-group row tglswab2" style="display: none;">
                        <label class="col-form-label col-lg-3 font-weight-bold">Tanggal SWAB 2</label>
                        <div class="col-lg-9">
                            <div class="row">
                                    <div class="col-md-4">
                                        <input name="tanggal_swab2" type="text" date-format="YYYY-mm-dd" class="form-control mb-3 mb-md-0" id="tanggal3" placeholder="Tanggal SWAB 2">
                                    </div>

                            </div>
                        </div>
                    </div> 

                      
                    <div class="form-group row hswab2" style="display: none;">
                        <label class="col-form-label col-lg-3 font-weight-bold">Hasil SWAB 2</label>
                        <div class="col-lg-9">
                            <div class="row">
                                <div class="col-md-6">
                                    <select name="hswab2" id="periksa" class="form-control select2"> 
                                            <option value="" selected>Pilih </option> 
                                            <option value="Negatif" >Negatif</option> 
											<option value="Positif">Positif</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div> 
 
                    <div class="form-group row tempat" style="display: none;">
                        <label class="col-form-label col-lg-3 font-weight-bold">Dirawat/Diperiksa di mana?  </label>
                        <div class="col-lg-9">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group form-group-feedback form-group-feedback-left">
                                        <input type="text" id="tempat" name="tempat" class="form-control form-control-lg" placeholder="Dirawat/Diperiksa di mana?">
                                        <div class="form-control-feedback form-control-feedback-lg">
                                            <i class="icon-user-tie "></i>
                                        </div> 
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> 
                                        
                    <div class="form-group row sketerangan">
                        <label class="col-form-label col-lg-3 font-weight-bold">Keterangan</label>
                        <div class="col-lg-9">
                            <div class="row">
                                <div class="col-md-10">
                                    <textarea id="keterangan" name="keterangan" class="form-control mb-3" rows="3" cols="1" placeholder="Keterangan..." disabled="disabled" required></textarea>
                                </div>
                            </div>
                        </div>
                    </div> 

                    <div class="col-md-10 ">
                        <div class="text-right">
                            <button type="submit" id="submit" class="btn btn-primary">Simpan Data <i class="icon-paperplane ml-2"></i></button> 
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

<script type="text/javascript">
    /* ------------------------------------------------------------------------------
*
*  # jQuery UI forms
*
*  Demo JS code for jqueryui_forms.html page
*
* ---------------------------------------------------------------------------- */
    var JqueryUiForms = function() {

        // Datepicker
        var _componentUiDatepicker = function() {
            if (!$().datepicker) {
                console.warn('Warning - jQuery UI components are not loaded.');
                return;
            }

            // From
            $('#tanggal').datepicker({
                numberOfMonths: 1,
                dateFormat: "yy-mm-dd", 
                isRTL: $('html').attr('dir') == 'rtl' ? true : false
            });

            $('#tanggal2').datepicker({
                numberOfMonths: 1,
                dateFormat: "yy-mm-dd",
                
                isRTL: $('html').attr('dir') == 'rtl' ? true : false
            });

            $('#tanggal3').datepicker({
                numberOfMonths: 1,
                dateFormat: "yy-mm-dd",
                
                isRTL: $('html').attr('dir') == 'rtl' ? true : false
            });
            

            $('#tanggal4').datepicker({
                numberOfMonths: 1,
                dateFormat: "yy-mm-dd",
                
                isRTL: $('html').attr('dir') == 'rtl' ? true : false
            });

            $('#tanggal5').datepicker({
                numberOfMonths: 1,
                dateFormat: "yy-mm-dd",
                
                isRTL: $('html').attr('dir') == 'rtl' ? true : false
            });

            
            $('#tanggal6').datepicker({
                numberOfMonths: 1,
                dateFormat: "yy-mm-dd",
                
                isRTL: $('html').attr('dir') == 'rtl' ? true : false
            });
            
            $('#tanggal7').datepicker({
                numberOfMonths: 1,
                dateFormat: "yy-mm-dd",
                
                isRTL: $('html').attr('dir') == 'rtl' ? true : false
            });

            
            $('#tanggal8').datepicker({
                numberOfMonths: 1,
                dateFormat: "yy-mm-dd",
                
                isRTL: $('html').attr('dir') == 'rtl' ? true : false
            });
            
            $('#tanggal10').datepicker({
                numberOfMonths: 1,
                dateFormat: "yy-mm-dd",
                
                isRTL: $('html').attr('dir') == 'rtl' ? true : false
            });


        };

        return {
            init: function() {
                _componentUiDatepicker();
            }
        }
    }();


    // Initialize module
    // ------------------------------

    document.addEventListener('DOMContentLoaded', function() {
        JqueryUiForms.init();
    });

</script>
<!-- /theme JS files -->


<script type="text/javascript">

    $(document).ready(function(){

        $('#nik').keyup(function(){ 
                var query = $(this).val();
                if(query.length >=10)
                { 
                    var _token = $('input[name="_token"]').val();
                    $.ajax({
                        url:"<?php echo e(url('kesehatan/isikan')); ?>",
                        method:"POST",
                        dataType: 'json',
                        data:{query:query, _token:_token},
                        success:function(data){

                            $('#nama').val(data[0].nama);  
                            $('#dep').val(data[0].dep);  
                            $('#subdep').val(data[0].subdep);  
                            $('#jabatan').val(data[0].jabatan);  
                            $('#pt').val(data[0].pt);    

                        }
                    });

                }
        });

        $('#kondisi').change(function(){
            var kondisi = $(this).val();
            if(kondisi == "Sakit"){
                
                $('.ssakit').show();
                $('.speriksa').show();
                $('.skerja').show();
                $('.sketerangan').show();
                $('.sdokter1').show();
                $('.sdokter2').show(); 
                $('.akhir').show(); 
                $('.tglmsakit').show(); 

				$('#periksa').removeAttr('disabled');  
				$('#sakit').removeAttr('disabled');   
				$('#kerja').removeAttr('disabled');   
                

                $('.rapid').hide();
                $('.tanggal_rapid').hide();
                $('.hrapid').hide();
                $('.tglkarantina').hide();
                $('.tglswab1').hide();
                $('.hswab1').hide();
                $('.tglswab2').hide();
                $('.hswab2').hide();
                $('.tempat').show();
                $('.tglmasuk').hide(); 
                
                $('#surat').attr('required', 'required');

			}
            else{
                $('#sakit').val(0).change();
				$('#sakit').attr('disabled','disabled');
		
                $('#periksa').val(0).change();
				$('#periksa').attr('disabled','disabled');
                $('#surat').val(0).change(); 			
				$('#surat').attr('disabled','disabled');	
                $('#kerja').val(0).change();
				$('#kerja').attr('disabled','disabled');
                $('#hari').val('');
				$(".tampilhari").hide(); 

                $('#keterangan').val(''); 
				$('#keterangan').attr('disabled','disabled');
                
                $('.sdokter1').hide();
                $('.sdokter2').hide(); 
                $('.akhir').hide(); 

                $('.rapid').hide();
                $('.tanggal_rapid').hide();
                $('.hrapid').hide();
                $('.tglkarantina').hide();
                $('.tglswab1').hide();
                $('.hswab1').hide();
                $('.tglswab2').hide();
                $('.hswab2').hide();
                $('.tempat').hide();
                $('.tglmasuk').hide();
                $('.tglmsakit').hide();
                
                
                $('#surat').removeAttr('required');
			}
        });
        $('#kerja').change(function(){
			var kerja = $(this).val();
            if(kerja != "Masuk Kerja" && kerja != ""){
				
				$(".tampilhari").show();
				$('#hari').removeAttr('disabled');  
				$('#hari').val('');   
				
			}else{
				$(".tampilhari").hide();
				$('#hari').val(''); 
				$('#hari').attr('disabled','disabled');
			}
		});
        $('#sakit').change(function(){
            var sakit = $(this).val();
				$('#keterangan').removeAttr('disabled');  
				$('#periksa').removeAttr('disabled');  
				$('#kerja').removeAttr('disabled');

                if(sakit == 'Positif' || sakit == 'PDP' || sakit == 'ODP' ){ 
                    $('.rapid').show();
                $('.tanggal_rapid').show();
                    $('.hrapid').show();
                    $('.tglkarantina').show();
                    $('.tglswab1').show();
                    $('.hswab1').show();
                    $('.tglswab2').show();
                    $('.hswab2').show();
                    $('.tempat').show();
                    $('.tglmasuk').show();
                    $('.tglmsakit').show(); 
                }else{
                    $('.rapid').hide();
                $('.tanggal_rapid').hide();
                    $('.hrapid').hide();
                    $('.tglkarantina').hide();
                    $('.tglswab1').hide();
                    $('.hswab1').hide();
                    $('.tglswab2').hide();
                    $('.hswab2').hide();
                    $('.tempat').show();
                    $('.tglmasuk').hide(); 
                    $('.tglmsakit').show(); 
                }

		});
		
		$('#periksa').change(function(){
			var periksa = $(this).val();
		     if( periksa == "Sudah"){
				 $(".tampilsurat").show();
				$('#surat').removeAttr('disabled');  
                
				$('#tempat').attr('required','required');
			}else{
				 $(".tampilsurat").hide();
				$('#surat').val(''); 	
				$('#surat').removeAttr('disabled');  
				$('#tempat').removeAttr('required');
			}

		});
        
		$('#surat').change(function(){
			var surat = $(this).val();
		    if( surat == "Ada"){  
                $('#tanggal5').attr('required', 'required');
                $('#tanggal6').attr('required', 'required');
                $('#tanggal7').attr('required', 'required');
                $('#tanggal10').attr('required', 'required');   
			}else{
                $('#tanggal5').removeAttr('required');
                $('#tanggal6').removeAttr('required');
                $('#tanggal7').removeAttr('required');
                $('#tanggal10').removeAttr('required');   
				 
			}

		});
		
		
       $("#formkesehatan").submit(function(){ 

            var nik = $('#nik').val(); 
            var kondisi = $('#kondisi').val(); 
            var sakit = $('#sakit').val(); 
            var keterangan = $('#keterangan').val();  
			var hari =  $('#hari').val();		

            var periksa = $('#periksa').val(); 

            var kerja = $('#kerja').val(); 
		 
            if(nik == ''){
                Swal.fire({
                    title: "Pesan kesalahan",
                    text: "Lengkapi pengisian form",
                    icon: "error",
                });
            
            }else if(kondisi == "Sakit" && sakit == ""){
                Swal.fire({
                    title: "Pesan kesalahan",
                    text: "Isi Sakit yang diderita",
                    icon: "error",
                });
            }else if(kondisi == "Sakit" && periksa == ""){
                Swal.fire({
                    title: "Pesan kesalahan",
                    text: "Isi Form Sudah Periksa",
                    icon: "error",
                });
            }else if(kondisi == "Sakit" && kerja == ""){
                Swal.fire({
                    title: "Pesan kesalahan",
                    text: "Isi Form Masuk Kerja",
                    icon: "error",
                });
            }else if(kondisi== "Sakit" && kerja != "Masuk Kerja" && kerja != "" && hari == ""){
                Swal.fire({
                    title: "Pesan kesalahan",
                    text: "Isi Form Jumlah Hari Sakit",
                    icon: "error",
                });
            }else if(kondisi == "Sakit" && keterangan == ""){
                Swal.fire({
                    title: "Pesan kesalahan",
                    text: "Isi Keterangan",
                    icon: "error",
                });
            }else{
                    
                            var _token = $('input[name="_token"]').val();
                            $.ajax({
                                url:"<?php echo e(url('kesehatan/simpan')); ?>",
                                method:"POST",
                                data:$('#formkesehatan').serialize(),
                                beforeSend: function(){
                                    loaderOpen("Loading Prosses");
                                },
                                success:function(data){
                                    loaderClose();
                                    
                                    Swal.fire({
                                        title: "Pesan informasi",
                                        text:  data.msg,
                                        icon: "success",
                                        }).then(function() {
                                        window.location = "<?php echo e(url('kesehatan')); ?>";
                                    }); 
                                        

                                },
                                error: function(){
                                    loaderClose();
                                     
                                    Swal.fire({
                                        title: "Pesan informasi",
                                        text:  data.msg,
                                        icon: "error",
                                        }).then(function() {
                                        window.location = "<?php echo e(url('kesehatan')); ?>";
                                    });
                                        
                                    
                                }
                            });
                            
                
            }
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

<?php echo $__env->make('admin.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/kesehatan/zarvisystem/Modules/Kesehatan/Providers/../Resources/views/index.blade.php ENDPATH**/ ?>