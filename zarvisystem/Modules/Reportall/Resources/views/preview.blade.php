@extends('admin.layout')

@section('styles')

@stop
@section('content')

    <!-- Basic initialization -->
<div class="col-md-8 offset-md-2">
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
                <th rowspan="2" >No.</th>
                <th rowspan="2">Manager</th>
                <th rowspan="2">Total Personil</th>
                <th colspan="2"> Sudah Input</th>
                <th colspan="2"> Belum Input</th>
            </tr>
            <tr>
                <th>Total</th>
                <th>%</th>
                <th>Total</th>
                <th>%</th>

            </tr>
            </thead>
            <tbody>
            <?php $no=1;
$a = 0;
			$b = 0;
 ?>
            @foreach($data as $r)

		@php 
		$p = $r->TOTAL_BELUM / $r->TOTAL_KARYAWAN;
		if($p >= 40){
			$style = "style='background-color:pink;'";
		}elseif(($p < 40) && ($p > 10)){
			$style = "style='background-color:yellow;'";
		}else{
			$style = "";
		}
		@endphp

                <tr {{ $style }}>
                    <td class="text-center">{{ $no }}</td>
                    <td class="text-left">{{ $r->MANAGER }}</td>
                    <td class="text-center">{{ $r->TOTAL_KARYAWAN }}</td>
                    <td class="text-center">{{  $r->TOTAL_KARYAWAN - $r->TOTAL_BELUM }}</td>
                    <td class="text-center">{{  round(( $r->TOTAL_KARYAWAN - $r->TOTAL_BELUM) / $r->TOTAL_KARYAWAN *100 ,2) }}</td>
                    <td class="text-center">{{  $r->TOTAL_BELUM }}</td>
                    <td class="text-center">{{  round($r->TOTAL_BELUM / $r->TOTAL_KARYAWAN *100,2) }}</td>
                    
                </tr>
                <?php $no++; 

$a += $r->TOTAL_KARYAWAN;
					$b += $r->TOTAL_BELUM;
?>
            @endforeach
            </tbody>
<tfoot>
			 <tr style="background-color:yellow; font-weight:bold">
                    
                    <td class="text-center" colspan="2">Total</td>
                    <td class="text-center">{{ number_format($a)  }}</td>
                    <td class="text-center">{{  number_format($a - $b) }}</td>
                    <td class="text-center">{{  round(( $a - $b ) / $a *100 ,2) }}</td>
                    <td class="text-center">{{  number_format($b) }}</td>
                    <td class="text-center">{{  round($b / $a *100,2) }}</td>
                    
                </tr>
				</tfoot>
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
