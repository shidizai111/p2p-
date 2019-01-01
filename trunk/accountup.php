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
    <link rel="stylesheet" href="./dist/css/accountup.min.css">
</head>
<body>
<?php
    include_once "./header.html"
?>

<!-- 账户充值内容 -->
<section id="account" class="container">
    <div class="recharge">
        <h3>账户提现</h3>
        <p>1. 本平台工作日会处理当天 17:00 之前的提款申请。</p>
        <p>2. 为了确保银行转账成功，请您确认银行账号信息的 正确性。</p>
        <p>3. 单笔提现范围-普通用户500.00 元 ~ 500000.00 元。</p>
        <p>4. 单笔提现范围-VIP用户500.00 元 ~ 500000.00 元。</p>
        <p>5. 目前提现服务费：1万元(含) 之内：2.00 元/笔；1万元（以上） ：5.00 元/笔。</p>
        <p>6. 为避免信用卡套现，故充值15日内未投资提现按提现金额的0.4%收取提现费用。</p>
        <p>7. 本次可提现 = 可用余额 - 净值保证金 - 不可提现金额 + 投标冻结 - 最高服务费 - 返还体验金</p>
    </div>
</section>

<!-- 表格 -->
<section id="accountup" class="container">
    <!--表单 -->
    <div class="bs-example" data-example-id="simple-table">
        <div class="formcontent">
            <div class="row fonts">
                <div class="col-lg-4">
                    总金额：
                    <span class="text-primary">1000元</span>
                </div>
                <div class="col-lg-4">
                    可提现金额：
                    <span class="text-primary">8000元</span>
                </div>
                <div class="col-lg-4">
                    冻结金额：
                    <span class="text-primary">8000元</span>
                </div>
            </div>
            <form class="form-horizontal" id="myform"> 
                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">银行</label>
                    <div class="col-sm-10">
                        <select class="form-control">
                            <option>工商银行</option>
                            <option>农业银行</option>
                            <option>建设银行</option>
                            <option>招商银行</option>
                            <option>中国银行</option>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label for="bank" class="col-sm-2 control-label">开户行</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="inputEmail3" name="bank" placeholder="请输入开户行">
                    </div>
                </div>
                <div class="form-group">
                    <label for="cardnumber" class="col-sm-2 control-label">银行卡号</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="inputEmail3" name="cardnumber" placeholder="请输入银行卡号">
                    </div>
                </div>
                <div class="form-group">
                    <label for="username" class="col-sm-2 control-label">户主姓名</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="inputEmail3" name="username" placeholder="请输入户主姓名">
                    </div>
                </div>
                <div class="form-group">
                    <label for="mobile" class="col-sm-2 control-label">通知电话</label>
                    <div class="col-sm-10">
                    <input type="text" class="form-control" name="mobile" placeholder="请输入电话号码">
                    </div>
                </div>
                <div class="form-group">
                    <label for="money" class="col-sm-2 control-label">提现金额</label>
                    <div class="col-sm-10">
                    <input type="text" class="form-control" name="money" placeholder="请输入提现金额">
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
 <script src="./src/js/accountup.js"></script>
</body>
</html>