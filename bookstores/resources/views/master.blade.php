<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=0">
    <title>@yield('title')</title>
    <link rel="stylesheet" type="text/css" href="/css/weui.css">
</head>
<body>

    @yield('content')
    <div class="global_menu" onclick="onMenuClick()">
        <div></div>
    </div>


    <div id="actionSheet_wrap">
        <div class="weui_transition" id="mask">
            <div class="weui_actionsheet" id="weui_actionsheet">
                <div class="weui_actionsheet_menu">
                    <div class="weui_actionsheet_cell onclick='onMenuItemClick(1)'">用户中心</div>
                    <div class="weui_actionsheet_cell onclick='onMenuItemClick(2)'">选择套餐</div>
                    <div class="weui_actionsheet_cell onclick='onMenuItemClick(3)'">周边油站</div>
                    <div class="weui_actionsheet_cell onclick='onMenuItemClick(4)'">常见问题</div>
                </div>
                <div class="weui_actionsheet_action">
                    <div class="weui_actionsheet_cell" id="actionsheet_cancel">取消</div>
                </div>
            </div>
        </div>
    </div>

<script type="text/javascript" src="/js/jquery-1.8.3.min.js">
    var mask = $('mask');
    var weuiActionsheet = $('#weui_actionsheet');
    $('#actionsheet_cancel').onclick(function(){
        hideActionSheet(weuiActionSheet.mask);
    })
</script>
@yield('my-js')
</body>
</html>