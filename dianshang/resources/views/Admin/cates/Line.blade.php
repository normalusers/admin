@extends('Admin.publicModel.publicModel')
@section('title','分类产品列表')
@section('main')
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

            <div class="dataTables_filter" id="DataTables_Table_0_filter">
                <form action="/cates" method="get">
                    <label>  Search:</label>
                        <input type="text" name="keyword" value="{{$keyword}}">
                        <input type="submit" value="查找">
                    </form>

            </div>
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
                            Name
                        </th>
                        <th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_0"
                        rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending"
                        style="width: 234px;">
                            Pid                        </th>
                        <th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_0"
                        rowspan="1" colspan="1" aria-label="Engine version: activate to sort column ascending"
                        style="width: 160px;">
                            path
                        </th>
                        <th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_0"
                        rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending"
                        style="width: 120px;">
                            操作
                        </th>
                    </tr>
                </thead>
                <tbody role="alert" aria-live="polite" aria-relevant="all">
                   @foreach($data as $value)
                        <tr class="old">
                            <td>{{$value -> id}}</td>
                            <td>{{$value -> name}}</td>
                            <td>{{$value -> pid}}</td>
                            <td>{{$value -> path}}</td>
                            <td> <a href="/cates/{{$value -> id}}/edit"><i class="icon-edit"></a></i> <b>|</b>
                                <form action="/cates/{{$value -> id}}" method="post">
                                    {{csrf_field()}}
                                    {{method_field('DELETE')}}
                                      <input type="submit" class="btn btn-default"  value="删除">
                                </form>
                              <!--   <a href="#"><i class="icon-trash"></i></a> -->
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            <div class="dataTables_info" id="DataTables_Table_0_info">
                分页
            </div>
            <div class="pagination" id="pages">

                </a>
            </div>
        </div>
    </div>
</div>
@endsection