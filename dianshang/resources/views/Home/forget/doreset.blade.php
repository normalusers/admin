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
   <ul class="header-nav" "=">
     <li class="nav-first"><a href="" target="_blank"> 注册 </a></li>
     <li><a href="" target="_blank"> 登录 </a></li>
     <li><a href="http://service.taobao.com/support/main/service_center.htm" target="_blank"> </a></li>
   </ul>
 </div>
</div>
<div class="center">
 <div class="center">
  <div class="center">
   <div class="am-cf am-padding">
    <div class="am-fl am-cf">
     <strong class="am-text-danger am-text-lg">邮箱验证</strong>
   </div>
 </div>
 <hr />
 <!--进度条-->
 <div class="m-progress">
  <div class="m-progress-list">
   <span class="step-1 step" id="span1"> <em class="u-progress-stage-bg"></em> <i class="u-stage-icon-inner">1<em class="bg"></em></i> <p class="stage-name">邮箱验证</p> </span>
   <span class="step-1 step" id="span2"> <em class="u-progress-stage-bg"></em> <i class="u-stage-icon-inner">2<em class="bg"></em></i> <p class="stage-name">重置密码</p> </span>
   <span class="step-3 step" id="span3"> <em class="u-progress-stage-bg"></em> <i class="u-stage-icon-inner">3<em class="bg"></em></i> <p class="stage-name">完成</p> </span>
   <span class="u-progress-placeholder"></span>
 </div>
 <div class="u-progress-bar total-steps-2">
   <div class="u-progress-bar-inner"></div>
 </div>
</div>
<form class="am-form am-form-horizontal" action="/doreset" method="post" id="form">
  <div class="center div1" style="display:none;">
   <input type="text" id="code" style="display:block;float:left;width:200px;margin:0px 20px 30px 100px" placeholder="请输入验证码" />
   <div class="am-btn am-btn-success" id="huoqu" style="display:block;float:left;width:150px">
    点击获取
  </div>
</div>
<div class="center" style="margin:0px 0px 0px 120px">
 <span id="su"></span>
</div>
<div class="center div2" style="display:block;">
 <div class="am-form-group">
  <label for="user-new-password" class="am-form-label">新密码</label>
  <div class="am-form-content">
   <input type="password" name="password" id="user-new-password" placeholder="由数字、字母、下划线组合的6-15位密码" class="ll" /><span></span>
   <span></span>
 </div>
</div>
<label for="user-new-password" class="am-form-label">确认密码</label>
<div class="am-form-content">
  {{csrf_field()}}
  <input type="hidden" name="id" value="{{$id}}">
  <input type="password" name="repassword" id="user-new-password" placeholder="两次密码一致" class="ll" /><span></span>
  <span></span>
</div>
</div>
</div>
<div class="info-btn">
 <div class="" id="">
  <input type="submit" value="提交">
</div>
</div>
</form>

</div>
<!--底部-->
</div>
</body>
</html>
<script type="text/javascript">
  $(".ll").focus(function(){
    var ww =$(this).attr("placeholder");
    $(this).next('span').css('color' , 'red').html(ww);
  });
  var pwd;
  var PWD = REPWD = false;
  $("input[name = 'password']").blur(function() {
    var _this = $(this);
    password = _this.val();
    id = $("input[name = 'id']").val();
    pwd = password;
    if(password != ''){
      if(!password.match(/^\d{3,10}$/)){
        _this.next('span').css('color' , 'red').html('密码安全性太低');
      }else{
        $.get('/checkpwd', {pwd : pwd , id : id} , function(data) {
          if(data ==1){//最近使用的密码
            _this.next('span').css('color' , 'red').html('不能使用最近的密码');
          }else if(data ==2){
            _this.next('span').css('color' , 'green').html('');
            PWD = true;
          }
        });
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
      }else{
        if(password == pwd && PWD){
          $(this).next('span').css('color' , 'green').html('');
          REPWD = true;
        }else{
          PWD ? $(this).next('span').css('color' , 'red').html('与密码不一致') : $(this).next('span').css('color' , 'red').html('不能使用最近的密码');
        }

      }
    }else{
     _this.next('span').css('color' , 'red').html('此处不能为空');
   }
 });

$("#form").submit(function(){
        $('input').trigger('blur');
        if(PWD && REPWD){
            return true;
        }else{
            return false;
        }
    });

</script>