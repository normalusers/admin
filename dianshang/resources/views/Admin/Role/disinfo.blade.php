@extends('Admin.publicModel.publicModel')
@section('title','权限信息页面')
@section('main')
<form action="/roledis" method="post">
                {{csrf_field()}}
                <div id="" class="mws-form-row">
                    <label class="mws-form-label">
                        当前是管理员是
                        <span class="required" >
                            {{$data -> userMag}}
                        </span>
                        的个人信息
                    </label>
                </div>
                <div class="mws-form-row bordered">
                    <label class="mws-form-label">权限信息</label>
                    <div class="mws-form-item clearfix">
                        <ul class="mws-form-list inline">
                            @foreach($res as $value)
                            <input type="hidden" name="adminuser" value="{{$data -> id}}">
                            <li><input type="checkbox" name="rids[]"  value="{{$value -> id}}"   @if(in_array($value -> id, $arr)) checked @endif >  <label>{{$value -> funname}}</label>
                            </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
                <div id="" class="mws-form-row">
                    <label class="mws-form-label">
                        <span class="required">
                            *
                        </span>
                    </label>
                    <div class="mws-form-item">
                       <input type="submit"   value="分配权限" class="small">

                   </div>
               </div>
            </form>
@endsection