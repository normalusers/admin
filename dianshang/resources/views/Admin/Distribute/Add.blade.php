@extends('Admin.publicModel.publicModel')
@section('title','用户权限添加页面')
@section('main')
<form action='/distribute' method="post"  class="mws-form wzd-default wizard-form wizard-form-horizontal">
    <fieldset class="wizard-step mws-form-inline" data-wzd-id="wzd_1deefsllefuoevj11j6_0"
    style="display: block;">
    {{csrf_field()}}
        <div id="" class="mws-form-row">
            <label class="mws-form-label">
                权限名
                <span class="required">
                    *
                </span>
            </label>
            <div class="mws-form-item">
                <input type="text" name="funname" value="" class="small">
            </div>
        </div>
        <div id="" class="mws-form-row">
            <label class="mws-form-label">
                控制器
                <span class="required">
                    *
                </span>
            </label>
            <div class="mws-form-item">
                <input type="text" name="ctlname" value="" class="small">
            </div>
        </div>
        <div id="" class="mws-form-row">
            <label class="mws-form-label">
                方法名
                <span class="required">
                    *
                </span>
            </label>
            <div class="mws-form-item">
                <input type="text" name="method" value="" class="small">
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