<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <!-- <form action="us" method="get" enctype="multipart/form-data">
        {{csrf_field()}}
        用户名:<input type="text" name="username">
        密码:<input type="password" name="pwd">
        <input type="submit" value="提交">
    </form> -->

    <p>当前时间为</p>{{time()}}
    <p>当前默认值为{!!$username!!}</p>
</body>
</html>