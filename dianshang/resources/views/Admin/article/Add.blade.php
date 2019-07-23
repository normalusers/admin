@extends('Admin.publicModel.publicModel')
@section('title','公告添加页面')
@section('main')
<script type="text/javascript" charset="utf-8" src="/static/Admins/ueditor/ueditor.config.js"></script>
<script type="text/javascript" charset="utf-8" src="/static/Admins/ueditor/ueditor.all.min.js"> </script>
    <!--建议手动加在语言，避免在ie下有时因为加载语言失败导致编辑器加载失败-->
    <!--这里加载的语言文件会覆盖你在配置项目里添加的语言类型，比如你在配置项目里配置的是英文，这里加载的中文，那最后就是中文-->
<script type="text/javascript" charset="utf-8" src="/static/Admins/ueditor/lang/zh-cn/zh-cn.js"></script>
<form action='/article' method="post"  class="mws-form wzd-default wizard-form wizard-form-horizontal" enctype="multipart/form-data">
    <fieldset class="wizard-step mws-form-inline" data-wzd-id="wzd_1deefsllefuoevj11j6_0"
    style="display: block;">
    {{csrf_field()}}
        <div id="" class="mws-form-row">
            <label class="mws-form-label">
                公告标题
                <span class="required">
                    *
                </span>
            </label>
            <div class="mws-form-item">
                <input type="text" name="title" value="" class="small" style="width: 200px;">
            </div>
        </div>
        <div id="" class="mws-form-row">
            <label class="mws-form-label">
                公告作者
                <span class="required">
                    *
                </span>
            </label>
            <div class="mws-form-item">
                <input type="text" name="editor" value="" style="width: 200px;">
            </div>
        </div>
        <div id="" class="mws-form-row">
            <label class="mws-form-label">
                公告图片
                <span class="required">
                    *
                </span>
            </label>
            <div class="mws-form-item">
                <input type="file" name="thumb" value="" style="width: 200px;">
            </div>
        </div>

        <div id="" class="mws-form-row">
            <label class="mws-form-label">
                公告描述
                <span class="required">
                    *
                </span>
            </label>
            <div class="mws-form-item">
                 <script id="editor" type="text/plain" name="desc" style="width:750px;height:500px;"></script>
            </div>
        </div>

        <div id="" class="mws-form-row">
            <label class="mws-form-label">

                <span class="required">
                    *
                </span>
            </label>
            <div class="mws-form-item">
                 <input type="submit"   value="提交" class="small" style="width: 200px;">

            </div>
        </div>





    </fieldset>

</form>
@endsection
@section('myjs')
<script type="text/javascript">
    var ue = UE.getEditor('editor');
</script>
@endsection