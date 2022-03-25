@extends('dashboards.admins.layouts.admin-dash-layout')
@section('title','Dashboard')

@section('content')
<div class="card">
    <div class="card-header">
        <h3 class="card-title">Barcha Hujjatlar</h3>
    </div>

    <div class="card-body">
        <div id="example1_wrapper" class="dataTables_wrapper dt-bootstrap4">
            <div class="row">
                
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <table id="example1" class="table table-bordered table-striped dataTable dtr-inline"
                        aria-describedby="example1_info">
                        <thead>
                            <tr>
                                <th class="sorting sorting_asc" tabindex="0" aria-controls="example1" rowspan="1"
                                    colspan="1" aria-sort="ascending"
                                    aria-label="Rendering engine: activate to sort column descending">№
                                </th>
                                <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1"
                                    aria-label="Browser: activate to sort column ascending">Tartib Raqami</th>
                                <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1"
                                    aria-label="Platform(s): activate to sort column ascending">Zavod Raqami</th>                                
                                <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1"
                                    aria-label="CSS grade: activate to sort column ascending">Amallar</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if(('$all_data'))

                                @foreach($all_data as $data)
                            <tr>
                                <td class="dtr-control sorting_1" tabindex="0">{{$data->id}}</td>                                
                                <td>{{$data->tartib_raqami}}</td>
                                <td>{{$data->nomlanishi_zavod_raqami}}</td>                               
                                <td>
                                    <a href="#" class="btn btn-warning" ><i class="fa fa-edit" title="Tahrirlash"></i></a>                                   
                                    <a href="{{ route('admin.download_pdf',['id'=>$data->id])}}" class="btn btn-info" ><i class="fa fa-download" title="Printer"></i></a>                                  
                                    <a href="#" class="btn btn-danger" ><i class="fa fa-trash" title="O'chirish"></i></a>
                                   
                                </td>
                            </tr>
                                @endforeach
                            @endif
                           
                        </tbody>
                        <tfoot>
                            <tr>
                                <th rowspan="1" colspan="1">Rendering engine</th>
                                <th rowspan="1" colspan="1">Browser</th>
                                <th rowspan="1" colspan="1">Platform(s)</th>
                                <th rowspan="1" colspan="1">Engine version</th>                                
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>            
        </div>
    </div>

</div>

@endsection