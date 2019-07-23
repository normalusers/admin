@extends('Admin.publicModel.publicModel')
@section('title','会员添加页面')
@section('main')
<form action='/member' method="post"  class="mws-form wzd-default wizard-form wizard-form-horizontal">
    <fieldset class="wizard-step mws-form-inline" data-wzd-id="wzd_1deefsllefuoevj11j6_0"
    style="display: block;">
    {{csrf_field()}}
        <div id="" class="mws-form-row">
            <label class="mws-form-label">
                会员名称
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
                会员邮箱
                <span class="required">
                    *
                </span>
            </label>
            <div class="mws-form-item">
                <input type="text" name="email" value="" class="small">
            </div>
        </div>
        <div id="" class="mws-form-row">
            <label class="mws-form-label">
                会员电话
                <span class="required">
                    *
                </span>
            </label>
            <div class="mws-form-item">
                <input type="text" name="phone" value="" class="small">
            </div>
        </div>
        <div id="" class="mws-form-row">
            <label class="mws-form-label">

                <span class="required">
                    *
                </span>
            </label>
            <div class="mws-form-item">
                 <input type="submit"   value="确认添加" class="small">

            </div>
        </div>





    </fieldset>

</form>
@endsection