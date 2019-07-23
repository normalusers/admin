<!DOCTYPE html>
<!--[if lt IE 7]> <html class="lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--><html lang="en"><!--<![endif]-->
<head>
<meta charset="utf-8">

<!-- Viewport Metatag -->
<meta name="viewport" content="width=device-width,initial-scale=1.0">

<!-- Required Stylesheets -->
<link rel="stylesheet" type="text/css" href="/static/Admins/bootstrap/css/bootstrap.min.css" media="screen">
<link rel="stylesheet" type="text/css" href="/static/Admins/css/fonts/ptsans/stylesheet.css" media="screen">
<link rel="stylesheet" type="text/css" href="/static/Admins/css/fonts/icomoon/style.css" media="screen">

<link rel="stylesheet" type="text/css" href="/static/Admins/css/login.css" media="screen">

<link rel="stylesheet" type="text/css" href="/static/Admins/css/mws-theme.css" media="screen">

<title>MWS Admin - Login Page</title>

</head>

<body>

    <div id="mws-login-wrapper">
        <div id="mws-login">
            <h1>Login</h1>
            <div >
                @if(session('success'))
                <p>{{session('success')}}</p>
                @endif
                @if(session('error'))
                <p>{{session('error')}}</p>
                @endif
            </div>
            <div class="mws-login-lock"><i class="icon-lock"></i></div>
            <div id="mws-login-form">
                <form class="mws-form" action="/bglogin" method="post">
                    {{csrf_field()}}
                    <div class="mws-form-row">
                        <div class="mws-form-item">
                            <input type="text" name="username" value="{{old('username')}}" class="mws-login-username required" placeholder="username">
                        </div>
                    </div>
                    <div class="mws-form-row">
                        <div class="mws-form-item">
                            <input type="password" name="password" class="mws-login-password required" placeholder="password">
                        </div>
                    </div>
                    <div class="mws-form-row">
                        <input type="submit" value="Login" class="btn btn-success mws-login-button">
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- JavaScript Plugins -->
    <script src="/static/Admins/js/libs/jquery-1.8.3.min.js"></script>
    <script src="/static/Admins/js/libs/jquery.placeholder.min.js"></script>
    <script src="/static/Admins/custom-plugins/fileinput.js"></script>

    <!-- jQuery-UI Dependent Scripts -->
    <script src="/static/Admins/jui/js/jquery-ui-effects.min.js"></script>

    <!-- Plugin Scripts -->
    <script src="/static/Admins/plugins/validate/jquery.validate-min.js"></script>

    <!-- Login Script -->
    <script src="/static/Admins/js/core/login.js"></script>

</body>
</html>
