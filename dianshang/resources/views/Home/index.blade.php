<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>LY小米商城 - 小米8、小米MIX 2S、红米6 Pro、小米电视官方网站</title>
    <!-- 页面关键字 -->
    <meta name="keywords" content="小米,小米8,小米7,红米5Plus,小米MIX2,小米商城" />
    <!-- 页面的描述 -->
    <meta name="description" content="小米商城直营小米公司旗下所有产品，囊括小米手机系列小米Note 3、小米8、小米MIX 2S，红米手机系列红米5 Plus、红米6 Pro，智能硬件，配件及小米生活周边，同时提供小米客户服务及售后支持。" />

    <!-- 收藏夹图标 -->
    <link rel="shortcut icon" href="/status/images/favicon.ico">

    <!-- 先引入重置的CSS样式文件 -->
    <link rel="stylesheet" href="/status/css/reset.css">

    <!-- 引入字体图标的css文件 -->
    <link rel="stylesheet" href="/status/css/iconfont.css">

    <!-- 引入当前页面的CSS文件 -->
    <link rel="stylesheet" href="/status/css/index.css">
</head>
<body>
    <div class="container">
        <!-- 顶部导航 start -->
        <div class="header_bar">
            <div class="header con_width">
                <!-- 左侧菜单 -->
                <div class="header_nav">
                    <ul>
                        <li><a href="#">小米商城</a></li>
                        <li><a href="#">MIUI</a></li>
                        <li><a href="#">IoT</a></li>
                        <li><a href="#">云服务</a></li>
                        <li><a href="#">金融</a></li>
                        <li><a href="#">有品</a></li>
                        <li><a href="#">小爱开放平台</a></li>
                        <li><a href="#">政企服务</a></li>
                        <li><a href="#">Select Region</a></li>
                    </ul>
                </div>
                <!-- 右侧购物车 -->
                <div class="header_shopcart">
                    <div class="shopcart_logo">
                        <a href="/homecart">
                            <i class="iconfont icon-cart"></i>
                            购物车（0）
                        </a>
                        <div class="shopcart-info">
                            <p>
                                购物车中还没有商品，赶紧选购吧!
                            </p>
                        </div>
                    </div>
                </div>
                <!--右侧登录、注册-->
                <div class="user-auction">
                    @if(session('homeloginuser'))
                    <ul>
                        <li><a href="">{{session('homeloginuser')}}用户</a></li>
                        <li><a href="/userlogin/create">登出</a></li>
                        <li><a href="#">消息通知</a></li>
                    </ul>
                    @else
                    <ul>
                        <li><a href="/userlogin">登录</a></li>
                        <li><a href="/register">注册</a></li>
                        <li><a href="#">消息通知</a></li>
                    </ul>
                    @endif
                </div>
            </div>
        </div>
        <!-- 顶部导航 end -->
        <!-- 主体导航 start -->
        <div class="main_nav con_width">
            <div class="logo">
                <img src="/status/images/mi-logo.png" alt="MIlogo" title="小米官网">
            </div>
            <div class="nav">
                <ul>
                    <li><a href="#">小米手机</a>
                        <div class="nav_item">
                            <div class="nav_item_con con_width">
                                <ul>
                                    <li>
                                        <label>新品</label>
                                        <a href="#" class="nav_item_con_img">
                                            <img src="/status/images/mix2320-220.png" />
                                        </a>
                                        <a href="#" class="nav_item_con_name">小米8</a>
                                        <p>2699元起</p>
                                    </li>
                                    <li>
                                        <label>新品</label>
                                        <a href="#" class="nav_item_con_img">
                                            <img src="/status/images/mix2320-220.png" />
                                        </a>
                                        <a href="#" class="nav_item_con_name">小米8</a>
                                        <p>2699元起</p>
                                    </li>
                                    <li>
                                        <label>新品</label>
                                        <a href="#" class="nav_item_con_img">
                                            <img src="/status/images/mix2320-220.png" />
                                        </a>
                                        <a href="#" class="nav_item_con_name">小米8</a>
                                        <p>2699元起</p>
                                    </li>
                                    <li>
                                        <label>新品</label>
                                        <a href="#" class="nav_item_con_img">
                                            <img src="/status/images/mix2320-220.png" />
                                        </a>
                                        <a href="#" class="nav_item_con_name">小米8</a>
                                        <p>2699元起</p>
                                    </li>
                                    <li>
                                        <label>新品</label>
                                        <a href="#" class="nav_item_con_img">
                                            <img src="/status/images/mix2320-220.png" />
                                        </a>
                                        <a href="#" class="nav_item_con_name">小米8</a>
                                        <p>2699元起</p>
                                    </li>
                                    <li>
                                        <label>新品</label>
                                        <a href="#" class="nav_item_con_img">
                                            <img src="/status/images/mix2320-220.png" />
                                        </a>
                                        <a href="#" class="nav_item_con_name">小米8</a>
                                        <p>2699元起</p>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </li>
                    <li><a href="#">红米</a></li>
                    <li><a href="#">电视</a></li>
                    <li><a href="#">笔记本</a>
                        <div class="nav_item">
                            <div class="nav_item_con con_width">
                                <ul>
                                    <li>
                                        <label>新品</label>
                                        <a href="#" class="nav_item_con_img">
                                            <img src="/status/images/bijiben320.jpg" />
                                        </a>
                                        <a href="#" class="nav_item_con_name">小米8</a>
                                        <p>2699元起</p>
                                    </li>
                                    <li>
                                        <label>新品</label>
                                        <a href="#" class="nav_item_con_img">
                                            <img src="/status/images/bijiben320.jpg" />
                                        </a>
                                        <a href="#" class="nav_item_con_name">小米8</a>
                                        <p>2699元起</p>
                                    </li>
                                    <li>
                                        <label>新品</label>
                                        <a href="#" class="nav_item_con_img">
                                            <img src="/status/images/bijiben320.jpg" />
                                        </a>
                                        <a href="#" class="nav_item_con_name">小米8</a>
                                        <p>2699元起</p>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </li>
                    <li><a href="#">盒子</a></li>
                    <li><a href="#">新品</a></li>
                    <li><a href="#">路由器</a></li>
                    <li><a href="#">智能硬件</a></li>
                    <li><a href="#">服务</a></li>
                    <li><a href="#">社区</a></li>
                </ul>
            </div>
            <!-- 搜索部分 start -->
            <div class="search_box">
                <form auction="#">
                    <input type="search" name="search" class="search" />
                    <button>
                        <i class="iconfont icon-sousuo"></i>
                    </button>
                    <!-- 默认搜索内容 -->
                    <div class="search_default">
                        <ul>
                            <li><a href="#">小米8</a></li>
                            <li><a href="#">小米MIX</a></li>
                        </ul>
                    </div>
                    <!-- 下拉列表内容 -->
                    <div class="datalist">
                        <ul>
                            <li><a href="#">小米6X<span>约有6件</span></a></li>
                            <li><a href="#">小米MIX 2S<span>约有5件</span></a></li>
                            <li><a href="#">黑鲨游戏手机<span>约有3件</span></a></li>
                            <li><a href="#">红米Note 5<span>约有6件</span></a></li>
                            <li><a href="#">红米5A<span>约有13件</span></a></li>
                            <li><a href="#">小米电话4C<span>约有5件</span></a></li>
                            <li><a href="#">电视32英寸<span>约有3件</span></a></li>
                        </ul>
                    </div>
                </form>
            </div>
            <!-- 搜索部分 end -->
        </div>
        <!-- 主体导航 end -->

        <!-- 定义分类菜单和banner图 start -->
        <div class="home_container con_width">
            <!-- 定义菜单 -->
            <div class="menu_list">
                <ul>
                    @foreach($data as $value)
                    <li><a href="#">{{$value -> name}}<span class="arrow">&gt;</span></a>
                        <div class="menu_list_item">
                            <ul class="menu_list_goods menu_col_4">
                                @foreach($value -> children as $row)
                                <li>
                                    <a href="#">
                                        <img src="/status/images/note3-80-2.png" alt="">
                                        <span>{{$row -> name}}</span>
                                    </a>
                                    @foreach($row -> children as $rows)
                                    <div >
                                        <p style="border: 1px solid red; border-radius: 10px; width: 20px; float:left;margin-left: 8%;">
                                            {{$rows -> name}}
                                        </p>
                                    </div>
                                    @endforeach
                                </li>
                                @endforeach

                            </ul>
                        </div>
                    </li>
                    @endforeach

                </ul>
            </div>
            <!-- 定义banner -->
            <div id="banner">
                <ul>
                    <li class="active">
                        <a href="#"><img src="/status/images/mi_banner1.jpg" alt="小米" title="小米"></a>
                    </li>
                    <li>
                        <a href="#"><img src="/status/images/mi_banner2.jpg" alt="小米" title="小米"></a>
                    </li>
                </ul>
                <div id="circle-list">
                    <ul>
                        <li class="active-circle"></li>
                        <li></li>
                    </ul>
                </div>
                <div id="banner-left" class="banner-arrow">&lt;</div>
                <div id="banner-right" class="banner-arrow">&gt;</div>
            </div>
        </div>
        <!-- 定义分类菜单和banner图 end -->

        <!-- 定义推荐部分 start -->
        <div class="recommend con_width">
            <div class="recommend_left">
                <ul>
                    <li><a href="#"><i class="iconfont icon-shouji"></i><span>选购手机</span></a><div class="bottom_line"></div></li>
                    <li><a href="#"><i class="iconfont icon-lihe"></i><span>选购手机</span></a>
                        <div class="bottom_line"></div>
                    </li>
                    <li><a href="#"><i class="iconfont icon-Fma"></i><span>选购手机</span></a>
                    <div class="bottom_line"></div></li>
                </ul>
                <ul>
                    <li><a href="#"><i class="iconfont icon-shoujiqia"></i><span>选购手机</span></a></li>
                    <li><a href="#"><i class="iconfont icon-yijiuhuanxin"></i><span>选购手机</span></a></li>
                    <li><a href="#"><i class="iconfont icon-huafeichongzhi"></i><span>选购手机</span></a></li>
                </ul>
            </div>
            <div class="recommend_right">
                <ul>
                    <li><a href=""><img src="/status/images/img1.jpg" title="" alt=""/></a></li>
                    <li><a href=""><img src="/status/images/img2.jpg" title="" alt=""/></a></li>
                    <li><a href=""><img src="/status/images/img3.jpeg" title="" alt=""/></a></li>
                </ul>
            </div>
        </div>
        <!-- 定义推荐部分 end -->
        <!-- 小米闪购 start -->
        <div class="flashover con_width">
            <h1 class="list_title">小米闪购
                <div class="flashover_a">
                    <a href="javascript:;" onclick="flashover('R')">&lt;</a>
                    <a href="javascript:;" onclick="flashover('L')">&gt;</a>
                </div>
            </h1>
            <div class="flashover_list">
                <div class="flashover_item countdown goodlist4">
                    <p class="countdown_title">18:00 场</p>
                    <i class="iconfont icon-shandian"></i>
                    <p class="countdown_desc">距离结束还有</p>
                    <div class="countdown_time">
                        <label class="countdown_time_item" id="_h">00</label>
                        <label class="countdown_item_dot">:</label>
                        <label class="countdown_time_item" id="_m">00</label>
                        <label class="countdown_item_dot">:</label>
                        <label class="countdown_time_item" id="_s">00</label>
                    </div>
                </div>
                <div class="flashover_item_con" id="shangou">
                    <div class="flashover_item_con_div" id="shangouCon" style="left: 0px">
                        <div class="flashover_item flashover_goodlist goodlist1">
                            <a href="#" alt="米兔指尖积木 白色" title="米兔指尖积木 白色">
                                <div class="goodlist_content">
                                    <img src="/status/images/good1.png" alt="">
                                    <p class="good_title">米兔指尖积木 白色</p>
                                    <p class="good_desc">玩转你的自由时光</p>
                                    <p class="good_price">1 元 <label>9.9元</label></p>
                                </div>
                            </a>
                        </div>
                        <div class="flashover_item flashover_goodlist goodlist2">
                            <a href="#" alt="米兔指尖积木 白色" title="米兔指尖积木 白色">
                                <div class="goodlist_content">
                                    <img src="/status/images/good1.png" alt="">
                                    <p class="good_title">米兔指尖积木 白色</p>
                                    <p class="good_desc">玩转你的自由时光</p>
                                    <p class="good_price">1 元 <label>9.9元</label></p>
                                </div>
                            </a>
                        </div>
                        <div class="flashover_item flashover_goodlist goodlist3">
                            <a href="#" alt="米兔指尖积木 白色" title="米兔指尖积木 白色">
                                <div class="goodlist_content">
                                    <img src="/status/images/good1.png" alt="">
                                    <p class="good_title">米兔指尖积木 白色</p>
                                    <p class="good_desc">玩转你的自由时光</p>
                                    <p class="good_price">1 元 <label>9.9元</label></p>
                                </div>
                            </a>
                        </div>
                        <div class="flashover_item flashover_goodlist goodlist4">
                            <a href="#" alt="米兔指尖积木 白色" title="米兔指尖积木 白色">
                                <div class="goodlist_content">
                                    <img src="/status/images/good1.png" alt="">
                                    <p class="good_title">米兔指尖积木 白色</p>
                                    <p class="good_desc">玩转你的自由时光</p>
                                    <p class="good_price">1 元 <label>9.9元</label></p>
                                </div>
                            </a>
                        </div>
                        <div class="flashover_item flashover_goodlist goodlist1">
                            <a href="#" alt="米兔指尖积木 白色" title="米兔指尖积木 白色">
                                <div class="goodlist_content">
                                    <img src="/status/images/good1.png" alt="">
                                    <p class="good_title">米兔指尖积木 白色</p>
                                    <p class="good_desc">玩转你的自由时光</p>
                                    <p class="good_price">2 元 <label>9.9元</label></p>
                                </div>
                            </a>
                        </div>
                        <div class="flashover_item flashover_goodlist goodlist2">
                            <a href="#" alt="米兔指尖积木 白色" title="米兔指尖积木 白色">
                                <div class="goodlist_content">
                                    <img src="/status/images/good1.png" alt="">
                                    <p class="good_title">米兔指尖积木 白色</p>
                                    <p class="good_desc">玩转你的自由时光</p>
                                    <p class="good_price">2 元 <label>9.9元</label></p>
                                </div>
                            </a>
                        </div>
                        <div class="flashover_item flashover_goodlist goodlist3">
                            <a href="#" alt="米兔指尖积木 白色" title="米兔指尖积木 白色">
                                <div class="goodlist_content">
                                    <img src="/status/images/good1.png" alt="">
                                    <p class="good_title">米兔指尖积木 白色</p>
                                    <p class="good_desc">玩转你的自由时光</p>
                                    <p class="good_price">2 元 <label>9.9元</label></p>
                                </div>
                            </a>
                        </div>
                        <div class="flashover_item flashover_goodlist goodlist4">
                            <a href="#" alt="米兔指尖积木 白色" title="米兔指尖积木 白色">
                                <div class="goodlist_content">
                                    <img src="/status/images/good1.png" alt="">
                                    <p class="good_title">米兔指尖积木 白色</p>
                                    <p class="good_desc">玩转你的自由时光</p>
                                    <p class="good_price">2 元 <label>9.9元</label></p>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- 小米闪购 end -->

        <!-- 广告 start -->
        <div class="ad_container con_width">
            <a href="#" alt="小米8 6G+128G" title="小米8 6G+128G"><img src="/status/images/xmad_15326189127178_tugca.jpg"></a>
        </div>
        <!-- 广告 end -->

        <!-- 产品列表 start -->
        <div class="goods">
            <!-- 手机 start -->
            <div id="shopps">
            @foreach($data as $value)
            <div class="flashover con_width clearfix">
                <h1 class="list_title">{{$value -> name}}<a href="#">查看更多<i class="iconfont icon-xiangyoujiantou"></i></a></h1>
                <div class="goods_item_left1">
                    <a href="#"><img src="/status/images/xmad_15323220713837_GLBVX.jpg"/></a>
                </div>
                <div>
                    @foreach($value -> children as $row)
                    <a style="float: right;" style="cursor: pointer;" class="secondTitle">{{$row -> name}}&nbsp</a>
                    <input type="hidden" name="{{$value -> name}}" value="{{$row -> id}}">
                    @endforeach
                </div>

                <div class="goods_item_right">
                 @foreach($arr as $key => $arrs)
                  @if($value -> name == $key)
                    @foreach($arrs as $a)
                    <div class="goods_item_list ">
                        <div class="goodlist_content">
                            <a href="/index/{{$a -> sid}}"><img src="{{$a -> pic}}" alt=""></a>
                            <p class="good_title"><a href="#">{{$a -> sname}}</a></p>
                            <p class="good_desc">{!!$a -> descr!!}</p>
                            <p class="good_price">￥{{$a -> price}}</p>
                        </div>
                    </div>
                    @endforeach
                  @endif
                 @endforeach

                </div>
            </div>
            @endforeach
            </div>
            <!-- 手机 end -->

            <!-- 广告 start -->
            <div class="ad_container con_width">
                <a href="#" alt="小米电视" title="小米电视"><img src="/status/images/xmad_15329210161578_SWgUX.jpg"></a>
            </div>
            <!-- 广告 end -->

            <!-- 家电 start -->
            <div class="wiring con_width clearfix">
                <h1 class="list_title" id="houseElectricalTitle">家电
                    <ul>
                        <li class="active"><a href="#">热门</a></li>
                        <li><a href="#">电视影音</a></li>
                        <li><a href="#">电脑</a></li>
                        <li><a href="#">家居</a></li>
                    </ul>
                </h1>
                <div class="wiring_left">
                    <a href="#"><img src="/status/images/xmad_15232550390498_qwxEC.jpg"/></a>
                    <a href="#"><img src="/status/images/xmad_15232550390498_qwxEC.jpg"/></a>
                </div>
                <div class="wiring_right" id="houseElectricalDiv">
                    <!-- 热门 -->
                    <div class="wiring_right_con">
                        <div class="goods_item_list">
                            <div class="goodlist_content">
                                <label>享8折</label>
                                <a href="#"><img src="/status/images/pms_1490077569.08131612!220x220.png" alt=""></a>
                                <p class="good_title"><a href="#">热门小米电视4A 65英寸</a></p>
                                <p class="good_desc">4K超高清屏 / 真四核64位高性能处理器</p>
                                <p class="good_price">3699元<label>4499元</label></p>
                            </div>
                            <div class="goods_item_list_desc">
                                <p class="goods_item_list_desc_con">小米电视给我惊喜，昨天下午下单，第二天上午就送到家啦...</p>
                                <span> 来自于 陈金壮 的评价</span>
                            </div>
                        </div>
                        <div class="goods_item_list">
                            <div class="goodlist_content">
                                <label class="new_good">新品</label>
                                <a href="#"><img src="/status/images/pms_1490077569.08131612!220x220.png" alt=""></a>
                                <p class="good_title"><a href="#">热门小米电视4A 65英寸</a></p>
                                <p class="good_desc">4K超高清屏 / 真四核64位高性能处理器</p>
                                <p class="good_price">3699元<label>4499元</label></p>
                            </div>
                            <div class="goods_item_list_desc">
                                <p class="goods_item_list_desc_con">小米电视给我惊喜，昨天下午下单，第二天上午就送到家啦...</p>
                                <span> 来自于 陈金壮 的评价</span>
                            </div>
                        </div>
                        <div class="goods_item_list">
                            <div class="goodlist_content">
                                <label>享7折</label>
                                <a href="#"><img src="/status/images/pms_1490077569.08131612!220x220.png" alt=""></a>
                                <p class="good_title"><a href="#">热门小米电视4A 65英寸</a></p>
                                <p class="good_desc">4K超高清屏 / 真四核64位高性能处理器</p>
                                <p class="good_price">3699元<label>4499元</label></p>
                            </div>
                            <div class="goods_item_list_desc">
                                <p class="goods_item_list_desc_con">小米电视给我惊喜，昨天下午下单，第二天上午就送到家啦...</p>
                                <span> 来自于 陈金壮 的评价</span>
                            </div>
                        </div>
                        <div class="goods_item_list">
                            <div class="goodlist_content">
                                <label>减 200 元</label>
                                <a href="#"><img src="/status/images/pms_1490077569.08131612!220x220.png" alt=""></a>
                                <p class="good_title"><a href="#">热门小米电视4A 65英寸</a></p>
                                <p class="good_desc">4K超高清屏 / 真四核64位高性能处理器</p>
                                <p class="good_price">3699元<label>4499元</label></p>
                            </div>
                            <div class="goods_item_list_desc">
                                <p class="goods_item_list_desc_con">小米电视给我惊喜，昨天下午下单，第二天上午就送到家啦...</p>
                                <span> 来自于 陈金壮 的评价</span>
                            </div>
                        </div>
                        <div class="goods_item_list">
                            <div class="goodlist_content">
                                <label>减 200 元</label>
                                <a href="#"><img src="/status/images/pms_1490077569.08131612!220x220.png" alt=""></a>
                                <p class="good_title"><a href="#">热门小米电视4A 65英寸</a></p>
                                <p class="good_desc">4K超高清屏 / 真四核64位高性能处理器</p>
                                <p class="good_price">3699元<label>4499元</label></p>
                            </div>
                            <div class="goods_item_list_desc">
                                <p class="goods_item_list_desc_con">小米电视给我惊喜，昨天下午下单，第二天上午就送到家啦...</p>
                                <span> 来自于 陈金壮 的评价</span>
                            </div>
                        </div>
                        <div class="goods_item_list">
                            <div class="goodlist_content">
                                <label class="new_good">新品</label>
                                <a href="#"><img src="/status/images/pms_1490077569.08131612!220x220.png" alt=""></a>
                                <p class="good_title"><a href="#">热门小米电视4A 65英寸</a></p>
                                <p class="good_desc">4K超高清屏 / 真四核64位高性能处理器</p>
                                <p class="good_price">3699元<label>4499元</label></p>
                            </div>
                            <div class="goods_item_list_desc">
                                <p class="goods_item_list_desc_con">小米电视给我惊喜，昨天下午下单，第二天上午就送到家啦...</p>
                                <span> 来自于 陈金壮 的评价</span>
                            </div>
                        </div>
                        <div class="goods_item_list">
                            <div class="goodlist_content">
                                <label class="new_good">新品</label>
                                <a href="#"><img src="/status/images/pms_1490077569.08131612!220x220.png" alt=""></a>
                                <p class="good_title"><a href="#">热门小米电视4A 65英寸</a></p>
                                <p class="good_desc">4K超高清屏 / 真四核64位高性能处理器</p>
                                <p class="good_price">3699元<label>4499元</label></p>
                            </div>
                            <div class="goods_item_list_desc">
                                <p class="goods_item_list_desc_con">小米电视给我惊喜，昨天下午下单，第二天上午就送到家啦...</p>
                                <span> 来自于 陈金壮 的评价</span>
                            </div>
                        </div>

                        <div class="goods_item_list_last">
                            <div class="goods_item_last_list clearfix">
                                <div class="goods_item_last_list_left">
                                    <a href="#">小米盒子3s</a>
                                    <span>299元</span>
                                </div>
                                <div class="goods_item_last_list_right">
                                    <img src="/status/images/pms_1479190789.95594557!220x220.jpg" />
                                </div>
                            </div>
                            <div class="goods_item_last_list clearfix">
                                <div class="goods_item_last_list_left">
                                    <a href="#" class="more">
                                        <p>浏览更多</p>
                                        <label>热门</label>
                                    </a>
                                </div>
                                <div class="goods_item_last_list_right">
                                    <a href="#"><i class="iconfont icon-you"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- 电视影音 -->
                    <div class="wiring_right_con hide">
                        <div class="goods_item_list">
                            <div class="goodlist_content">
                                <label>享8折</label>
                                <a href="#"><img src="/status/images/pms_1490077569.08131612!220x220.png" alt=""></a>
                                <p class="good_title"><a href="#">电视影音</a></p>
                                <p class="good_desc">4K超高清屏 / 真四核64位高性能处理器</p>
                                <p class="good_price">3699元<label>4499元</label></p>
                            </div>
                            <div class="goods_item_list_desc">
                                <p class="goods_item_list_desc_con">小米电视给我惊喜，昨天下午下单，第二天上午就送到家啦...</p>
                                <span> 来自于 陈金壮 的评价</span>
                            </div>
                        </div>
                        <div class="goods_item_list">
                            <div class="goodlist_content">
                                <label class="new_good">新品</label>
                                <a href="#"><img src="/status/images/pms_1490077569.08131612!220x220.png" alt=""></a>
                                <p class="good_title"><a href="#">小米电视4A 65英寸</a></p>
                                <p class="good_desc">4K超高清屏 / 真四核64位高性能处理器</p>
                                <p class="good_price">3699元<label>4499元</label></p>
                            </div>
                            <div class="goods_item_list_desc">
                                <p class="goods_item_list_desc_con">小米电视给我惊喜，昨天下午下单，第二天上午就送到家啦...</p>
                                <span> 来自于 陈金壮 的评价</span>
                            </div>
                        </div>
                        <div class="goods_item_list">
                            <div class="goodlist_content">
                                <label>享7折</label>
                                <a href="#"><img src="/status/images/pms_1490077569.08131612!220x220.png" alt=""></a>
                                <p class="good_title"><a href="#">小米电视4A 65英寸</a></p>
                                <p class="good_desc">4K超高清屏 / 真四核64位高性能处理器</p>
                                <p class="good_price">3699元<label>4499元</label></p>
                            </div>
                            <div class="goods_item_list_desc">
                                <p class="goods_item_list_desc_con">小米电视给我惊喜，昨天下午下单，第二天上午就送到家啦...</p>
                                <span> 来自于 陈金壮 的评价</span>
                            </div>
                        </div>
                        <div class="goods_item_list">
                            <div class="goodlist_content">
                                <label>减 200 元</label>
                                <a href="#"><img src="/status/images/pms_1490077569.08131612!220x220.png" alt=""></a>
                                <p class="good_title"><a href="#">电视影音小米电视4A 65英寸</a></p>
                                <p class="good_desc">4K超高清屏 / 真四核64位高性能处理器</p>
                                <p class="good_price">3699元<label>4499元</label></p>
                            </div>
                            <div class="goods_item_list_desc">
                                <p class="goods_item_list_desc_con">小米电视给我惊喜，昨天下午下单，第二天上午就送到家啦...</p>
                                <span> 来自于 陈金壮 的评价</span>
                            </div>
                        </div>
                        <div class="goods_item_list">
                            <div class="goodlist_content">
                                <label>减 200 元</label>
                                <a href="#"><img src="/status/images/pms_1490077569.08131612!220x220.png" alt=""></a>
                                <p class="good_title"><a href="#">小米电视4A 65英寸</a></p>
                                <p class="good_desc">4K超高清屏 / 真四核64位高性能处理器</p>
                                <p class="good_price">3699元<label>4499元</label></p>
                            </div>
                            <div class="goods_item_list_desc">
                                <p class="goods_item_list_desc_con">小米电视给我惊喜，昨天下午下单，第二天上午就送到家啦...</p>
                                <span> 来自于 陈金壮 的评价</span>
                            </div>
                        </div>
                        <div class="goods_item_list">
                            <div class="goodlist_content">
                                <label class="new_good">新品</label>
                                <a href="#"><img src="/status/images/pms_1490077569.08131612!220x220.png" alt=""></a>
                                <p class="good_title"><a href="#">小米电视4A 65英寸</a></p>
                                <p class="good_desc">4K超高清屏 / 真四核64位高性能处理器</p>
                                <p class="good_price">3699元<label>4499元</label></p>
                            </div>
                            <div class="goods_item_list_desc">
                                <p class="goods_item_list_desc_con">小米电视给我惊喜，昨天下午下单，第二天上午就送到家啦...</p>
                                <span> 来自于 陈金壮 的评价</span>
                            </div>
                        </div>
                        <div class="goods_item_list">
                            <div class="goodlist_content">
                                <label class="new_good">新品</label>
                                <a href="#"><img src="/status/images/pms_1490077569.08131612!220x220.png" alt=""></a>
                                <p class="good_title"><a href="#">电视影音小米电视4A 65英寸</a></p>
                                <p class="good_desc">4K超高清屏 / 真四核64位高性能处理器</p>
                                <p class="good_price">3699元<label>4499元</label></p>
                            </div>
                            <div class="goods_item_list_desc">
                                <p class="goods_item_list_desc_con">小米电视给我惊喜，昨天下午下单，第二天上午就送到家啦...</p>
                                <span> 来自于 陈金壮 的评价</span>
                            </div>
                        </div>

                        <div class="goods_item_list_last">
                            <div class="goods_item_last_list clearfix">
                                <div class="goods_item_last_list_left">
                                    <a href="#">小米盒子3s</a>
                                    <span>299元</span>
                                </div>
                                <div class="goods_item_last_list_right">
                                    <img src="/status/images/pms_1479190789.95594557!220x220.jpg" />
                                </div>
                            </div>
                            <div class="goods_item_last_list clearfix">
                                <div class="goods_item_last_list_left">
                                    <a href="#" class="more">
                                        <p>浏览更多</p>
                                        <label>电视影音</label>
                                    </a>
                                </div>
                                <div class="goods_item_last_list_right">
                                    <a href="#"><i class="iconfont icon-you"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- 电脑 -->
                    <div class="wiring_right_con hide">
                        <div class="goods_item_list">
                            <div class="goodlist_content">
                                <label>享8折</label>
                                <a href="#"><img src="/status/images/pms_1490077569.08131612!220x220.png" alt=""></a>
                                <p class="good_title"><a href="#">电脑</a></p>
                                <p class="good_desc">4K超高清屏 / 真四核64位高性能处理器</p>
                                <p class="good_price">3699元<label>4499元</label></p>
                            </div>
                            <div class="goods_item_list_desc">
                                <p class="goods_item_list_desc_con">小米电视给我惊喜，昨天下午下单，第二天上午就送到家啦...</p>
                                <span> 来自于 陈金壮 的评价</span>
                            </div>
                        </div>
                        <div class="goods_item_list">
                            <div class="goodlist_content">
                                <label class="new_good">新品</label>
                                <a href="#"><img src="/status/images/pms_1490077569.08131612!220x220.png" alt=""></a>
                                <p class="good_title"><a href="#">小米电视4A 65英寸</a></p>
                                <p class="good_desc">4K超高清屏 / 真四核64位高性能处理器</p>
                                <p class="good_price">3699元<label>4499元</label></p>
                            </div>
                            <div class="goods_item_list_desc">
                                <p class="goods_item_list_desc_con">小米电视给我惊喜，昨天下午下单，第二天上午就送到家啦...</p>
                                <span> 来自于 陈金壮 的评价</span>
                            </div>
                        </div>
                        <div class="goods_item_list">
                            <div class="goodlist_content">
                                <label>享7折</label>
                                <a href="#"><img src="/status/images/pms_1490077569.08131612!220x220.png" alt=""></a>
                                <p class="good_title"><a href="#">电脑小米电视4A 65英寸</a></p>
                                <p class="good_desc">4K超高清屏 / 真四核64位高性能处理器</p>
                                <p class="good_price">3699元<label>4499元</label></p>
                            </div>
                            <div class="goods_item_list_desc">
                                <p class="goods_item_list_desc_con">小米电视给我惊喜，昨天下午下单，第二天上午就送到家啦...</p>
                                <span> 来自于 陈金壮 的评价</span>
                            </div>
                        </div>
                        <div class="goods_item_list">
                            <div class="goodlist_content">
                                <label>减 200 元</label>
                                <a href="#"><img src="/status/images/pms_1490077569.08131612!220x220.png" alt=""></a>
                                <p class="good_title"><a href="#">小米电视4A 65英寸</a></p>
                                <p class="good_desc">4K超高清屏 / 真四核64位高性能处理器</p>
                                <p class="good_price">3699元<label>4499元</label></p>
                            </div>
                            <div class="goods_item_list_desc">
                                <p class="goods_item_list_desc_con">小米电视给我惊喜，昨天下午下单，第二天上午就送到家啦...</p>
                                <span> 来自于 陈金壮 的评价</span>
                            </div>
                        </div>
                        <div class="goods_item_list">
                            <div class="goodlist_content">
                                <label>减 200 元</label>
                                <a href="#"><img src="/status/images/pms_1490077569.08131612!220x220.png" alt=""></a>
                                <p class="good_title"><a href="#">小米电视4A 65英寸</a></p>
                                <p class="good_desc">4K超高清屏 / 真四核64位高性能处理器</p>
                                <p class="good_price">3699元<label>4499元</label></p>
                            </div>
                            <div class="goods_item_list_desc">
                                <p class="goods_item_list_desc_con">小米电视给我惊喜，昨天下午下单，第二天上午就送到家啦...</p>
                                <span> 来自于 陈金壮 的评价</span>
                            </div>
                        </div>
                        <div class="goods_item_list">
                            <div class="goodlist_content">
                                <label class="new_good">新品</label>
                                <a href="#"><img src="/status/images/pms_1490077569.08131612!220x220.png" alt=""></a>
                                <p class="good_title"><a href="#">电脑小米电视4A 65英寸</a></p>
                                <p class="good_desc">4K超高清屏 / 真四核64位高性能处理器</p>
                                <p class="good_price">3699元<label>4499元</label></p>
                            </div>
                            <div class="goods_item_list_desc">
                                <p class="goods_item_list_desc_con">小米电视给我惊喜，昨天下午下单，第二天上午就送到家啦...</p>
                                <span> 来自于 陈金壮 的评价</span>
                            </div>
                        </div>
                        <div class="goods_item_list">
                            <div class="goodlist_content">
                                <label class="new_good">新品</label>
                                <a href="#"><img src="/status/images/pms_1490077569.08131612!220x220.png" alt=""></a>
                                <p class="good_title"><a href="#">电脑小米电视4A 65英寸</a></p>
                                <p class="good_desc">4K超高清屏 / 真四核64位高性能处理器</p>
                                <p class="good_price">3699元<label>4499元</label></p>
                            </div>
                            <div class="goods_item_list_desc">
                                <p class="goods_item_list_desc_con">小米电视给我惊喜，昨天下午下单，第二天上午就送到家啦...</p>
                                <span> 来自于 陈金壮 的评价</span>
                            </div>
                        </div>

                        <div class="goods_item_list_last">
                            <div class="goods_item_last_list clearfix">
                                <div class="goods_item_last_list_left">
                                    <a href="#">小米盒子3s</a>
                                    <span>299元</span>
                                </div>
                                <div class="goods_item_last_list_right">
                                    <img src="/status/images/pms_1479190789.95594557!220x220.jpg" />
                                </div>
                            </div>
                            <div class="goods_item_last_list clearfix">
                                <div class="goods_item_last_list_left">
                                    <a href="#" class="more">
                                        <p>浏览更多</p>
                                        <label>电脑</label>
                                    </a>
                                </div>
                                <div class="goods_item_last_list_right">
                                    <a href="#"><i class="iconfont icon-you"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- 家居 -->
                    <div class="wiring_right_con hide">
                        <div class="goods_item_list">
                            <div class="goodlist_content">
                                <label>享8折</label>
                                <a href="#"><img src="/status/images/pms_1490077569.08131612!220x220.png" alt=""></a>
                                <p class="good_title"><a href="#">家居</a></p>
                                <p class="good_desc">4K超高清屏 / 真四核64位高性能处理器</p>
                                <p class="good_price">3699元<label>4499元</label></p>
                            </div>
                            <div class="goods_item_list_desc">
                                <p class="goods_item_list_desc_con">小米电视给我惊喜，昨天下午下单，第二天上午就送到家啦...</p>
                                <span> 来自于 陈金壮 的评价</span>
                            </div>
                        </div>
                        <div class="goods_item_list">
                            <div class="goodlist_content">
                                <label class="new_good">新品</label>
                                <a href="#"><img src="/status/images/pms_1490077569.08131612!220x220.png" alt=""></a>
                                <p class="good_title"><a href="#">家居小米电视4A 65英寸</a></p>
                                <p class="good_desc">4K超高清屏 / 真四核64位高性能处理器</p>
                                <p class="good_price">3699元<label>4499元</label></p>
                            </div>
                            <div class="goods_item_list_desc">
                                <p class="goods_item_list_desc_con">小米电视给我惊喜，昨天下午下单，第二天上午就送到家啦...</p>
                                <span> 来自于 陈金壮 的评价</span>
                            </div>
                        </div>
                        <div class="goods_item_list">
                            <div class="goodlist_content">
                                <label>享7折</label>
                                <a href="#"><img src="/status/images/pms_1490077569.08131612!220x220.png" alt=""></a>
                                <p class="good_title"><a href="#">小米电视4A 65英寸</a></p>
                                <p class="good_desc">4K超高清屏 / 真四核64位高性能处理器</p>
                                <p class="good_price">3699元<label>4499元</label></p>
                            </div>
                            <div class="goods_item_list_desc">
                                <p class="goods_item_list_desc_con">小米电视给我惊喜，昨天下午下单，第二天上午就送到家啦...</p>
                                <span> 来自于 陈金壮 的评价</span>
                            </div>
                        </div>
                        <div class="goods_item_list">
                            <div class="goodlist_content">
                                <label>减 200 元</label>
                                <a href="#"><img src="/status/images/pms_1490077569.08131612!220x220.png" alt=""></a>
                                <p class="good_title"><a href="#">家居小米电视4A 65英寸</a></p>
                                <p class="good_desc">4K超高清屏 / 真四核64位高性能处理器</p>
                                <p class="good_price">3699元<label>4499元</label></p>
                            </div>
                            <div class="goods_item_list_desc">
                                <p class="goods_item_list_desc_con">小米电视给我惊喜，昨天下午下单，第二天上午就送到家啦...</p>
                                <span> 来自于 陈金壮 的评价</span>
                            </div>
                        </div>
                        <div class="goods_item_list">
                            <div class="goodlist_content">
                                <label>减 200 元</label>
                                <a href="#"><img src="/status/images/pms_1490077569.08131612!220x220.png" alt=""></a>
                                <p class="good_title"><a href="#">小米电视4A 65英寸</a></p>
                                <p class="good_desc">4K超高清屏 / 真四核64位高性能处理器</p>
                                <p class="good_price">3699元<label>4499元</label></p>
                            </div>
                            <div class="goods_item_list_desc">
                                <p class="goods_item_list_desc_con">小米电视给我惊喜，昨天下午下单，第二天上午就送到家啦...</p>
                                <span> 来自于 陈金壮 的评价</span>
                            </div>
                        </div>
                        <div class="goods_item_list">
                            <div class="goodlist_content">
                                <label class="new_good">新品</label>
                                <a href="#"><img src="/status/images/pms_1490077569.08131612!220x220.png" alt=""></a>
                                <p class="good_title"><a href="#">小米电视4A 65英寸</a></p>
                                <p class="good_desc">4K超高清屏 / 真四核64位高性能处理器</p>
                                <p class="good_price">3699元<label>4499元</label></p>
                            </div>
                            <div class="goods_item_list_desc">
                                <p class="goods_item_list_desc_con">小米电视给我惊喜，昨天下午下单，第二天上午就送到家啦...</p>
                                <span> 来自于 陈金壮 的评价</span>
                            </div>
                        </div>
                        <div class="goods_item_list">
                            <div class="goodlist_content">
                                <label class="new_good">新品</label>
                                <a href="#"><img src="/status/images/pms_1490077569.08131612!220x220.png" alt=""></a>
                                <p class="good_title"><a href="#">家居小米电视4A 65英寸</a></p>
                                <p class="good_desc">4K超高清屏 / 真四核64位高性能处理器</p>
                                <p class="good_price">3699元<label>4499元</label></p>
                            </div>
                            <div class="goods_item_list_desc">
                                <p class="goods_item_list_desc_con">小米电视给我惊喜，昨天下午下单，第二天上午就送到家啦...</p>
                                <span> 来自于 陈金壮 的评价</span>
                            </div>
                        </div>

                        <div class="goods_item_list_last">
                            <div class="goods_item_last_list clearfix">
                                <div class="goods_item_last_list_left">
                                    <a href="#">小米盒子3s</a>
                                    <span>299元</span>
                                </div>
                                <div class="goods_item_last_list_right">
                                    <img src="/status/images/pms_1479190789.95594557!220x220.jpg" />
                                </div>
                            </div>
                            <div class="goods_item_last_list clearfix">
                                <div class="goods_item_last_list_left">
                                    <a href="#" class="more">
                                        <p>浏览更多</p>
                                        <label>家居</label>
                                    </a>
                                </div>
                                <div class="goods_item_last_list_right">
                                    <a href="#"><i class="iconfont icon-you"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <!-- 家电 end -->

            <!-- 广告 start -->
            <div class="ad_container con_width">
                <a href="#" alt="小米电视" title="小米电视"><img src="/status/images/xmad_15330597618059_zrRgh.jpg"></a>
            </div>
            <!-- 广告 end -->

            <!-- 智能 start -->
            <div class="wiring con_width clearfix">
                <h1 class="list_title">家电
                    <ul>
                        <li class="active"><a href="#">热门</a></li>
                        <li><a href="#">出行</a></li>
                        <li><a href="#">健康</a></li>
                        <li><a href="#">酷玩</a></li>
                        <li><a href="#">路由器</a></li>
                    </ul>
                </h1>
                <div class="wiring_left">
                    <a href="#"><img src="/status/images/xmad_15266395374048_JnZQo.jpg"/></a>
                    <a href="#"><img src="/status/images/xmad_15266395374048_JnZQo.jpg"/></a>
                </div>
                <div class="wiring_right">
                    <div class="goods_item_list">
                        <div class="goodlist_content">
                            <a href="#"><img src="/status/images/cf6660a3-d424-4248-889f-0eed1e99a342.png" alt=""></a>
                            <p class="good_title"><a href="#">米家飞利浦智睿台灯二代</a></p>
                            <p class="good_desc">感知环境光，主动优化场景照明</p>
                            <p class="good_price">199</p>
                        </div>
                        <div class="goods_item_list_desc">
                            <p class="goods_item_list_desc_con">一流的服务、一流的设备、一流的技术、一流的设施、星级...</p>
                            <span>来自于 上网辛苦了 的评价 </span>
                        </div>
                    </div>
                    <div class="goods_item_list">
                        <div class="goodlist_content">
                            <a href="#"><img src="/status/images/cf6660a3-d424-4248-889f-0eed1e99a342.png" alt=""></a>
                            <p class="good_title"><a href="#">米家飞利浦智睿台灯二代</a></p>
                            <p class="good_desc">感知环境光，主动优化场景照明</p>
                            <p class="good_price">199</p>
                        </div>
                        <div class="goods_item_list_desc">
                            <p class="goods_item_list_desc_con">一流的服务、一流的设备、一流的技术、一流的设施、星级...</p>
                            <span>来自于 上网辛苦了 的评价 </span>
                        </div>
                    </div>
                    <div class="goods_item_list">
                        <div class="goodlist_content">
                            <a href="#"><img src="/status/images/cf6660a3-d424-4248-889f-0eed1e99a342.png" alt=""></a>
                            <p class="good_title"><a href="#">米家飞利浦智睿台灯二代</a></p>
                            <p class="good_desc">感知环境光，主动优化场景照明</p>
                            <p class="good_price">199</p>
                        </div>
                        <div class="goods_item_list_desc">
                            <p class="goods_item_list_desc_con">一流的服务、一流的设备、一流的技术、一流的设施、星级...</p>
                            <span>来自于 上网辛苦了 的评价 </span>
                        </div>
                    </div>
                    <div class="goods_item_list">
                        <div class="goodlist_content">
                            <a href="#"><img src="/status/images/cf6660a3-d424-4248-889f-0eed1e99a342.png" alt=""></a>
                            <p class="good_title"><a href="#">米家飞利浦智睿台灯二代</a></p>
                            <p class="good_desc">感知环境光，主动优化场景照明</p>
                            <p class="good_price">199</p>
                        </div>
                        <div class="goods_item_list_desc">
                            <p class="goods_item_list_desc_con">一流的服务、一流的设备、一流的技术、一流的设施、星级...</p>
                            <span>来自于 上网辛苦了 的评价 </span>
                        </div>
                    </div>
                    <div class="goods_item_list">
                        <div class="goodlist_content">
                            <a href="#"><img src="/status/images/cf6660a3-d424-4248-889f-0eed1e99a342.png" alt=""></a>
                            <p class="good_title"><a href="#">米家飞利浦智睿台灯二代</a></p>
                            <p class="good_desc">感知环境光，主动优化场景照明</p>
                            <p class="good_price">199</p>
                        </div>
                        <div class="goods_item_list_desc">
                            <p class="goods_item_list_desc_con">一流的服务、一流的设备、一流的技术、一流的设施、星级...</p>
                            <span>来自于 上网辛苦了 的评价 </span>
                        </div>
                    </div>
                    <div class="goods_item_list">
                        <div class="goodlist_content">
                            <a href="#"><img src="/status/images/cf6660a3-d424-4248-889f-0eed1e99a342.png" alt=""></a>
                            <p class="good_title"><a href="#">米家飞利浦智睿台灯二代</a></p>
                            <p class="good_desc">感知环境光，主动优化场景照明</p>
                            <p class="good_price">199</p>
                        </div>
                        <div class="goods_item_list_desc">
                            <p class="goods_item_list_desc_con">一流的服务、一流的设备、一流的技术、一流的设施、星级...</p>
                            <span>来自于 上网辛苦了 的评价 </span>
                        </div>
                    </div>
                    <div class="goods_item_list">
                        <div class="goodlist_content">
                            <a href="#"><img src="/status/images/cf6660a3-d424-4248-889f-0eed1e99a342.png" alt=""></a>
                            <p class="good_title"><a href="#">米家飞利浦智睿台灯二代</a></p>
                            <p class="good_desc">感知环境光，主动优化场景照明</p>
                            <p class="good_price">199</p>
                        </div>
                        <div class="goods_item_list_desc">
                            <p class="goods_item_list_desc_con">一流的服务、一流的设备、一流的技术、一流的设施、星级...</p>
                            <span>来自于 上网辛苦了 的评价 </span>
                        </div>
                    </div>

                    <div class="goods_item_list_last">
                        <div class="goods_item_last_list clearfix">
                            <div class="goods_item_last_list_left">
                                <a href="#">小米VR眼镜</a>
                                <span>299元</span>
                            </div>
                            <div class="goods_item_last_list_right">
                                <img src="/status/images/pms_1477985364.89714934!220x220.jpg" />
                            </div>
                        </div>
                        <div class="goods_item_last_list clearfix">
                            <div class="goods_item_last_list_left">
                                <a href="#" class="more">
                                    <p>浏览更多</p>
                                    <label>热门</label>
                                </a>
                            </div>
                            <div class="goods_item_last_list_right">
                                <a href="#"><i class="iconfont icon-you"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- 智能 end -->

            <!-- 广告 start -->
            <div class="ad_container con_width">
                <a href="#" alt="小米电视" title="小米电视"><img src="/status/images/xmad_15330597618059_zrRgh.jpg"></a>
            </div>
            <!-- 广告 end -->

            <!-- 搭配 start -->
            <div class="wiring con_width clearfix">
                <h1 class="list_title">搭配
                    <ul>
                        <li class="active"><a href="#">热门</a></li>
                        <li><a href="#">耳机音箱</a></li>
                        <li><a href="#">电源</a></li>
                        <li><a href="#">电池存储卡</a></li>
                    </ul>
                </h1>
                <div class="wiring_left">
                    <a href="#"><img src="/status/images/xmad_15266395374048_JnZQo.jpg"/></a>
                    <a href="#"><img src="/status/images/xmad_15266395374048_JnZQo.jpg"/></a>
                </div>
                <div class="wiring_right">
                    <div class="goods_item_list">
                        <div class="goodlist_content">
                            <a href="#"><img src="/status/images/cf6660a3-d424-4248-889f-0eed1e99a342.png" alt=""></a>
                            <p class="good_title"><a href="#">米家飞利浦智睿台灯二代</a></p>
                            <p class="good_desc">感知环境光，主动优化场景照明</p>
                            <p class="good_price">199</p>
                        </div>
                        <div class="goods_item_list_desc">
                            <p class="goods_item_list_desc_con">一流的服务、一流的设备、一流的技术、一流的设施、星级...</p>
                            <span>来自于 上网辛苦了 的评价 </span>
                        </div>
                    </div>
                    <div class="goods_item_list">
                        <div class="goodlist_content">
                            <a href="#"><img src="/status/images/cf6660a3-d424-4248-889f-0eed1e99a342.png" alt=""></a>
                            <p class="good_title"><a href="#">米家飞利浦智睿台灯二代</a></p>
                            <p class="good_desc">感知环境光，主动优化场景照明</p>
                            <p class="good_price">199</p>
                        </div>
                        <div class="goods_item_list_desc">
                            <p class="goods_item_list_desc_con">一流的服务、一流的设备、一流的技术、一流的设施、星级...</p>
                            <span>来自于 上网辛苦了 的评价 </span>
                        </div>
                    </div>
                    <div class="goods_item_list">
                        <div class="goodlist_content">
                            <a href="#"><img src="/status/images/cf6660a3-d424-4248-889f-0eed1e99a342.png" alt=""></a>
                            <p class="good_title"><a href="#">米家飞利浦智睿台灯二代</a></p>
                            <p class="good_desc">感知环境光，主动优化场景照明</p>
                            <p class="good_price">199</p>
                        </div>
                        <div class="goods_item_list_desc">
                            <p class="goods_item_list_desc_con">一流的服务、一流的设备、一流的技术、一流的设施、星级...</p>
                            <span>来自于 上网辛苦了 的评价 </span>
                        </div>
                    </div>
                    <div class="goods_item_list">
                        <div class="goodlist_content">
                            <a href="#"><img src="/status/images/cf6660a3-d424-4248-889f-0eed1e99a342.png" alt=""></a>
                            <p class="good_title"><a href="#">米家飞利浦智睿台灯二代</a></p>
                            <p class="good_desc">感知环境光，主动优化场景照明</p>
                            <p class="good_price">199</p>
                        </div>
                        <div class="goods_item_list_desc">
                            <p class="goods_item_list_desc_con">一流的服务、一流的设备、一流的技术、一流的设施、星级...</p>
                            <span>来自于 上网辛苦了 的评价 </span>
                        </div>
                    </div>
                    <div class="goods_item_list">
                        <div class="goodlist_content">
                            <a href="#"><img src="/status/images/cf6660a3-d424-4248-889f-0eed1e99a342.png" alt=""></a>
                            <p class="good_title"><a href="#">米家飞利浦智睿台灯二代</a></p>
                            <p class="good_desc">感知环境光，主动优化场景照明</p>
                            <p class="good_price">199</p>
                        </div>
                        <div class="goods_item_list_desc">
                            <p class="goods_item_list_desc_con">一流的服务、一流的设备、一流的技术、一流的设施、星级...</p>
                            <span>来自于 上网辛苦了 的评价 </span>
                        </div>
                    </div>
                    <div class="goods_item_list">
                        <div class="goodlist_content">
                            <a href="#"><img src="/status/images/cf6660a3-d424-4248-889f-0eed1e99a342.png" alt=""></a>
                            <p class="good_title"><a href="#">米家飞利浦智睿台灯二代</a></p>
                            <p class="good_desc">感知环境光，主动优化场景照明</p>
                            <p class="good_price">199</p>
                        </div>
                        <div class="goods_item_list_desc">
                            <p class="goods_item_list_desc_con">一流的服务、一流的设备、一流的技术、一流的设施、星级...</p>
                            <span>来自于 上网辛苦了 的评价 </span>
                        </div>
                    </div>
                    <div class="goods_item_list">
                        <div class="goodlist_content">
                            <a href="#"><img src="/status/images/cf6660a3-d424-4248-889f-0eed1e99a342.png" alt=""></a>
                            <p class="good_title"><a href="#">米家飞利浦智睿台灯二代</a></p>
                            <p class="good_desc">感知环境光，主动优化场景照明</p>
                            <p class="good_price">199</p>
                        </div>
                        <div class="goods_item_list_desc">
                            <p class="goods_item_list_desc_con">一流的服务、一流的设备、一流的技术、一流的设施、星级...</p>
                            <span>来自于 上网辛苦了 的评价 </span>
                        </div>
                    </div>

                    <div class="goods_item_list_last">
                        <div class="goods_item_last_list clearfix">
                            <div class="goods_item_last_list_left">
                                <a href="#">小米VR眼镜</a>
                                <span>299元</span>
                            </div>
                            <div class="goods_item_last_list_right">
                                <img src="/status/images/pms_1477985364.89714934!220x220.jpg" />
                            </div>
                        </div>
                        <div class="goods_item_last_list clearfix">
                            <div class="goods_item_last_list_left">
                                <a href="#" class="more">
                                    <p>浏览更多</p>
                                    <label>热门</label>
                                </a>
                            </div>
                            <div class="goods_item_last_list_right">
                                <a href="#"><i class="iconfont icon-you"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- 智能 end -->

            <!-- 广告 start -->
            <div class="ad_container con_width">
                <a href="#" alt="小米电视" title="小米电视"><img src="/status/images/xmad_15330597618059_zrRgh.jpg"></a>
            </div>
            <!-- 广告 end -->

            <!-- 为你推荐 start -->
            <div class="recommends con_width clearfix">
                <h1 class="list_title">为你推荐</h1>
                <div class="recommends_con">
                    <div class="goods_item_list">
                        <div class="goodlist_content">
                            <a href="#"><img src="/status/images/pms_1527684990.93616987!220x220.jpg" alt=""></a>
                            <p class="good_title"><a href="#"> 红米5 移动4G+版 2GB内存 </a></p>
                            <p class="good_price">799元</p>
                            <p class="good_desc">96人好评</p>
                        </div>
                    </div>
                    <div class="goods_item_list">
                        <div class="goodlist_content">
                            <a href="#"><img src="/status/images/pms_1527684990.93616987!220x220.jpg" alt=""></a>
                            <p class="good_title"><a href="#"> 红米5 移动4G+版 2GB内存 </a></p>
                            <p class="good_price">799元</p>
                            <p class="good_desc">96人好评</p>
                        </div>
                    </div>
                    <div class="goods_item_list">
                        <div class="goodlist_content">
                            <a href="#"><img src="/status/images/pms_1527684990.93616987!220x220.jpg" alt=""></a>
                            <p class="good_title"><a href="#"> 红米5 移动4G+版 2GB内存 </a></p>
                            <p class="good_price">799元</p>
                            <p class="good_desc">96人好评</p>
                        </div>
                    </div>
                    <div class="goods_item_list">
                        <div class="goodlist_content">
                            <a href="#"><img src="/status/images/pms_1527684990.93616987!220x220.jpg" alt=""></a>
                            <p class="good_title"><a href="#"> 红米5 移动4G+版 2GB内存 </a></p>
                            <p class="good_price">799元</p>
                            <p class="good_desc">96人好评</p>
                        </div>
                    </div>
                    <div class="goods_item_list">
                        <div class="goodlist_content">
                            <a href="#"><img src="/status/images/pms_1527684990.93616987!220x220.jpg" alt=""></a>
                            <p class="good_title"><a href="#"> 红米5 移动4G+版 2GB内存 </a></p>
                            <p class="good_price">799元</p>
                            <p class="good_desc">96人好评</p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- 为你推荐 end -->

            <!-- 热评产品 start -->
            <div class="hotreview con_width clearfix">
                <h1 class="list_title">热评产品</h1>
                <div class="hotreview_con">
                    <div class="hotreview_item">
                        <a class="hotreview_img" href="#"><img src="/status/images/54e35fdd-bc68-4a89-bad7-c9c3bb2fc6fe.jpeg"/></a>
                        <a href="#" class="hotreview_desc">
                            包装很让人感动，式样也很可爱，做出的饭全家人都爱吃，超爱五星！手机控制还是不太熟练，最主要是没有连接...
                        </a>
                        <p><a class="hotreview_recommend">来自于 HZG 的评价</a></p>
                        <p class="hotreview_intro">
                        <label class="hotreview_name">米家压力IH电饭煲</label>
                        <label class="hotreview_name_line">&nbsp;</label>
                        <label class="hotreview_price">999元</label>
                        </p>
                    </div>
                    <div class="hotreview_item">
                        <a class="hotreview_img" href="#"><img src="/status/images/54e35fdd-bc68-4a89-bad7-c9c3bb2fc6fe.jpeg"/></a>
                        <a href="#" class="hotreview_desc">
                            包装很让人感动，式样也很可爱，做出的饭全家人都爱吃，超爱五星！手机控制还是不太熟练，最主要是没有连接...
                        </a>
                        <p><a class="hotreview_recommend">来自于 HZG 的评价</a></p>
                        <p class="hotreview_intro">
                        <label class="hotreview_name">米家压力IH电饭煲</label>
                        <label class="hotreview_name_line">&nbsp;</label>
                        <label class="hotreview_price">999元</label>
                        </p>
                    </div>
                    <div class="hotreview_item">
                        <a class="hotreview_img" href="#"><img src="/status/images/54e35fdd-bc68-4a89-bad7-c9c3bb2fc6fe.jpeg"/></a>
                        <a href="#" class="hotreview_desc">
                            包装很让人感动，式样也很可爱，做出的饭全家人都爱吃，超爱五星！手机控制还是不太熟练，最主要是没有连接...
                        </a>
                        <p><a class="hotreview_recommend">来自于 HZG 的评价</a></p>
                        <p class="hotreview_intro">
                        <label class="hotreview_name">米家压力IH电饭煲</label>
                        <label class="hotreview_name_line">&nbsp;</label>
                        <label class="hotreview_price">999元</label>
                        </p>
                    </div>
                    <div class="hotreview_item">
                        <a class="hotreview_img" href="#"><img src="/status/images/54e35fdd-bc68-4a89-bad7-c9c3bb2fc6fe.jpeg"/></a>
                        <a href="#" class="hotreview_desc">
                            包装很让人感动，式样也很可爱，做出的饭全家人都爱吃，超爱五星！手机控制还是不太熟练，最主要是没有连接...
                        </a>
                        <p><a class="hotreview_recommend">来自于 HZG 的评价</a></p>
                        <p class="hotreview_intro">
                        <label class="hotreview_name">米家压力IH电饭煲</label>
                        <label class="hotreview_name_line">&nbsp;</label>
                        <label class="hotreview_price">999元</label>
                        </p>
                    </div>
                </div>
            </div>
            <!-- 热评产品 end -->

            <!-- 内容 start -->
            <div class="hotreview con_width clearfix">
                <h1 class="list_title">内容</h1>
                <div class="hotreview_con">
                    <div class="hotreview_item goodlist1">
                        <p class="hotreview_item_title">图书</p>
                        <div id="tushu">
                            <ul class="tushuBanner">
                                <li class="active">
                                    <a href="javascript:;">
                                        <div class="tushuCon">
                                            <p class="hotreview_item_title1">哈利·波特与被诅咒的孩子</p>
                                            <p class="hotreview_item_desc">“哈利·波特”第八个故事中文版震撼来袭！特别彩排版剧本！</p>
                                            <p class="hotreview_item_price">29.37元</p>
                                            <p><img src="/status/images/5e5da924-84e3-4959-9e25-5891cdf30757.png"></p>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:;">
                                        <div class="tushuCon">
                                            <p class="hotreview_item_title1">111111</p>
                                            <p class="hotreview_item_desc">“哈利·波特”第八个故事中文版震撼来袭！特别彩排版剧本！</p>
                                            <p class="hotreview_item_price">29.37元</p>
                                            <p><img src="/status/images/5e5da924-84e3-4959-9e25-5891cdf30757.png"></p>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:;">
                                        <div class="tushuCon">
                                            <p class="hotreview_item_title1">222222</p>
                                            <p class="hotreview_item_desc">“哈利·波特”第八个故事中文版震撼来袭！特别彩排版剧本！</p>
                                            <p class="hotreview_item_price">29.37元</p>
                                            <p><img src="/status/images/5e5da924-84e3-4959-9e25-5891cdf30757.png"></p>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                            <div id="tushuCircle-list">
                                <ul>
                                    <li class="active-circle"></li>
                                    <li></li>
                                    <li></li>
                                </ul>
                            </div>
                            <div id="tushu1Left" class="banner-arrow tsleft">&lt;</div>
                            <div id="tushu1Right" class="banner-arrow tsright">&gt;</div>
                        </div>
                    </div>
                    <div class="hotreview_item goodlist2">
                        <p class="hotreview_item_title">图书</p>
                        <div id="tushu1">
                            <ul class="tushuBanner">
                                <li class="active">
                                    <a href="javascript:;">
                                        <div class="tushuCon">
                                            <p class="hotreview_item_title1">哈利·波特与被诅咒的孩子</p>
                                            <p class="hotreview_item_desc">“哈利·波特”第八个故事中文版震撼来袭！特别彩排版剧本！</p>
                                            <p class="hotreview_item_price">29.37元</p>
                                            <p><img src="/status/images/5e5da924-84e3-4959-9e25-5891cdf30757.png"></p>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:;">
                                        <div class="tushuCon">
                                            <p class="hotreview_item_title1">111111</p>
                                            <p class="hotreview_item_desc">“哈利·波特”第八个故事中文版震撼来袭！特别彩排版剧本！</p>
                                            <p class="hotreview_item_price">29.37元</p>
                                            <p><img src="/status/images/5e5da924-84e3-4959-9e25-5891cdf30757.png"></p>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:;">
                                        <div class="tushuCon">
                                            <p class="hotreview_item_title1">222222</p>
                                            <p class="hotreview_item_desc">“哈利·波特”第八个故事中文版震撼来袭！特别彩排版剧本！</p>
                                            <p class="hotreview_item_price">29.37元</p>
                                            <p><img src="/status/images/5e5da924-84e3-4959-9e25-5891cdf30757.png"></p>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                            <div id="tushuCircle-list1">
                                <ul>
                                    <li class="active-circle"></li>
                                    <li></li>
                                    <li></li>
                                </ul>
                            </div>
                            <div id="tushu2Left" class="banner-arrow tsleft">&lt;</div>
                            <div id="tushu2Right" class="banner-arrow tsright">&gt;</div>
                        </div>
                    </div>
                    <div class="hotreview_item goodlist4">
                        <p class="hotreview_item_title">图书</p>
                        <div id="tushu2">
                            <ul class="tushuBanner">
                                <li class="active">
                                    <a href="javascript:;">
                                        <div class="tushuCon">
                                            <p class="hotreview_item_title1">哈利·波特与被诅咒的孩子</p>
                                            <p class="hotreview_item_desc">“哈利·波特”第八个故事中文版震撼来袭！特别彩排版剧本！</p>
                                            <p class="hotreview_item_price">29.37元</p>
                                            <p><img src="/status/images/5e5da924-84e3-4959-9e25-5891cdf30757.png"></p>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:;">
                                        <div class="tushuCon">
                                            <p class="hotreview_item_title1">111111</p>
                                            <p class="hotreview_item_desc">“哈利·波特”第八个故事中文版震撼来袭！特别彩排版剧本！</p>
                                            <p class="hotreview_item_price">29.37元</p>
                                            <p><img src="/status/images/5e5da924-84e3-4959-9e25-5891cdf30757.png"></p>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:;">
                                        <div class="tushuCon">
                                            <p class="hotreview_item_title1">222222</p>
                                            <p class="hotreview_item_desc">“哈利·波特”第八个故事中文版震撼来袭！特别彩排版剧本！</p>
                                            <p class="hotreview_item_price">29.37元</p>
                                            <p><img src="/status/images/5e5da924-84e3-4959-9e25-5891cdf30757.png"></p>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                            <div id="tushuCircle-list2">
                                <ul>
                                    <li class="active-circle"></li>
                                    <li></li>
                                    <li></li>
                                </ul>
                            </div>
                            <div id="tushu3Left" class="banner-arrow tsleft">&lt;</div>
                            <div id="tushu3Right" class="banner-arrow tsright">&gt;</div>
                        </div>
                    </div>
                    <div class="hotreview_item goodlist3">
                        <p class="hotreview_item_title">图书</p>
                        <div id="tushu3">
                            <ul class="tushuBanner">
                                <li class="active">
                                    <a href="javascript:;">
                                        <div class="tushuCon">
                                            <p class="hotreview_item_title1">哈利·波特与被诅咒的孩子</p>
                                            <p class="hotreview_item_desc">“哈利·波特”第八个故事中文版震撼来袭！特别彩排版剧本！</p>
                                            <p class="hotreview_item_price">29.37元</p>
                                            <p><img src="/status/images/5e5da924-84e3-4959-9e25-5891cdf30757.png"></p>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:;">
                                        <div class="tushuCon">
                                            <p class="hotreview_item_title1">111111</p>
                                            <p class="hotreview_item_desc">“哈利·波特”第八个故事中文版震撼来袭！特别彩排版剧本！</p>
                                            <p class="hotreview_item_price">29.37元</p>
                                            <p><img src="/status/images/5e5da924-84e3-4959-9e25-5891cdf30757.png"></p>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:;">
                                        <div class="tushuCon">
                                            <p class="hotreview_item_title1">222222</p>
                                            <p class="hotreview_item_desc">“哈利·波特”第八个故事中文版震撼来袭！特别彩排版剧本！</p>
                                            <p class="hotreview_item_price">29.37元</p>
                                            <p><img src="/status/images/5e5da924-84e3-4959-9e25-5891cdf30757.png"></p>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                            <div id="tushuCircle-list4">
                                <ul>
                                    <li class="active-circle"></li>
                                    <li></li>
                                    <li></li>
                                </ul>
                            </div>
                            <div id="tushu4Left" class="banner-arrow tsleft">&lt;</div>
                            <div id="tushu4Right" class="banner-arrow tsright">&gt;</div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- 内容 end -->

            <!-- 视频 start -->
            <div class="video con_width clearfix">
                <h1 class="list_title">视频</h1>
                <div class="video_con">
                    <div class="video_item">
                        <div class="video_item_img">
                            <a href="#"><img src="/status/images/xmad_15278351912522_frJQc.jpg" alt=""></a>
                            <p class="video_icon"><i class="iconfont icon-shipin"></i></p>
                        </div>
                        <p class="video_name"><a href="#">小米8，一部与众不同的手机</a></p>
                        <p class="video_desc">透明探索版，将科技与美学完美结合</p>
                    </div>
                    <div class="video_item">
                        <div class="video_item_img">
                            <a href="#"><img src="/status/images/xmad_15278351912522_frJQc.jpg" alt=""></a>
                            <p class="video_icon"><i class="iconfont icon-shipin"></i></p>
                        </div>
                        <p class="video_name"><a href="#">小米8，一部与众不同的手机</a></p>
                        <p class="video_desc">透明探索版，将科技与美学完美结合</p>
                    </div>
                    <div class="video_item">
                        <div class="video_item_img">
                            <a href="#"><img src="/status/images/xmad_15278351912522_frJQc.jpg" alt=""></a>
                            <p class="video_icon"><i class="iconfont icon-shipin"></i></p>
                        </div>
                        <p class="video_name"><a href="#">小米8，一部与众不同的手机</a></p>
                        <p class="video_desc">透明探索版，将科技与美学完美结合</p>
                    </div>
                    <div class="video_item">
                        <div class="video_item_img">
                            <a href="#"><img src="/status/images/xmad_15278351912522_frJQc.jpg" alt=""></a>
                            <p class="video_icon"><i class="iconfont icon-shipin"></i></p>
                        </div>
                        <p class="video_name"><a href="#">小米8，一部与众不同的手机</a></p>
                        <p class="video_desc">透明探索版，将科技与美学完美结合</p>
                    </div>
                </div>
            </div>
            <!-- 视频 end -->
        </div>
        <!-- 产品列表 end -->

        <!-- 底部 start -->
        <div class="footer">
            <!--服务 start-->
            <div class="footer_nav con_width clearfix">
                <ul>
                    <li><a href="#"><i class="iconfont icon-buoumaotubiao46"></i>预约维修服务</a></li>
                    <li><a href="#"><i class="iconfont icon-7"></i>7天无理由退货</a></li>
                    <li><a href="#"><i class="iconfont icon-15"></i>15天免费换货</a></li>
                    <li><a href="#"><i class="iconfont icon-liwu1"></i>满150元包邮</a></li>
                    <li><a href="#"><i class="iconfont icon-dingwei"></i>520余家售后网点</a></li>
                </ul>
            </div>
            <!--服务 end-->
            <!-- 底部列表 start-->
            <div class="footer_item con_width clearfix">
                <div class="footer_item_left">
                    <ul>
                        <li>
                            <p>帮助中心</p>
                            <ul>
                                <li><a href="#">账户管理</a></li>
                                <li><a href="#">购物指南</a></li>
                                <li><a href="#">订单操作</a></li>
                            </ul>
                        </li>
                        <li>
                            <p>服务支持</p>
                            <ul>
                                <li><a href="#">售后政策</a></li>
                                <li><a href="#">自助服务</a></li>
                                <li><a href="#">相关下载</a></li>
                            </ul>
                        </li>
                        <li>
                            <p>线下门店</p>
                            <ul>
                                <li><a href="#">小米之家</a></li>
                                <li><a href="#">服务网点</a></li>
                                <li><a href="#">授权体验店</a></li>
                            </ul>
                        </li>
                        <li>
                            <p>关于小米</p>
                            <ul>
                                <li><a href="#">了解小米</a></li>
                                <li><a href="#">加入小米</a></li>
                                <li><a href="#">投资者关系</a></li>
                            </ul>
                        </li>
                        <li>
                            <p>关注我们</p>
                            <ul>
                                <li><a href="#">新浪微博</a></li>
                                <li><a href="#">官方微信</a></li>
                                <li><a href="#">联系我们</a></li>
                            </ul>
                        </li>
                        <li>
                            <p>特色服务</p>
                            <ul>
                                <li><a href="#">F码通道</a></li>
                                <li><a href="#">礼物码</a></li>
                                <li><a href="#">防伪查询</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
                <div class="footer_item_right">
                    <p class="phone">400-100-5678</p>
                    <p class="date">周一至周日 8:00-12:00<br/>(仅收市话费)</p>
                    <a href="#" class="btn-relative"><i class="iconfont icon-lianxi1"></i> 联系客服</a>
                </div>
            </div>
            <!-- 底部列表 end-->
            <!-- 底部说明 start -->
            <div class="footer_desc">
                <div class="footer_desc_con con_width">
                    <div class="logo">
                        <img src="/status/images/mi-logo.png" alt="MIlogo" title="小米官网">
                    </div>
                    <div class="desc_con_item">
                        <div class="desc_con_item_detail clearfix">
                            <ul>
                                <li><a href="#">小米商城</a></li>
                                <li><a href="#">MIUI</a></li>
                                <li><a href="#">米家</a></li>
                                <li><a href="#">多看</a></li>
                                <li><a href="#">游戏</a></li>
                                <li><a href="#">路由器</a></li>
                                <li><a href="#">米粉卡</a></li>
                                <li><a href="#">政企服务</a></li>
                                <li><a href="#">小米天猫店</a></li>
                                <li><a href="#">隐私政策</a></li>
                                <li><a href="#">问题反馈</a></li>
                                <li><a href="#">廉正举报</a></li>
                                <li><a href="#">Select Region</a></li>
                            </ul>
                        </div>
                        <p class="desc_con_txt">
                            &copy;<a href="#">mi.com</a> 京ICP证110507号
                            <a href="#">京ICP备10046444号</a>
                            <a href="#">京公网安备11010802020134号 </a>
                            <a href="#">京网文[2017]1530-131号</a>
                            <br/>
                             违法和不良信息举报电话：185-0130-1238，本网站所列数据，除特殊说明，所有数据均出自我司实验室测试
                        </p>
                    </div>
                    <div class="desc_con_links">
                        <img src="/status/images/links/truste.png"/>
                        <img src="/status/images/links/v-logo-2.png"/>
                        <img src="/status/images/links/v-logo-1.png"/>
                        <img src="/status/images/links/v-logo-3.png"/>
                        <img src="/status/images/links/ba10428a4f9495ac310fd0b5e0cf8370.png"/>
                    </div>
                </div>
                <div class="slogan ir con_width">探索黑科技，小米为发烧而生</div>
            </div>
            <!-- 底部说明 end -->
        </div>
        <!-- 底部 end -->
    </div>
    <script type="text/javascript" charset="utf-8" src="/status/js/index.js"></script>
</body>
<script type="text/javascript" charset="utf-8" src="/static/jquery-1.8.3.min.js"></script>
<script type="text/javascript">
    $(".secondTitle").click(function(event) {
        var sendTitleId = $(this).next('input').val();
        var currentName = $(this).html();
        var _this = $(this).parent('div').next('div');
        $.get('/index/create' , {secondTitle : sendTitleId} , function(data) {
            if(data != ''){
                _this.html(data);
            }else{
                currentName = currentName.split('&')[0];
                alert(currentName +"下没有属于他的商品");
            }

        });
    });
</script>
</html>

