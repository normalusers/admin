@extends('Admin.publicModel.publicModel')
@section('title','控制器方法权限列表')
@section('main')
<link rel="stylesheet" href="http://cdn.bootcss.com/bootstrap/3.3.4/css/bootstrap.min.css">
<div class="mws-panel grid_8">
    <div class="mws-panel-header">
        <span>
            <i class="icon-table">
            </i>
            Default Data Table
        </span>
    </div>
    <div class="mws-panel-body no-padding">
        <div id="DataTables_Table_0_wrapper" class="dataTables_wrapper" role="grid">

            <table class="mws-datatable mws-table dataTable" id="DataTables_Table_0"
            aria-describedby="DataTables_Table_0_info">
                <thead>
                    <tr role="row">
                        <th class="sorting_asc" role="columnheader" tabindex="0" aria-controls="DataTables_Table_0"
                        rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending"
                        style="width: 185px;">
                            ID
                        </th>
                        <th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_0"
                        rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending"
                        style="width: 250px;">
                            权限名称
                        </th>
                        <th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_0"
                        rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending"
                        style="width: 250px;">
                            控制器
                        </th>
                        <th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_0"
                        rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending"
                        style="width: 250px;">
                            方法名称
                        </th>

                        <th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_0"
                        rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending"
                        style="width: 120px;">
                            操作
                        </th>
                    </tr>
                </thead>
                <tbody role="alert" aria-live="polite" aria-relevant="all">
                    @foreach($res as $value)
                        <tr class="old">
                            <td>{{$value -> id}}</td>
                            <td>{{$value -> funname}}</td>
                            <td>{{$value -> ctlname}}</td>
                            <td>{{$value -> method}}</td>
                            <td>
                                <a href=""><i class="btn btn-success">修改</a></i> <b>|</b>
                                <form action="" method="post">
                                    {{csrf_field()}}
                                    {{method_field('DELETE')}}
                                      <input type="submit" class="btn btn-default"  value="删除">
                                </form>
                            </td>
                        </tr>
                        @endforeach
                </tbody>
            </table>
            <div class="dataTables_info" id="DataTables_Table_0_info">
                                 {{$res -> render()}}
            </div>
            <div class="pagination" id="pages">

                </a>
            </div>
        </div>
    </div>
</div>
@endsection