@extends('Admin.publicModel.publicModel')
@section('title','会员列表')
@section('main')
<div class="mws-panel grid_8">
    <div class="mws-panel-header">
        <span>
            <i class="icon-table">
            </i>
            会员列表
        </span>
    </div>
    <div class="mws-panel-body no-padding">
        <div id="DataTables_Table_0_wrapper" class="dataTables_wrapper" role="grid">
            <div id="uid">
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
                            会员名称
                        </th>
                        <th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_0"
                        rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending"
                        style="width: 250px;">
                            邮箱
                        </th>
                        <th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_0"
                        rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending"
                        style="width: 250px;">
                            电话号码
                        </th>
                        <th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_0"
                        rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending"
                        style="width: 250px;">
                            是否激活
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
                            <td>{{$value -> username}}</td>
                            <td>{{$value -> email}}</td>
                            <td>{{$value -> phone}}</td>
                            <td>{{$value -> status}}</td>
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
            </div>
            <div class="dataTables_info" id="DataTables_Table_0_info">

            </div>
            <div class="pagination" id="pages">
                @foreach($pp as $value)
                <button class="btn btn-danger" onclick="page({{$value}})">{{$value}}</button>
                @endforeach

                </a>
            </div>
        </div>
    </div>
</div>

@endsection
@section('myjs')
<script type="text/javascript">
       function page(page){
            $.get('/member', {"page": page}, function(data) {
                $("#uid").html(data);
            });
       }


</script>
@endsection