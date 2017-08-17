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
    <link rel="stylesheet" href="/layui/css/layui.css" media="all"/>
    <link rel="stylesheet" href="/css/font_eolqem241z66flxr.css" media="all"/>
    <link rel="stylesheet" href="/css/main.css" media="all"/>
</head>
<body class="main_body">
<div class="layui-layout layui-layout-admin">
    <div class="layui-header header">
        <?php  $currentUrl = \Illuminate\Support\Facades\Request::getRequestUri();?>
        <div style="padding-left: 20%;background-color: #393d49;">
            <ul class="layui-nav" lay-filter="">
                <li class="layui-nav-item {{($currentUrl == '/ly/baset' ? 'layui-this' : '')}}"><a href="/ly/baset">基础数据</a></li>
                <li class="layui-nav-item {{($currentUrl == '/ly/cqk' ? 'layui-this' : '')}}"><a href="/ly/cqk">欠款明细</a></li>
                <li class="layui-nav-item {{($currentUrl == '/ly/chk' ? 'layui-this' : '')}}"><a href="/ly/chk">回款明细</a></li>
                <li class="layui-nav-item {{($currentUrl == '/ly/lh' ? 'layui-this' : '')}}"><a href="/ly/lh">全部明细</a></li>
            </ul>
        </div>
    </div>

    @yield('content')

</div>
<script type="text/javascript" src="/layui/layui.js"></script>
@yield('custscript')
</body>
</html>