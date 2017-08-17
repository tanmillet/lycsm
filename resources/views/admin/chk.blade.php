@extends('admin.layout.adminapp')

@section('content')

    <div style="padding:0px 10px;">
        <div class="layui-tab layui-tab-brief">
            <ul class="layui-tab-title">
                <li><a href="/ly/lqk">录入</a></li>
                <li class="layui-this"><a href="/ly/cqk">查询</a></li>
            </ul>
        </div>

        <div class="layui-form">
            <form class="layui-form" action="">

                <div class="layui-form-item">
                    <div class="layui-inline">
                        <label class="layui-form-label">单位名称</label>
                        <div class="layui-input-block">
                            <input type="text" name="title" required lay-verify="required" placeholder="请输入单位名称"
                                   autocomplete="off" class="layui-input">
                        </div>
                    </div>
                    <div class="layui-inline">
                        <label class="layui-form-label">实际年份</label>
                        <div class="layui-input-block">
                            <select name="city" lay-verify="required">
                                <option value="">请选择实际所属年份</option>
                                <option value="0">2017</option>
                                <option value="1">2018</option>
                            </select>
                        </div>
                    </div>
                </div>

                <div class="layui-form-item">
                    <div class="layui-inline">
                        <label class="layui-form-label">责任人</label>
                        <div class="layui-input-block">
                            <select name="city" lay-verify="required">
                                <option value=""></option>
                                <option value="0">甲</option>
                                <option value="1">乙</option>
                            </select>
                        </div>
                    </div>
                    <div class="layui-inline">
                        <label class="layui-form-label">部门</label>
                        <div class="layui-input-block">
                            <select name="city" lay-verify="required">
                                <option value=""></option>
                                <option value="0">甲</option>
                                <option value="1">乙</option>
                            </select>
                        </div>
                    </div>
                </div>

                <div class="layui-form-item">
                    <label class="layui-form-label">发布内容</label>
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
                        <label class="layui-form-label">发生时间</label>
                        <div class="layui-input-inline">
                            <input type="text" name="date" id="date" lay-verify="date" placeholder="yyyy-mm-dd"
                                   autocomplete="off" class="layui-input" onclick="layui.laydate({elem: this})">
                        </div>
                        <div class="layui-form-mid">-</div>
                        <div class="layui-input-inline">
                            <input type="text" name="date" id="date" lay-verify="date" placeholder="yyyy-mm-dd"
                                   autocomplete="off" class="layui-input" onclick="layui.laydate({elem: this})">
                        </div>
                    </div>

                </div>
                <div class="layui-form-item">
                    <div class="layui-input-block">
                        <button class="layui-btn layui-btn-normal" lay-submit lay-filter="formDemo">查询</button>
                    </div>
                </div>
            </form>
            <table class="layui-table">
                <colgroup>
                    <col width="150">
                    <col width="150">
                    <col width="200">
                    <col>
                </colgroup>
                <thead>
                <tr>
                    <th>编号</th>
                    <th>实际所属年份</th>
                    <th>发生时间</th>
                    <th>部门</th>
                    <th>责任人</th>
                    <th>单位编号</th>
                    <th>单位名称</th>
                    <th>发布内容</th>
                    <th>发布起</th>
                    <th>发布止</th>
                    <th>预计收款时间</th>
                    <th>发布费</th>
                    <th>上画费</th>
                    <th>合同金额</th>
                    <th>借方</th>
                </tr>
                </thead>
                <tbody>

                </tbody>
            </table>
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

