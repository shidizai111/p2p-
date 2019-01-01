<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <!-- 引入bootstrap的css样式 -->
    <link rel="stylesheet" href="./lib/bootstrap/css/bootstrap.min.css">
    <!-- 引入jquery库 -->
    <script src="./lib/jquery/jquery.js"></script>
    <!-- 引入bootstrapjs库 -->
    <script src="./lib/bootstrap/js/bootstrap.min.js"></script>
        <!-- 引入bootstrapjs表单验证库 -->
    <script src="./lib/bootstrapvalidator/dist/js/bootstrapValidator.min.js"></script>
    <!-- 引入bootstrap表单验证样式 -->
    <link rel="stylesheet" href="./lib/bootstrapvalidator/dist/css/bootstrapValidator.min.css">
    <!-- 引入字体图标css -->
    <link rel="stylesheet" href="./lib/fontawesome/css/fontawesome-all.min.css">
    <!-- 引入头部样式 -->
    <link rel="stylesheet" href="./dist/css/header.min.css">
    <!-- 引入页脚样式 -->
    <link rel="stylesheet" href="./dist/css/footer.min.css">
    <!-- 引入账户充值页面 -->
    <link rel="stylesheet" href="./dist/css/personalbank.min.css">
</head>
<body>
<?php
    include_once "./header.html"
?>

<!-- 账户充值内容 -->
<section id="account" class="container">
    <div class="recharge">
        <h3>账户充值</h3>
        <p>1. 由于银行系统的限制，充值功能建议使用 IE 内核（IE8及以上）的浏览器。</p>
        <p>2. 请注意：为打击信用卡套现行为，充值资金必须经过投资回款后方能允许提现。</p>
    </div>
</section>

<!-- 表格 -->
<section id="datatable" class="container">
    <!-- 按钮 -->
    <!-- <div class="btn-group" role="group" aria-label="...">
        <button type="button" class="btn btn-default">线上充值（第三方平台）</button>
        <button type="button" class="btn btn-default">线下充值</button>
    </div> -->
    <ul class="nav nav-tabs" role="tablist">
    <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">线上充值（第三方平台）</a></li>
    <li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">线下充值</a></li>
  </ul>
    <!-- 表格 -->
    <div class="bs-example" data-example-id="simple-table">
        <table class="table">
            <thead>
                <tr>
                <th>银行名称</th>
                <th>开户人姓名</th>
                <th>银行账号</th>
                <th>开户行支行名称</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                <td scope="row">
                    <span class="icon1"></span>
                </td>
                <td>源代码</td>
                <td>62170038233428412750</td>
                <td>府城大道支行</td>
                </tr>
                <tr>
                <td scope="row">
                <span class="icon2"></span>
                </td>
                <td>源代码</td>
                <td>62170038233428412750</td>
                <td>府城大道支行</td>
                </tr>
                <tr>
                <td scope="row">
                <span class="icon3"></span>
                </td>
                <td>源代码</td>
                <td>62170038233428412750</td>
                <td>府城大道支行</td>
                </tr>
            </tbody>
        </table>
        <div class="formcontent">
            <h4>第一步</h4>
            <p>请选择往以上一个账号汇款或转账您所要充值的金额（若您是跨行转账，推荐选择建行）。注：请保存您的交易记录信息。</p>
            <h4>第二步</h4>
            <p>款或转账成功后，再选择你所汇款或转账的账号，并填写以下完整的信息后，提交您的线下充值申请。我们将会在下个工作日核对您的申请。</p>
            <form class="form-horizontal" id="myform"> 
                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">银行</label>
                    <div class="col-sm-10">
                        <select class="form-control">
                            <option>工商银行62170038233428412750(府城大道支行)</option>
                            <option>农业银行6217003834411112750(成都天府新谷支行)</option>
                            <option>招商银行6212303810028412750(成都高新天府大道支行)</option>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label for="number" class="col-sm-2 control-label">交易号</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="inputEmail3" name="number" placeholder="请输入交易号">
                    </div>
                </div>
                <div class="form-group">
                    <label for="ctime" class="col-sm-2 control-label">充值时间</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="inputEmail3" name="ctime" placeholder="请输入充值时间">
                    </div>
                </div>
                <div class="form-group">
                    <label for="money" class="col-sm-2 control-label">充值金额</label>
                    <div class="col-sm-10">
                    <input type="text" class="form-control" name="money" placeholder="请输入充值金额">
                    </div>
                </div>
                <div class="form-group">
                    <label for="email" class="col-sm-2 control-label">说明</label>
                    <div class="col-sm-10">
                        <textarea style="resize: none;" class="form-control" name="note"></textarea>
                    </div>
                </div> 
                <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                        <button type="submit" class="btn btn-primary">确认提交</button>
                    </div>
                </div>
            </form>
        </div>
  </div>
</section>

<!-- !-- 页脚 --> 
<?php
    include_once "./footer.html"
 ?>
 <script src="./src/js/header.js"></script>
 <script src="./src/js/personalbank.js"></script>
</body>
</html>