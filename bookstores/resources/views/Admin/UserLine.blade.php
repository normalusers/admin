@extends('public.publicModel')
@section('title' , '用户列表')
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
            <div id="DataTables_Table_0_length" class="dataTables_length">
                <label>
                    Show
                            <form action="/userMag" method="get">
                                <input type="text" name="lineNum" value="{{$lineNum}}" style="width: 85px;">
                                <input type="submit" name=""submit value="更改行数">
                </label>
            </div>
            <div class="dataTables_filter" id="DataTables_Table_0_filter">
                    <label>  Search:</label>

                        <input type="text" name="searchName" value="{{$keyWord??''}}">
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
                            UserName
                        </th>
                        <th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_0"
                        rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending"
                        style="width: 234px;">
                            Email                        </th>
                        <th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_0"
                        rowspan="1" colspan="1" aria-label="Engine version: activate to sort column ascending"
                        style="width: 160px;">
                            Status
                        </th>
                        <th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_0"
                        rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending"
                        style="width: 120px;">
                            Phone
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
                            <td>{{$value -> status}}</td>
                            <td>{{$value -> phone}}</td>
                            <td> <a href="/userMag/{{$value -> id}}/edit"><i class="icon-edit"></a></i> <b>|</b> <a href="/userMag/{{$value -> id}}"><i class="icon-trash"></i></a></td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            <div class="dataTables_info" id="DataTables_Table_0_info">
                分页
            </div>
            <div class="pagination" id="pages">
               {{ $data -> appends($request) -> render()}}
                </a>
            </div>
        </div>
    </div>
</div>

@endsection

@section('myjs')
<!-- <script type="text/javascript">

    $("#updateLineNum").on('click',function(){

        var lineNim = $('#lineNim').val();
        $.ajax({
                url: "/userMag",
                method: "get",
                data: { "lineNim" : lineNim},
                dataType: "json",
                success: function success(data) {
                    if (data == lineNim) {

                    }else{
                        alert('修改失败');
                    }
                }


            })


    });

</script> -->
@endsection