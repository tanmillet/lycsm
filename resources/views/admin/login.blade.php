<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1">
    <title>{{getAsysConf('sysname')}}</title>
    <link rel="icon" type="image/png" href="assets/images/favicon.png">
    <link rel="stylesheet" href="{{ getSrcUrl()}}/adminsrc/layui/css/layui.css" media="all"/>
    <style type="text/css">
        .admin-login-block {
            width: 100%;
            max-width: 640px;
            margin: 100px auto 0 auto
        }

        .admin-login-text {
            padding-top: 30px;
            color: #fff;
            font-weight: 700;
            font-size: 40px;
            text-align: center;
            width: 100%
        }

        .admin-login-text span {
            color: #5fb878
        }

        .login-font {
            font-size: 16px;
            width: 100%;
            color: #5e5e5e;
            text-align: center;
            padding: 20px 0;
            padding-top: 10px;
            margin: 10px auto
        }

        .login-font span {
            color: #fff
        }

        .admin-login-form {
            margin: 0 auto;
            width: 63.33333333%
        }

        .admin-login-input {
            margin-left: 0
        }

        .admin-login-btn {
            width: 100%;
            background: #5fb878
        }

        .admin-login-copy {
            text-align: center;
            color: #999
        }

        .verifyCode {
            width: 43.33333333%
        }
    </style>
</head>
<body class="layui-bg-cyan">
<div class="admin-login-block">
    <div class="admin-login-text">Hendar <span>官网后台系统</span></div>
    <div class="login-font"><span>系统登录</span></div>
    <div class="admin-login-form">
        <form class="layui-form"  method="POST" action="{{getRouteDeUrl()}}/hdadmin/login">
            <div class="layui-form-item">
                <div class="layui-input-block admin-login-input"><input type="text" name="username" required
                                                                        lay-verify="required" placeholder="登录账号"
                                                                        autocomplete="off" class="layui-input"></div>
            </div>
            <div class="layui-form-item">
                <div class="layui-input-block admin-login-input"><input type="password" name="password" required
                                                                        lay-verify="required" placeholder="登录密码"
                                                                        autocomplete="off" class="layui-input"></div>
            </div>
            <div class="layui-form-item">
                <div class="layui-input-block admin-login-input">
                    <button class="layui-btn admin-login-btn" lay-submit>登录</button>
                </div>
            </div>
        </form>
    </div>
</div>
<script type="text/javascript" src="{{getSrcUrl()}}/adminsrc/layui/layui.js"></script>
</body>
</html>