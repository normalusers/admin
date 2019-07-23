    @extends('Admin.publicModel.publicModel')
    @section('title','商品添加页面')
    @section('main')
    <form action='/shop' method="post"  class="mws-form wzd-default wizard-form wizard-form-horizontal" enctype="multipart/form-data">
        <fieldset class="wizard-step mws-form-inline" data-wzd-id="wzd_1deefsllefuoevj11j6_0"
        style="display: block;">
        {{csrf_field()}}
        <div id="" class="mws-form-row">
            <label class="mws-form-label">
                商品名称
                <span class="required">
                    *
                </span>
            </label>
            <div class="mws-form-item">
                <input type="text" name="name" value="" class="small">
            </div>
        </div>
        <div class="mws-form-row bordered">
            <label class="mws-form-label">
                名称
            </label>
            <div class="mws-form-item">
                <select class="small" name="cate_id" value="">
                    <option value="0">
                        请选择
                    </option>
                    @foreach($data as $value)
                    <option value="{{$value -> id}}">
                        {{$value -> name}}
                    </option>
                    @endforeach
                </select>
            </div>
        </div>
        <div class="mws-form-row bordered">
            <label class="mws-form-label">
                商品图片
            </label>
            <div class="mws-form-item">
                <input type="file" name="pic" value="" class="small">
            </div>
        </div>
        <div class="mws-form-row bordered">
            <label class="mws-form-label">
                商品描述
            </label>
            <div class="mws-form-item">
                <textarea name="descr" ></textarea>
            </div>
        </div>
        <div class="mws-form-row bordered">
            <label class="mws-form-label">
                商品数量
            </label>
            <div class="mws-form-item">
                <input type="text" name="number" value="" class="small">
            </div>
        </div>
         <div class="mws-form-row bordered">
            <label class="mws-form-label">
                商品单价
            </label>
            <div class="mws-form-item">
                <input type="text" name="price" value="" class="small">
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