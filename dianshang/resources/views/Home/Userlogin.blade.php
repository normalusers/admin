<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="author" content="order by dede58.com"/>
    <title>会员登录</title>
    <link rel="stylesheet" type="text/css" href="/status/css/login.css">

</head>
<body>
    <!-- login -->
    <div class="top center">
        <div class="logo center">
            <a href="/status/index.html" target="_blank"><img src="/status/image/mistore_logo.png" alt=""></a>
        </div>
        <div class="container" style="background-color: red; width: 100px; height: 100px;">
                    @if(session('success'))
                    <div class="mws-form-message success" >
                        {{session('success')}}
                    </div>
                    @endif
                    @if(session("error"))
                    <div class="mws-form-message info">
                        {{session("error")}}
                    </div>
                    @endif
             </div>
    </div>
    <form  method="post" action="/userlogin" class="form center" id="fm">
        {{csrf_field()}}
        <div class="login">
            <div class="login_center">
                <div class="login_top">
                    <div class="left fl">会员登录</div>
                    <div class="right fr">您还不是我们的会员？<a href="/register">立即注册</a></div>
                    <div class="clear"></div>
                    <div class="xian center"></div>
                </div>
                <div class="login_main center">
                    <div class="username">用户名:&nbsp;<input class="shurukuang ll" type="text" name="username" placeholder="请输入你的用户名"/><span></span>
                    </div>
                    <div class="username">密&nbsp;&nbsp;&nbsp;&nbsp;码:&nbsp;<input class="shurukuang ll" type="password" name="password" placeholder="请输入你的密码"/><span></span>
                    </div>
                    <div class="username">
                        <div class="left fl">验证码:&nbsp;<input class="yanzhengma ll" type="text" name="code" placeholder="请输入验证码"/><span></span>
                        </div>
                        <div class="right fl"><img src="{{captcha_src()}}" style="cursor: pointer;" onclick="this.src='{{captcha_src()}}?='+Math.random()"></div>
                        <div class="clear">
                            <a href="/forget" class="btn btn-danger" style="color: pink; float: right;">找回密码</a>
                        </div>
                    </div>




                </div>
                <div class="login_submit">
                    <input class="submit" type="submit"  value="立即登录" >
                </div>

            </div>
        </div>
    </form>
    <footer>
        <div class="copyright">简体 | 繁体 | English | 常见问题</div>
        <div class="copyright">小米公司版权所有-京ICP备10046444-<img src="/status/image/ghs.png" alt="">京公网安备11010802020134号-京ICP证110507号</div>

    </footer>
</body>
</html>
<script src="/static/Admins/js/libs/jquery-1.8.3.min.js"></script>
<script type="text/javascript">
    var aa;
    var DIR = {USER : false , PWD : false , CODE : false};
    $(".ll").focus(function(){
        var ww =$(this).attr("placeholder");
        $(this).next('span').css('color' , 'red').html(ww);
    });
    $("input[name = 'username']").blur(function() {
        var _this = $(this);
        var username = _this.val();
        if(username != ''){
            if(!username.match(/^[a-zA-Z]{2,16}$/)){
                $(this).next('span').css('color' , 'red').html('用户名不合法');
            }else{
                $.get('/checkuser', {username : username} , function(data) {
                    if(data == 1){//用户名已经存在
                        aa = _this.val();;
                        _this.next('span').css('color' , 'green').html('');
                        DIR.USER = true;
                    }else if(data == 0){//用户名不存在
                        _this.next('span').css('color' , 'red').html('此用户还没注册');
                    }
                });
            }
        }else{
            _this.next('span').css('color' , 'red').html('此处不能为空');
        }
    });
    $("input[name = 'password']").blur(function(event) {
        var _this = $(this);
        password = _this.val();
        if(password != ''){
            if(!password.match(/^\d{3,10}$/)){
                $(this).next('span').css('color' , 'red').html('密码安全性太低');
            }else{
                if(aa != ''){
                    $.get('/checkloginpwd' , {pwd : password , username : aa} , function(data){
                        if(data == 1){//校验成功
                            $(this).next('span').css('color' , 'green').html('');
                            DIR.PWD = true;
                        }else if(data == 2){//校验失败
                            $(this).next('span').css('color' , 'red').html('密码错误,请重新输入');
                        }
                    });
                }
                $(this).next('span').css('color' , 'green').html('');
            }
        }else{
         _this.next('span').css('color' , 'red').html('此处不能为空');
     }
    });
    $("input[name = 'code']").blur(function(event) {
        var code = $(this).val();
        if(code == ''){
            $(this).next('span').css('color' , 'red').html('验证码不能为空');
        }else{
            $(this).next('span').css('color' , 'green').html('');
            DIR.CODE = true;
        }
    });
    $("#fm").submit(function() {
        $("input").trigger('blur');
        if(DIR.USER && DIR.PWD && DIR.CODE){
            return true;
        }
        return false;
    });
</script>