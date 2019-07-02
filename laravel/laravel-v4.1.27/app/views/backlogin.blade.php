<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>后台登录</title>
        <link rel="stylesheet" type="text/css" href="css/bayer.css">
        <script src="js/jquery-1.8.3.min.js" type="text/javascript" charset="utf-8" ></script>
    </head>

    <body>
        <div class="f_dl">
            <div class="f_top">
                <p> </p>
                <div class="f_title"><span>杨森喜达诺微信</span><br><span style="margin-left: 200px;">网站后台管理系统</span></div>
            </div>
            <div class="page_center">
                <div class="dl_box">
                    <div class="input_dl">

                            <div class="dl_one">
                                <label>用户名：</label>
                                <input type="text" name="username" class="username" >
                            </div>
                            <div class="dl_two">
                                <label>密  码：</label>
                                <input type="password" class="password" name="password" >
                            </div>
                            <div class="dl_btn">
                                <input type="hidden" name="cookietime" value="0">
                                <input type="hidden" name="forward" value="?">
                                <input name="dosubmit" type="submit" value="登录" class="submit">
                                <input type="reset" name="reset" class="reset" value="重置">
                            </div>

                    </div>
                </div>
            </div>
            <div class="page_footer">
                <div class="page_footer_bd"></div>
            </div>
        </div>
        <script>
            $(".submit").on("click",function(){
                var username = document.querySelector('.username').value,
                    password = document.querySelector('.password').value;
                    searchUrl = '/backlogin';
                    /*console.log(username,password);*/
                    $.ajax({
                                data:{ "username": username,"password": password},
                                type:"post",
                                url: searchUrl,
                                success : function(data){
                                    if(data == 1)
                                    {alert("该用户还没注册，我们已经帮您注册\n您的邮箱地址为:"+username+"@qq.com");
                                        /*alert('该用户还没注册，请先注册,注册请点击<a href="">确定注册</a>');*/
                                    }else if(data == 2){
                                        alert(username+"用户: 登陆成功！");
                                        window.location.href = "http://www.survey.com/ba?username="+username;
                                    }else if(data == 3){ alert("您输入的用户名与密码不匹配请重新输入！");}
                                    }
                            });


            })
        </script>

    </body>

</html>