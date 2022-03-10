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
            @php 
				$dept = "" ;
				$no = "1" ;
			
			@endphp
            @foreach($data as $r)
                <tr>  
                    <td class="text-center">Jember</td>        
					@if($dept <> $r->dep)
						@php $dept = $r->dep ;  $no = "1"; @endphp
						<td class="text-left">{{ $r->dep }}</td>     
					@else 
						<td class="text-left"></td>     
					@endif
            <td class="text-center">{{ $r->JABATAN }}</td> 
			<td class="text-center">{{$no }}</td>
            <td class="text-center">{{ $r->NIK }}</td>     
            <td class="text-left">{{ $r->NAMA }}</td>     
            <td class="text-center">{{ $r->tanggal_sakit }}</td>     
            <td class="text-center"></td>     
            <td class="text-center"></td>                    
                    <td class="text-center">{{ $r->PDP }}</td>                 
                                    
                    <td class="text-center">{{ $r->POSITIF }}</td> 
                    
                    <td class="text-center">{{ $r->sakit }}</td>                       
					
		@if($r->hari >= 1 && $r->hari <= 3)
						<td class="text-center"> &#10004;</td> 
					@else
						<td class="text-center"> </td>                 
					@endif
					
					@if($r->hari >= 4 && $r->hari <= 7)
						<td class="text-center"> &#10004;</td> 
					@else
						<td class="text-center"> </td>                 
					@endif                
					@if($r->hari >= 8 && $r->hari <= 14)
						<td class="text-center"> &#10004;</td> 
					@else
						<td class="text-center"> </td>                 
					@endif                        
					@if($r->hari > 14 )
						<td class="text-center"> &#10004;</td> 
					@else
						<td class="text-center"> </td>                 
                    @endif
                              
                                    
                    <td class="text-center">{{ $r->sdokter1 }}</td>       
                    <td class="text-center">{{ $r->sdokter2 }}</td>      
                    <td class="text-center">{{ $r->rapid }}</td>     
                    <td class="text-center">{{ $r->tanggal_rapid }}</td>      
                    <td class="text-center">{{ $r->hrapid }}</td>      
                    <td class="text-center">{{ $r->tanggal_karantina }}</td>      
                    <td class="text-center">{{ $r->tanggal_swab1 }}</td>        
                    <td class="text-center">{{ $r->hswab1 }}</td>        
                    <td class="text-center">{{ $r->tanggal_swab2 }}</td>        
                    <td class="text-center">{{ $r->hswab2 }}</td>           
                    <td class="text-center">{{ $r->akhir }}</td>     
                    <td class="text-left">{{ $r->tempat }}</td>                 
                </tr>
				@php $no++; @endphp
            @endforeach
            </tbody>
        </table>
    </div>
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
