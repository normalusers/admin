@extends('Admin.publicModel.publicModel')
@section('title','权限分配页面')
@section('main')
            <form action="/dis" method="post">
                {{csrf_field()}}
                <div id="" class="mws-form-row">
                    <label class="mws-form-label">
                        当前是用户
                        <span class="required" >
                            *
                        </span>
                        的个人信息
                    </label>
                </div>
                <div class="mws-form-row bordered">
                    <label class="mws-form-label">角色信息如下</label>
                    <div class="mws-form-item clearfix">
                        <ul class="mws-form-list inline">
                            @foreach($disrole as $value)
                            <input type="hidden" name="adminuser" value="{{$user -> id}}">
                            <li><input type="checkbox" name="rids[]"  value="{{$value -> id}}" @if(in_array($value -> id , $res)) checked @endif>  <label>{{$value -> userMag}}</label>
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
                       <input type="submit"   value="分配角色" class="small">

                   </div>
               </div>
            </form>
@endsection