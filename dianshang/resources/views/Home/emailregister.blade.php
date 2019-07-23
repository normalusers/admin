<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="author" content="order by dede58.com"/>
    <title>用户注册</title>
    <link rel="stylesheet" type="text/css" href="/status/css/login.css">
    <link rel="stylesheet" type="text/css" href="/lib/Hui-iconfont/1.0.8/iconfont.css" />
    <link rel="stylesheet" type="text/css" href="/static/Admins/plugins/colorpicker/colorpicker.css" media="screen">
    <link rel="stylesheet" type="text/css" href="/static/Admins/custom-plugins/wizard/wizard.css" media="screen">

    <!-- Required Stylesheets -->
    <link rel="stylesheet" type="text/css" href="/static/Admins/bootstrap/css/bootstrap.min.css" media="screen">
    <link rel="stylesheet" type="text/css" href="/static/Admins/css/fonts/ptsans/stylesheet.css" media="screen">
    <link rel="stylesheet" type="text/css" href="/static/Admins/css/fonts/icomoon/style.css" media="screen">

    <link rel="stylesheet" type="text/css" href="/static/Admins/css/mws-style.css" media="screen">
    <link rel="stylesheet" type="text/css" href="/static/Admins/css/icons/icol16.css" media="screen">
    <link rel="stylesheet" type="text/css" href="/static/Admins/css/icons/icol32.css" media="screen">

    <!-- Demo Stylesheet -->
    <link rel="stylesheet" type="text/css" href="/static/Admins/css/demo.css" media="screen">

    <!-- jQuery-UI Stylesheet -->
    <link rel="stylesheet" type="text/css" href="/static/Admins/jui/css/jquery.ui.all.css" media="screen">
    <link rel="stylesheet" type="text/css" href="/static/Admins/jui/jquery-ui.custom.css" media="screen">

    <!-- Theme Stylesheet -->
    <link rel="stylesheet" type="text/css" href="/static/Admins/css/mws-theme.css" media="screen">
    <link rel="stylesheet" type="text/css" href="/static/Admins/css/themer.css" media="screen">
    <link rel="stylesheet" type="text/css" href="/static/Admins/css/my.css" media="screen">




</head>
<body>
    <form  method="post" action="/register" id="form">
        <div class="regist">
            {{csrf_field()}}
            <div class="regist_center">
                @if(session('success'))
                    <div class="mws-form-message success">
                        {{session('success')}}
                    </div>
                    @endif
                    @if(session("error"))
                    <div class="mws-form-message info">
                        {{session("error")}}
                    </div>
                    @endif
                <div class="regist_top">
                    <div class="left fl">
                        <a href="/register" class="btn btn-danger">手机注册</a>
                        <a href="/register/create" class="btn btn-danger">邮箱注册</a>
                    </div>
                    <div class="right fr"><a href="/status/index.html" target="_self">小米商城</a></div>
                    <div class="clear"></div>
                    <div class="xian center"></div>
                </div>
                <div class="regist_main center">
                    <div class="username">用&nbsp;&nbsp;户&nbsp;&nbsp;名:&nbsp;&nbsp;<input class="shurukuang ll" type="text" name="username" value="{{old('username')}}" placeholder="请输入你的用户名"/><span></span></div>
                    <div class="username">密&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;码:&nbsp;&nbsp;<input class="shurukuang ll" type="password"  name="password" placeholder="请输入你的密码"/><span></span></div>

                    <div class="username">确认密码:&nbsp;&nbsp;<input class="shurukuang ll" type="password" name="repassword" placeholder="请确认你的密码"/><span></span></div>

                    <div class="username">邮&nbsp;&nbsp;箱:&nbsp;&nbsp;
                        <input class="shurukuang ll" type="text" name="email" value="{{old('email')}}" placeholder="请填写正确的邮箱"/><span></span>
                    </div>
                    <div class="code">
                        <div class="left fl">验&nbsp;&nbsp;证&nbsp;&nbsp;码:&nbsp;&nbsp;<input class="yanzhengma ll" type="text" name="code" placeholder="请输入验证码"/><span></span></div>
                        <div class="right fl"><img src="{{captcha_src()}}" style="cursor:pointer;" onclick="this.src='{{captcha_src()}}?='+Math.random()"></div>
                        <div class="clear"></div>
                    </div>
                </div>
                <div class="regist_submit">
                    <input class="submit" type="submit"  value="立即注册" >
                </div>

            </div>
        </div>
    </form>
</body>
</html>
  <!-- JavaScript Plugins -->
    <script src="/static/Admins/js/libs/jquery-1.8.3.min.js"></script>
    <script src="/static/Admins/js/libs/jquery.mousewheel.min.js"></script>
    <script src="/static/Admins/js/libs/jquery.placeholder.min.js"></script>
    <script src="/static/Admins/custom-plugins/fileinput.js"></script>

    <!-- jQuery-UI Dependent Scripts -->
    <script src="/static/Admins/jui/js/jquery-ui-1.9.2.min.js"></script>
    <script src="/static/Admins/jui/jquery-ui.custom.min.js"></script>
    <script src="/static/Admins/jui/js/jquery.ui.touch-punch.js"></script>

    <!-- Plugin Scripts -->
    <script src="/static/Admins/plugins/datatables/jquery.dataTables.min.js"></script>
    <!--[if lt IE 9]>
    <script src="js/libs/excanvas.min.js"></script>
    <![endif]-->
    <script src="/static/Admins/plugins/flot/jquery.flot.min.js"></script>
    <script src="/static/Admins/plugins/flot/plugins/jquery.flot.tooltip.min.js"></script>
    <script src="/static/Admins/plugins/flot/plugins/jquery.flot.pie.min.js"></script>
    <script src="/static/Admins/plugins/flot/plugins/jquery.flot.stack.min.js"></script>
    <script src="/static/Admins/plugins/flot/plugins/jquery.flot.resize.min.js"></script>
    <script src="/static/Admins/plugins/colorpicker/colorpicker-min.js"></script>
    <script src="/static/Admins/plugins/validate/jquery.validate-min.js"></script>
    <script src="/static/Admins/custom-plugins/wizard/wizard.min.js"></script>

    <!-- Core Script -->
    <script src="/static/Admins/bootstrap/js/bootstrap.min.js"></script>
    <script src="/static/Admins/js/core/mws.js"></script>

    <!-- Themer Script (Remove if not needed) -->
    <script src="/static/Admins/js/core/themer.js"></script>

    <!-- Demo Scripts (remove if not needed) -->
    <script src="/static/Admins/js/demo/demo.dashboard.js"></script>
<script type="text/javascript">
    var DIR = {USER : false , PWD : false , REPWD : false , EMAIL : false , CODE : false};
    $('.ll').blur(function(event) {
        var hem = $(this).attr('placeholder');
        $(this).next('span').html(hem);
        $(this).next('span').css('color','red');
    });
    //用户名
    $("input[name = 'username']").blur(function() {
        var _this = $(this);
        var username = _this.val();
        if(username != ''){
            if(!username.match(/^[a-zA-Z]{2,16}$/)){
                $(this).next('span').css('color' , 'red').html('用户名不合法');
                $(this).addClass('curl');
            }else{
                $.get('/checkuser', {username : username} , function(data) {
                    if(data == 1){//用户名已经存在
                        _this.next('span').css('color' , 'red').html('此用户已经存在');
                        _this.addClass('curl');
                    }else if(data == 0){//用户名可以使用
                        _this.next('span').css('color' , 'green').html('此用户可以使用');
                        DIR.USER = true;
                    }
                });
            }
        }else{
            _this.next('span').css('color' , 'red').html('此处不能为空');
        }
    });

    //密码验证
    var pwd;
     $("input[name = 'password']").blur(function() {
        var _this = $(this);
        password = _this.val();
        pwd = password;
        if(password != ''){
            if(!password.match(/^\d{3,10}$/)){
                $(this).next('span').css('color' , 'red').html('密码安全性太低');
                $(this).addClass('curl');
            }else{
                $(this).next('span').css('color' , 'green').html('');
                DIR.PWD = true;
            }
        }else{
         _this.next('span').css('color' , 'red').html('此处不能为空');
     }
 });

    $("input[name = 'repassword']").blur(function() {
        var _this = $(this);
        var password = _this.val();
        if(password != ''){
            if(!password.match(/^\d{3,10}$/)){
                $(this).next('span').css('color' , 'red').html('密码安全性太低');
                $(this).addClass('curl');
            }else{
                if(password == pwd){
                    $(this).next('span').css('color' , 'green').html('');
                    DIR.REPWD = true;
                }else{
                    $(this).next('span').css('color' , 'red').html('与密码不一致');
                }

            }
        }else{
         _this.next('span').css('color' , 'red').html('此处不能为空');
     }
 });

    $("input[name = 'email']").blur(function() {
        var _this = $(this);
        var email = _this.val();
        if(email != ''){
            if(!email.match(/^([0-9A-Za-z\-_\.]+)@([0-9a-z]+\.[a-z]{2,3}(\.[a-z]{2})?)$/g )){
                $(this).next('span').css('color' , 'red').html('邮箱不合法');
                $(this).addClass('curl');
            }else{
               $(this).next('span').css('color' , 'green').html('邮箱可以使用');
               DIR.EMAIL = true;
            }
        }else{
         _this.next('span').css('color' , 'red').html('此处不能为空');
     }
 });

    $("input[name = 'code']").blur(function() {
        var _this = $(this);
        var password = _this.val();
        if(password != ''){
            _this.next('span').css('color' , 'red').html('');
            DIR.CODE = true;
        }else{
         _this.next('span').css('color' , 'red').html('此处不能为空');
     }
 });

     $("#form").submit(function(){
        $('input').trigger('blur');
        if(DIR.USER && DIR.CODE && DIR.EMAIL && DIR.PWD && DIR.REPWD){
            return true;
        }else{
            return false;
        }
    });

</script>