@foreach($arr as $row)
@if(!empty($row))
@foreach($row as $a)
<div class="goods_item_list">
    <div class="goodlist_content">
        <a href="#"><img src="{{$a -> pic}}" alt=""></a>
        <p class="good_title"><a href="#">{{$a -> sname}}</a></p>
        <p class="good_desc">{!!$a -> descr!!}</p>
        <p class="good_price">￥{{$a -> price}}</p>
    </div>
</div>
@endforeach
@else
<?php echo '';?>
@endif
@endforeach
