@extends('admin.layout')

@section('styles')

@stop
@section('content')
<div class="col-md-10 offset-md-1">
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
        <table class="table table-bordered" >
            <thead>
            <tr style="background-color: yellow;">
                <th>Cabang </th>
                <th>Total Karyawan</th>
                <th>Sudah Input</th>
                <th> %Sudah Input</th>
                <th> Belum Input</th>
                <th> %Belum Input</th>
            </tr>
            </thead>
            <tbody>
            
            @foreach($data as $r)
                <tr> 
                    <td class="text-left">JEMBER</td>
                    <td class="text-center">{{ number_format($r->TOTAL_KARYAWAN) }}</td>
                    <td class="text-center">{{  number_format($r->TOTAL_KARYAWAN - $r->TOTAL_BELUM) }}</td>
                    <td class="text-center">{{  round(( $r->TOTAL_KARYAWAN - $r->TOTAL_BELUM) / $r->TOTAL_KARYAWAN *100 ,2) }}</td>
                    <td class="text-center">{{  number_format($r->TOTAL_BELUM) }}</td>
                    <td class="text-center">{{  round($r->TOTAL_BELUM / $r->TOTAL_KARYAWAN *100,2) }}</td>                    
                </tr>
            
            @endforeach
            </tbody>
        </table>
</div>
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
