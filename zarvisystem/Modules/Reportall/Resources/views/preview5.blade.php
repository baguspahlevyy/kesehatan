@extends('admin.layout')

@section('styles')

@stop
@section('content')

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
            
            @foreach($data as $r)
                <tr>  
                    <td class="text-center">{{ $r->NIK }}</td>                 
                    <td class="text-left">{{ $r->NAMA }}</td>                 
             
                          
                    <td class="text-center">{{ $r->DEP }}</td>               
                    <td class="text-center">{{ $r->SUBDEP }}</td>  
           
                    <td class="text-center">{{ $r->JABATAN }}</td>  
                    <td class="text-left">{{ $r->DBM }}</td>                 
                    <td class="text-left">{{ $r->MANAGER }}</td>                 
                    <td class="text-left">{{ $r->SUPERVISOR }}</td>                 
                    <td class="text-center">{{ $r->SEHAT }}</td>                 
                    <td class="text-center">{{ $r->SAKITx }}</td>                 
                    <td class="text-center">{{ $r->PDP }}</td>                 
                    <td class="text-center">{{ $r->Positif }}</td>                 
			          
                    <td class="text-center">{{ $r->JENIS_SAKIT }}</td>             
		   <td class="text-center">{{ $r->PERIKSA }} </td>
			        
                    <td class="text-center">{{ $r->SURAT }}</td>             
                    <td class="text-center">{{ $r->KERJA }}</td>      
			<td class="text-center"> {{ $r->HARI }} </td>
                    <td class="text-center">{{ $r->KETERANGAN }}</td>
                </tr>
            
            @endforeach
            </tbody>
        </table>
    </div>
    <!-- /basic initialization -->
@stop
@section('scripts')
    <!-- Theme JS files-->
    <script src="{{ asset('global_assets/js/plugins/tables/datatables/datatables.min.js') }}"></script>
    <script src="{{ asset('global_assets/js/plugins/forms/selects/select2.min.js') }}"></script>
    <script src="{{ asset('global_assets/js/plugins/tables/datatables/extensions/jszip/jszip.min.js') }}"></script>
    <script src="{{ asset('global_assets/js/plugins/tables/datatables/extensions/pdfmake/pdfmake.min.js') }}"></script>
    <script src="{{ asset('global_assets/js/plugins/tables/datatables/extensions/pdfmake/vfs_fonts.min.js') }}"></script>
    <script src="{{ asset('global_assets/js/plugins/tables/datatables/extensions/buttons.min.js') }} "></script>
    <script src="{{ asset('global_assets/js/demo_pages/datatables_extension_buttons_html5.js') }}"></script>
    
@stop
