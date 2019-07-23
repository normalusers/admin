<!DOCTYPE html>
<html>
 <head>
  <meta charset="UTF-8" />
  <title>账户中心</title>
  <link rel="stylesheet" href="/static/Homes/password/mima/Css/ucenter.css" />
  <link href="/static/Homes/password/xiangmu/AmazeUI-2.4.2/assets/css/admin.css" rel="stylesheet" type="text/css" />
  <link href="/static/Homes/password/xiangmu/AmazeUI-2.4.2/assets/css/amazeui.css" rel="stylesheet" type="text/css" />
  <link href="/static/Homes/password/xiangmu/css/personal.css" rel="stylesheet" type="text/css" />
  <link href="/static/Homes/password/xiangmu/css/stepstyle.css" rel="stylesheet" type="text/css" />
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

  <script src="/static/Homes/password/xiangmu/AmazeUI-2.4.2/assets/js/jquery.min.js" type="text/javascript"></script>
  <script src="/static/Homes/password/xiangmu/AmazeUI-2.4.2/assets/js/amazeui.js" type="text/javascript"></script>


 </head>
 <body>
  <div id="header">
   <div class="header-layout">
    <div style="float:left;margin-top:-15px;">
      <img src="/status/image/mistore_logo.png" alt="" style="height:70px">
    </div>
    <h2 class="logo-title"> 找回密码 </h2>
    <ul class="header-nav">
     <li class="nav-first"><a href="http://www.onlineshop.com/register" target="_blank"> 注册 </a></li>
     <li><a href="http://www.onlineshop.com/userlogin" target="_blank"> 登录 </a></li>
     <li><a href="http://service.taobao.com/support/main/service_center.htm" target="_blank"> </a></li>
    </ul>
   </div>
  </div>
  <div class="center">
   <div class="center">
    <div class="center">
     <div class="am-cf am-padding">
      <div class="am-fl am-cf">
       <strong class="am-text-danger am-text-lg">手机号验证</strong>
      </div>
     </div>
     <hr />
     <!--进度条-->
     <div class="m-progress">
      <div class="m-progress-list">
       <span class="step-1 step" id="span1"> <em class="u-progress-stage-bg"></em> <i class="u-stage-icon-inner">1<em class="bg"></em></i> <p class="stage-name">手机号验证</p> </span>
       <span class="step-2 step" id="span2"> <em class="u-progress-stage-bg"></em> <i class="u-stage-icon-inner">2<em class="bg"></em></i> <p class="stage-name">重置密码</p> </span>
       <span class="step-3 step" id="span3"> <em class="u-progress-stage-bg"></em> <i class="u-stage-icon-inner">3<em class="bg"></em></i> <p class="stage-name">完成</p> </span>
       <span class="u-progress-placeholder"></span>
      </div>
      <div class="u-progress-bar total-steps-2">
       <div class="u-progress-bar-inner"></div>
      </div>
     </div>
     <form class="am-form am-form-horizontal" action="/phoneforget" id="form" method="post">

      <div class="center div1" style="display:;">
        <div>
        <label>请输入手机号 : </label>
       <input type="text" class="ll" name="phone" style="width:200px;" placeholder="" /><span></span>
       </div>
       <a  class="btn btn-info" id="sendshort"  >免费获取短信验证码</a>
       <label>请输入手机验证码 : </label>
       <input type="text" class="ll" name="code" s placeholder="" style="width:200px;" /><span></span>
       {{csrf_field()}}
       <input type="submit" value="确认修改" class="am-btn am-btn-success" id="huoqu" style="width:150px">
      </div>
      <div class="center" style="margin:0px 0px 0px 120px">
       <span id="su"></span>
      </div>
     </form>
    </div>
   </div>
  </div>
 </body>
 <script type="text/javascript">
  var CODE = PHONE = false;
  $(".ll").focus(function(event) {
    var pp = $(this).prev('label').html();
    $(this).next('span').css('color' , 'red').html(pp);
  });
  $("input[name = 'phone']").blur(function(){
        var _this = $(this);
        var phone = $(this).val();
        if(!phone.match(/^1(3[0-9]|5[0-9]|8[0-9])[0-9]{8}$/)){//手机不符合规则
            $(this).next('span').css('color' , 'red').html('此手机号不合法');
            $(this).addClass('curl');
        }else{
            if(phone != ''){
                    $.get('/checkphone' , {phone : phone} ,  function(data) {
                    if(data == 1){//已经存在
                        _this.next('span').css('color' , 'red').html('此手机号已经存在');
                    }else if(data == 0){
                        _this.next('span').css('color' , 'green').html('此手机号可以使用');
                        _this.addClass('culs');
                        PHONE = true;
                    }
                });
                }else{
                    _this.next('span').css('color' , 'red').html('不能为空');
                }
        }

    });
    $("#sendshort").click(function() {
        var phone = $("input[name = 'phone']").val();
        var _this = $(this);
        var c = 59;
        $.get('/sendShortMsg' , {phone : phone} ,  function(data) {
            if(data.code == '000000' && data.msg == 'OK'){
                var t = window.setInterval(function(){
                    _this.attr('disabled' , true);
                    _this.html(c);
                    c--;
                    if(c <= 0){
                        _this.attr('disabled' , false);
                        _this.html('点击此处发送验证码');
                        clearInterval(t);
                    }
                } , 1000);
            }else{
              alert('发送短信出现异常,请更换邮箱方式找回密码');
            }
        });
    });

   $("input[name = 'code']").blur(function(event) {
        code = $(this).val();
        var _this = $(this);
        if(code != ''){
            $.get('/checkcode' , {code : code} , function(data) {
                if(data == 1){//验证码正确
                    _this.next('span').css('color' , 'green').html('验证码正确');
                    CODE = true;
                }else if(data == 2){//验证码有误
                    _this.next('span').css('color' , 'red').html('验证码有误');
                }else if(data == 3){//验证码过期
                    _this.next('span').css('color' , 'red').html('验证码过期');
                }
            });
        }else{
            $(this).next('span').css('color' , 'red').html('验证码不能为空');
        };

    });
   $("#form").submit(function(){
    $("input").trigger('blur');
    if(PHONE && CODE){
      return true;
    }else{
      return false;
    }
   });
 </script>
</html>