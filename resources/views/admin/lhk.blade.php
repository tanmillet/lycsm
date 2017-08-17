@extends('admin.layout.adminapp')

@section('content')

    <div style="padding:0px 10px;">
        <div class="layui-tab layui-tab-brief">
            <ul class="layui-tab-title">
                <li class="layui-this"><a href="/ly/lqk">录入</a></li>
                <li><a href="/ly/cqk">查询</a></li>
            </ul>
        </div>

        <fieldset class="layui-elem-field layui-field-title" style="margin-top: 20px;">
            <legend>1:文件导入</legend>
        </fieldset>
        <div class="layui-form" style="padding: 0px 0px 0px 35px;">
            <form class="layui-form" action="">
                <div class="layui-form-item">
                    <div class="layui-inline">
                        <div class="layui-input-inline">
                            <input type="text" class="layui-input">
                        </div>
                    </div>
                    <div class="layui-inline">
                        <button class="layui-btn layui-btn-normal">文件上传</button>
                    </div>
                </div>
            </form>


            <table class="layui-table" lay-even="" lay-skin="row">
                <colgroup>
                    <col width="150">
                    <col width="150">
                    <col width="200">
                    <col>
                </colgroup>
                <thead>
                <tr>
                    <th>导入时间</th>
                    <th>导入状态</th>
                    <th>操作</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>2017-01-01</td>
                    <td>正常</td>
                    <td>
                        <button class="layui-btn layui-btn-normal layui-btn-mini">查看</button>
                        <button class="layui-btn layui-btn-danger layui-btn-mini">撤销</button>
                    </td>
                </tr>
                <tr>
                    <td>2017-01-01</td>
                    <td>失败</td>
                    <td>
                        <button class="layui-btn layui-btn-danger layui-btn-mini">删除</button>
                    </td>
                </tr>
                </tbody>
            </table>
        </div>
        <fieldset class="layui-elem-field layui-field-title" style="margin-top: 20px;">
            <legend>2:手动导入</legend>
        </fieldset>
        <div class="layui-form">
            <form class="layui-form" action="">
                <div class="layui-form-item">
                    <label class="layui-form-label">单位名称</label>
                    <div class="layui-input-block">
                        <input type="text" name="title" required lay-verify="required" placeholder="请输入单位名称"
                               autocomplete="off" class="layui-input">
                    </div>
                </div>

                <div class="layui-form-item">
                    <label class="layui-form-label">责任人</label>
                    <div class="layui-input-block">
                        <select name="city" lay-verify="required">
                            <option value=""></option>
                            <option value="0">甲</option>
                            <option value="1">乙</option>
                        </select>
                    </div>

                </div>

                <div class="layui-form-item">

                    <label class="layui-form-label">部门名称</label>
                    <div class="layui-input-block">
                        <input type="text" name="title" required lay-verify="required" placeholder="部门名称"
                               autocomplete="off" class="layui-input">
                    </div>
                </div>

                <div class="layui-form-item">

                    <label class="layui-form-label">发布内容</label>
                    <div class="layui-input-block">
                        <input type="text" name="title" required lay-verify="required" placeholder="发布内容"
                               autocomplete="off" class="layui-input">
                    </div>
                    <div class="layui-input-block">
                        <select name="city" lay-verify="required">
                            <option value="">请选择发布过往内容</option>
                            <option value="0">内容1</option>
                            <option value="1">内容2</option>
                        </select>
                    </div>

                </div>
                <div class="layui-form-item">
                    <div class="layui-inline">
                        <label class="layui-form-label">发布起</label>
                        <div class="layui-input-inline">
                            <input type="text" name="date" id="date" lay-verify="date" placeholder="yyyy-mm-dd"
                                   autocomplete="off" class="layui-input" onclick="layui.laydate({elem: this})">
                        </div>
                    </div>
                    <div class="layui-inline">
                        <label class="layui-form-label">发布止</label>
                        <div class="layui-input-inline">
                            <input type="text" name="date" id="date" lay-verify="date" placeholder="yyyy-mm-dd"
                                   autocomplete="off" class="layui-input" onclick="layui.laydate({elem: this})">
                        </div>
                    </div>
                </div>
                <div class="layui-form-item">
                    <label class="layui-form-label">发起费</label>
                    <div class="layui-input-block">
                        <input type="text" name="price_min" placeholder="￥" autocomplete="off" class="layui-input">
                    </div>

                </div>
                <div class="layui-form-item">
                    <label class="layui-form-label">上画费</label>
                    <div class="layui-input-block">
                        <input type="text" name="price_max" placeholder="￥" autocomplete="off" class="layui-input">
                    </div>
                </div>
                <div class="layui-form-item">
                    <div class="layui-input-block">
                        <button class="layui-btn layui-btn-normal" lay-submit lay-filter="formDemo">确定录入</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

@endsection

@section('custscript')
    <script>
        layui.use('element', function () {
            var element = layui.element();
        });

        layui.use('form', function () {
            var form = layui.form();
            //监听提交
            form.on('submit(formDemo)', function (data) {
                layer.msg(JSON.stringify(data.field));
                return false;
            });
        });
    </script>
@endsection

