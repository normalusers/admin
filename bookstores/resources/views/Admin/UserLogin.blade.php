<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <link rel="stylesheet" type="text/css" href="/css/bootstrap.css">
  <link href="/css/index.css" rel="stylesheet">
  <title>后台登录</title>
</head>
<body>
  <div class="errorInfo" >

                    @if (count($errors) > 0)
                        <div class="mws-form-message error">
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    @endif
  </div>
  <div class="box">
    <form action="/login" method="post">
      {{csrf_field()}}
      <div class="page-header">
        <h1> <small>管理系统后台登录</small></h1>
      </div>

      <div class="page-body">
        <div class="form-group">
          <label for="username" class="col-sm-2 control-label" style="width:100px;">用户名：</label>
          <div class="col-sm-10" style="width:300px;">
            <input type="text" class="form-control" id="username" value="" name="username" placeholder="请输入用户名">
          </div>
        </div>
        <div class="form-group">
          <label for="password" class="col-sm-2 control-label" style="width:100px;">密码：</label>
          <div class="col-sm-10" style="width:300px;">
            <input type="password" class="form-control" id="password" value="" name="password" placeholder="请输入密码">
          </div>
        </div>
        <div class="form-group captcha">
          <label for="captcha" class="col-sm-2 control-label" style="width:100px;">验证码:</label>
          <div class="col-sm-10" style="width:300px;">
            <input type="text" class="form-control " id="captcha" name="captcha" placeholder="请输入验证码"><p><img src="http://localhost/phptest/smallTest/Verification.php" alt="" class="captchaimg" onclick=" this.src ='http://localhost/phptest/smallTest/Verification.php?r='+Math.random()"></p>
          </div>
        </div>
        <div class="form-group">
          <div class="col-sm-offset-2 col-sm-10">
            <input type="submit" class="btn btn-default "  value="登录">
          </div>
        </div>
      </div>
    </form>

  </div>


</body>
</html>
