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

        <table class="table">
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
                <th>> 14</th>
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
					@if($dept <> $r->DEP)
						@php $dept = $r->DEP ; $no = "1"; @endphp
						<td class="text-center">{{ $r->DEP }}</td>     
					@else 
						<td class="text-center"></td>     
					@endif
                    <td class="text-center">{{$no }}</td>
                    <td class="text-center">{{ $r->NAMA }}</td>     
                    <td class="text-center">{{ $r->SAKIT }}</td>                 
                    <td class="text-center">{{ $r->PDP }}</td>                        
                    <td class="text-center">{{ $r->POSITIF }}</td>                 
					
					@if($r->HARI >= 1 && $r->HARI <= 3)
						<td class="text-center"> &#10004;</td> 
					@else
						<td class="text-center"> </td>                 
					@endif
					
					@if($r->HARI >= 4 && $r->HARI <= 7)
						<td class="text-center"> &#10004;</td> 
					@else
						<td class="text-center"> </td>                 
					@endif                
					@if($r->HARI >= 8 && $r->HARI <= 14)
						<td class="text-center"> &#10004;</td> 
					@else
						<td class="text-center"> </td>                 
					@endif                        
					@if($r->HARI > 14 )
						<td class="text-center"> &#10004;</td> 
					@else
						<td class="text-center"> </td>                 
					@endif       
                    <td class="text-center">{{ $r->KETERANGAN }}</td>                 
                </tr>
				@php $no++; @endphp
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
