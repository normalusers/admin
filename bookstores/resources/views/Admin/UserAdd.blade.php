@extends('/public/publicModel')
@section('title' , '用户添加');
@section('main')
<form action='/userMag' method="post"  class="mws-form wzd-default wizard-form wizard-form-horizontal">
    <fieldset class="wizard-step mws-form-inline" data-wzd-id="wzd_1deefsllefuoevj11j6_0"
    style="display: block;">
    {{csrf_field()}}
        <div id="" class="mws-form-row">
            <label class="mws-form-label">
                用户名
                <span class="required">
                    *
                </span>
            </label>
            <div class="mws-form-item">
                <input type="text" name="username" value="{{old('username')}}" class="small">
            </div>
        </div>

        <div id="" class="mws-form-row">
            <label class="mws-form-label">
                用户密码
                <span class="required">
                    *
                </span>
            </label>
            <div class="mws-form-item">
                <input type="password" name="password"  class="small">
            </div>
        </div>
        <div id="" class="mws-form-row">
            <label class="mws-form-label">
                确认密码
                <span class="required">
                    *
                </span>
            </label>
            <div class="mws-form-item">
                <input type="password" name="repassword" class="small">
            </div>
        </div>
        <div class="mws-form-row">
            <label class="mws-form-label">
                Email
                <span class="required">
                    *
                </span>
            </label>
            <div class="mws-form-item">
                <input type="email" name="email" value="{{old('email')}}" class="small">
            </div>
        </div>
        <div class="mws-form-row">
            <label class="mws-form-label">
                联系方式
                <span class="required">
                    *
                </span>
            </label>
            <div class="mws-form-item">
                <input type="number" name="phone" value="{{old('phone')}}" class="small">
            </div>
        </div>
        <div class="mws-form-row">
            <div class="mws-form-item" style="margin-left: 30%;">
                <input type="submit" value="添加用户" >
            </div>
        </div>

    </fieldset>

</form>
@endsection