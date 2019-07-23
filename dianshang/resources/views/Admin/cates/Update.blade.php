@extends('Admin.publicModel.publicModel')
@section('title' ,'分级更改界面')
@section('main')
    <form action='/cates/{{$data -> id}}' method="post"  class="mws-form wzd-default wizard-form wizard-form-horizontal">
    <fieldset class="wizard-step mws-form-inline" data-wzd-id="wzd_1deefsllefuoevj11j6_0"
    style="display: block;">
    {{method_field('PUT')}}
    {{csrf_field()}}
        <div id="" class="mws-form-row">
            <label class="mws-form-label">
                需要修改的产品名字
                <span class="required">
                    *
                </span>
            </label>
            <div class="mws-form-item">
                <input type="text" name="name" value="{{$data -> name}}" class="small">
            </div>
        </div>

         <div class="mws-form-row bordered">
            <label class="mws-form-label">
                修改所属父类
            </label>
            <div class="mws-form-item">
                <select class="small" name="selectname" value="" placehod>
                    <option value="0">
                        请选择(不选择的默认不加更改)
                    </option>
                    @foreach($res as $value)
                    <option value="{{$value -> id}}">
                        {{$value -> name}}
                    </option>
                    @endforeach
                </select>
            </div>

        </div>
        <div class="mws-form-row">
            <div class="mws-form-item" style="margin-left: 30%;">
                <input type="submit" value="确认更改" >
            </div>
        </div>

    </fieldset>

</form>
@endsection