@extends('Admin.publicModel.publicModel')
@section('title','公告列表')
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

            <table class="mws-datatable mws-table dataTable" id="DataTables_Table_0"
            aria-describedby="DataTables_Table_0_info">
                <thead>
                    <tr role="row">
                        <th class="sorting_asc" role="columnheader" tabindex="0" aria-controls="DataTables_Table_0"
                        rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending"
                        style="width: 185px;">
                            操作
                        </th>
                        <th class="sorting_asc" role="columnheader" tabindex="0" aria-controls="DataTables_Table_0"
                        rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending"
                        style="width: 185px;">
                            ID
                        </th>
                        <th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_0"
                        rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending"
                        style="width: 250px;">
                            公告标题
                        </th>
                        <th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_0"
                        rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending"
                        style="width: 250px;">
                            公告作者
                        </th>
                        <th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_0"
                        rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending"
                        style="width: 250px;">
                            公告图片
                        </th>
                        <th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_0"
                        rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending"
                        style="width: 250px;">
                            公告描述
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
                            <td ><input type="checkbox" name="" value="{{$value['id']}}"></td>
                            <td>{{$value['id']}}</td>
                            <td>{{$value['title']}}</td>
                            <td>{{$value['editor']}}</td>
                            <td><img src="{{$value['thumb']}}" alt=""></td>
                            <td>{!! $value['desc'] !!}</td>
                            <td>
                                <a href=""><i class="btn btn-success">修改</a></i> <b>|</b>
                            </td>
                        </tr>
                        @endforeach
                </tbody>
            </table>
            <div class="dataTables_info" id="DataTables_Table_0_info">
               <button class="btn btn-default allchoose">全选</button>
               <button class="btn btn-default turnchoose">反选</button>
               <button class="btn btn-error del">删除</button>
            </div>
            <div class="pagination" id="pages">

                </a>
            </div>
        </div>
    </div>
</div>
@endsection
@section('myjs')
<script type="text/javascript">
    $(".allchoose").toggle(function() {
        $("#DataTables_Table_0").find('tr').each(function(){
            $(this).find(':checkbox').attr('checked' , true);
        });
    }, function() {
        $("#DataTables_Table_0").find('tr').each(function(){
            $(this).find(':checkbox').attr('checked' , false);
        });
    });
    $(".turnchoose").on('click' ,function(){
        $("#DataTables_Table_0").find('tr').each(function(){
            if($(this).find(':checkbox').attr('checked')){
                $(this).find(':checkbox').attr('checked' , false);
            }else{
                $(this).find(':checkbox').attr('checked' , true);
            }
        });
    });
    var delid = [];
    $(".del").click(function(){
        $(":checkbox").each(function(){
            if($(this).attr('checked')){
                delid.push($(this).val());
            }
        });
        $.get('/del', {delid: delid}, function(data) {
            if(delid.length == 0){
                alert('至少选择一个数据');
            }
            if(data.length > 0){
                for (var i = 0; i <delid.length; i++) {
                    $("input[value = '"+ delid[i] +"']").parents('tr').remove();
                }
                delid=[];
            }
        });
    });


</script>
@endsection