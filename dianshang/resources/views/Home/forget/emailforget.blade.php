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
       <strong class="am-text-danger am-text-lg">邮箱验证</strong>
      </div>
     </div>
     <hr />
     <!--进度条-->
     <div class="m-progress">
      <div class="m-progress-list">
       <span class="step-1 step" id="span1"> <em class="u-progress-stage-bg"></em> <i class="u-stage-icon-inner">1<em class="bg"></em></i> <p class="stage-name">邮箱验证</p> </span>
       <span class="step-2 step" id="span2"> <em class="u-progress-stage-bg"></em> <i class="u-stage-icon-inner">2<em class="bg"></em></i> <p class="stage-name">重置密码</p> </span>
       <span class="step-3 step" id="span3"> <em class="u-progress-stage-bg"></em> <i class="u-stage-icon-inner">3<em class="bg"></em></i> <p class="stage-name">完成</p> </span>
       <span class="u-progress-placeholder"></span>
      </div>
      <div class="u-progress-bar total-steps-2">
       <div class="u-progress-bar-inner"></div>
      </div>
     </div>
     <form class="am-form am-form-horizontal" action="/forget" method="post">
      <label>请输入邮箱 : </label>
      <div class="center div1" style="display:;">
       <input type="text" name="email" style="display:block;float:left;width:200px;margin:0px 20px 30px 100px" placeholder="" />
       {{csrf_field()}}
       <input type="submit" value="点击获取邮箱验证" class="am-btn am-btn-success" id="huoqu" style="display:block;float:left;width:150px">
      </div>
      <div class="center" style="margin:0px 0px 0px 120px">
       <span id="su"></span>
      </div>
     </form>
    </div>
   </div>
  </div>
 </body>
</html>