<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>系统</title>
    <meta name="renderer" content="webkit">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta http-equiv="Access-Control-Allow-Origin" content="*">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="format-detection" content="telephone=no">
    <meta name="csrf-token" content="{{ csrf_token() }}"/>
    <link rel="icon" href="favicon.ico">
    <link rel="stylesheet" href="/layui/css/layui.css" />
</head>
<body class="main_body" style="background-color: #eee">
<div class="layui-layout layui-layout-admin">
    <div class="layui-header header">
        <?php  $currentUrl = \Illuminate\Support\Facades\Request::getRequestUri();?>
        <div style="padding: 0px 135px;">
            <ul class="layui-nav" lay-filter="">
                <span>XXXX管理系统</span>
                <li class="layui-nav-item {{($currentUrl == '/ly/baset' ? 'layui-this' : '')}}"><a
                            href="/ly/baset">基础数据</a></li>
                <li class="layui-nav-item {{($currentUrl == '/ly/cqk' ? 'layui-this' : '')}}"><a href="/ly/cqk">欠款明细</a>
                </li>
                <li class="layui-nav-item {{($currentUrl == '/ly/chk' ? 'layui-this' : '')}}"><a href="/ly/chk">回款明细</a>
                </li>
                <li class="layui-nav-item {{($currentUrl == '/ly/lh' ? 'layui-this' : '')}}"><a href="/ly/lh">全部明细</a>
                </li>
            </ul>
        </div>
    </div>

    <div style="margin: 0 auto;position: relative;width: 1420px;">
        <div style="background: white;min-height: 1200px;">
            @yield('content')
        </div>
    </div>

</div>
<script type="text/javascript" src="/layui/layui.js"></script>
<script type="text/javascript" src="/97date/WdatePicker.js"></script>
@yield('custscript')
</body>
</html>