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
            @foreach($data as $r)
                <tr>
                    <td class="text-center">{{ $no }}</td>
                    <td class="text-left">{{ $r->nik }}</td> 
                    <td class="text-left">{{ $r->nama }}</td> 
                    <td class="text-left">{{ $r->dep }}</td> 
                    <td class="text-left">{{ $r->subdep }}</td> 
                    <td class="text-left">{{ $r->jabatan }}</td> 
                    <td class="text-left">{{ $r->supervisor }}</td> 
                    <td class="text-left">{{ $r->manager }}</td> 
                </tr>
                <?php $no++; ?>
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
