@if(count($arr))
@foreach($arr as $row)
<div class="bundle  bundle-last">
  <div class="clear"></div>
  <div class="bundle-main">
    <ul class="item-content clearfix">
      <li class="td td-chk">
        <div class="cart-checkbox">
          <input class="check" id="J_CheckBox_170037950254" name="items" value="{{$row['id']}}" type="checkbox">
          <label for="J_CheckBox_170037950254"></label>
        </div>
      </li>
      <li class="td td-item">
        <div class="item-pic">
          <a href="#" target="_blank" data-title="美康粉黛醉美东方唇膏口红正品 持久保湿滋润防水不掉色护唇彩妆" class="J_MakePoint" data-point="tbcart.8.12">
            <img src="{{ltrim($row['pic'] , '\.')}}" style="width: 100px;" alt="">
          </div>
          <div class="item-info">
            <div class="item-basic-info">
              <a href="#" target="_blank" title="美康粉黛醉美唇膏 持久保湿滋润防水不掉色" class="item-title J_MakePoint" data-point="tbcart.8.11">{{$row['name']}}</a>
            </div>
          </div>
        </li>
        <li class="td td-info">
          <div class="item-props item-props-can">
            <span class="sku-line">描述:{!!$row['descr']!!}</span>
            <span class="sku-line">包装：裸装</span>
            <i class="theme-login am-icon-sort-desc"></i>
          </div>
        </li>
        <li class="td td-price">
          <div class="item-price price-promo-promo">
            <div class="price-content">
              <div class="price-line">
                <em class="J_Price price-now" tabindex="0">单价{{$row['price']}}</em>
              </div>
            </div>
          </div>
        </li>
        <li class="td td-amount">
          <div class="amount-wrapper ">
            <div class="item-amount ">
              <div class="sl">
                <a href="javascript:void(0)" class="btn btn-info updatee" name="{{$row['id']}}">-</a>
                <input class="text_box" type="text" value="{{$row['num']}}" style="width:30px;" />
                <a href="javascript:void(0)" name="{{$row['id']}}" class="btn btn-info update">+</a>
              </div>
            </div>
          </div>
        </li>
        <li class="td td-sum">
          <div class="td-inner">
            <em tabindex="0" class="J_ItemSum number">{{$row['price']*$row['num']}}</em>
          </div>
        </li>
        <li class="td td-op">
          <div class="td-inner">
            <a title="移入收藏夹" class="btn-fav" href="#">
            移入收藏夹</a>
            <form action="/homecart/{{$row['id']}}" method="post">
              {{csrf_field()}}
              {{method_field('DELETE')}}
              <button type="submit" class="delete">删除</button>
            </form>
          </div>
        </li>
      </ul>




    </div>
  </div>
  @endforeach
  @else
  购物车空空如也
  @endif