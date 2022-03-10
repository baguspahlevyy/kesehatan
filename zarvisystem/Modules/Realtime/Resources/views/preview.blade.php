@extends('admin.layout')

@section('styles')

@stop
@section('content')

    <!-- Basic initialization -->
<div class="col-md-8 offset-md-2">
    <div class="card">
        <div class="card-header header-elements-inline">
            <h5 class="card-title">Laporan Sales Realtime<br/>
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
                <th >Manager</th> 
            </tr>
            
            </thead>
            <tbody>
            <?php $no=1; 
 ?>
            @foreach($data as $r) 

                <tr>
                    <td class="text-center">{{ $no }}</td>
                    <td class="text-left">{{ $r->kdtk }}</td>
                    <td class="text-center">{{ $r->nama }}</td>
                    <td class="text-center">{{ $r->amgr }}</td>
                    <td class="text-center">{{  $r->bersih}}</td>
                    <td class="text-center">{{  $r->margin}}</td>
                    
                </tr>
                <?php $no++; 
 
                ?>
            @endforeach
            </tbody>
<tfoot>
			 <tr style="background-color:yellow; font-weight:bold">
                    
                  
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
