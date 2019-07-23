@extends('Admin.publicModel.publicModel')
@section('title','用户权限添加页面')
@section('main')
<form action='/user' method="post"  class="mws-form wzd-default wizard-form wizard-form-horizontal">
    <fieldset class="wizard-step mws-form-inline" data-wzd-id="wzd_1deefsllefuoevj11j6_0"
    style="display: block;">
    {{csrf_field()}}
        <div id="" class="mws-form-row">
            <label class="mws-form-label">
                管理员名称
                <span class="required">
                    *
                </span>
            </label>
            <div class="mws-form-item">
                <input type="text" name="username" value="" class="small">
            </div>
        </div>
        <div id="" class="mws-form-row">
            <label class="mws-form-label">
                密码
                <span class="required">
                    *
                </span>
            </label>
            <div class="mws-form-item">
                <input type="password" name="password" value="" class="small">
            </div>
        </div>
        <div id="" class="mws-form-row">
            <label class="mws-form-label">

                <span class="required">
                    *
                </span>
            </label>
            <div class="mws-form-item">
                 <input type="submit"   value="提交" class="small">

            </div>
        </div>





    </fieldset>

</form>
@endsection