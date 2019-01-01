<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no,minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <!-- 引入bootstrap的css样式 -->
    <link rel="stylesheet" href="./lib/bootstrap/css/bootstrap.min.css">
    <!-- 引入jquery库 -->
    <script src="./lib/jquery/jquery.js"></script>
    <!-- 引入bootstrapjs库 -->
    <script src="./lib/bootstrap/js/bootstrap.min.js"></script>
    <!-- 引入字体图标css -->
    <link rel="stylesheet" href="./lib/fontawesome/css/fontawesome-all.min.css">
    <!-- 引入头部样式 -->
    <link rel="stylesheet" href="./dist/css/header.min.css">
    <!-- 引入页脚样式 -->
    <link rel="stylesheet" href="./dist/css/footer.min.css">
    <link rel="stylesheet" href="./dist/css/borrow_apply.min.css">
        <!-- 引入列表样式 -->
    <link rel="stylesheet" href="./dist/css/list.min.css">
        <!-- 引入bootstrapjs表单验证库 -->
    <script src="./lib/bootstrapvalidator/dist/js/bootstrapValidator.min.js"></script>
    <!-- 引入bootstrap表单验证样式 -->
    <link rel="stylesheet" href="./lib/bootstrapvalidator/dist/css/bootstrapValidator.min.css">

</head>
<body>
<?php
    include_once "./header.html"
?>
<!-- 个人中心 -->
<section id="borrow_apply" class="container">
    <div class="row">
    <?php
    include_once "./aside.html"
    ?>
        <!-- 右边内容 -->
        <div class="personalr col-lg-9">
            <div class="el-tip-info">
                    <h3>信用借款</h3>
                    <p>
                        <span class="text-info">授信额度：</span><span class="text-danger">2000 </span>    
                        <span class="text-info">可借金额：</span><span class="text-danger">2000</span>
                    </p>
            </div>
            <div class="page-header">
                <h2>借款信息<span><button type="button" class="btn btn-primary">信用标</button></span></h2>
            </div>
            <!-- 表单 -->
            <form class="form-horizontal el-borrow-form row" novalidate="novalidate" method="post" id="myform"  method="post">
                <div class='col-lg-7'>
                <div class="form-group">
                    <label for="inputEmail3"   class="col-sm-2 control-label">借款类型</label>
                    <div class="col-sm-3">
                        <select class="form-control" name="borrow_type">
                            <option>信用贷</option>
                            <option>车易贷</option>
                            <option>房易贷</option>
                        </select>
                    </div>
                </div>
                    <div class="form-group">
                        <label class="col-sm-3 control-label">
                            借款金额
                        </label>
                        <div class="col-sm-3  input-group">
                            <input class="form-control" name="bidRequestAmount">
                            <span class="input-group-addon">元</span>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-3 control-label">
                            借款利息
                        </label>
                        <div class="col-sm-3  input-group">
                            <input class="form-control" name="currentRate">
                            <span class="input-group-addon">%</span>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-3 control-label">
                            借款期限
                        </label>
                        <div class="col-sm-3 input-group">
                            <select class="form-control" name="monthes2Return">
                                <option value="1">1</option>
                                <option value="3">3</option>
                                <option value="6">6</option>
                                <option value="9">9</option>
                                <option value="12">12</option>
                                <option value="24">24</option>
                            </select>
                            <span class="input-group-addon">月</span>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-3 control-label">
                            还款方式
                        </label>
                        <label class="radio-inline">
                            <input type="radio" value="0" checked="checked" name="paymentMethod">
                            按月分期
                        </label>
                        <label class="radio-inline">
                            <input type="radio" value="1" name="paymentMethod">
                            按月到期
                        </label>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-3 control-label">
                            最小投标
                        </label>
                        <div class="col-sm-3  input-group">
                            <input class="form-control" name="minBidAmount">
                            <span class="input-group-addon">元</span>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-3 control-label">
                            投标奖金
                        </label>
                        <div class="col-sm-3  input-group">
                            <input class="form-control" name="totalRewardAmount" value="0">
                            <span class="input-group-addon">%</span>
                        </div>
                    </div>
                    <!--
                    <div class="form-group">
                        <label class="col-sm-3 control-label">
                            最大投标
                        </label>
                        <div class="col-sm-3  input-group">
                            <input class="form-control" name="" />
                            <span class="input-group-addon">元</span>
                        </div>
                    </div>
                    -->
                    <div class="form-group">
                        <label class="col-sm-3 control-label">
                            招标天数
                        </label>
                        <div class="col-sm-3 input-group">
                            <select class="form-control" name="disableDays">
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                                <option value="7">7</option>
                                <option value="8">8</option>
                                <option value="9">9</option>
                                <option value="10">10</option>
                                <option value="11">11</option>
                                <option value="12">12</option>
                            </select>
                            <span class="input-group-addon">天</span>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-3 control-label">
                            借款标题
                        </label>
                        <div class="col-sm-9 input-group">
                            <input name="borrowTitle" class="form-control">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-3 control-label">
                            借款描述
                        </label>
                        <div class="col-sm-6  input-group">
                            <textarea name="borrowDescription" rows="4" class="form-control" style="resize: none;"></textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <button class="btn btn-primary col-lg-offset-3" type="submit" data-loading-text="提交" id="btnBorrow">
                            提交申请
                        </button>
                    </div>
                </div>
                    <div class="el-borrow-form-tip col-lg-3" id="box">
                        <h4>相关费用</h4>
                        <p>
                            <span class="text-info">利息</span>
                            <span class="el-borrow-cost" id="cost01">--</span>
                        </p>
                        <p>
                            <span class="text-info">奖金</span>
                            <span class="el-borrow-cost" id="cost02">--</span>
                        </p>
                        <p>
                            <span class="text-info">管理费</span>
                            <span class="el-borrow-cost" id="cost03">--</span>
                        </p>
				    </div>
                <!-- <div class="el-borrow-form-tip" id="box">
					<h4>相关费用</h4>
					<p>
						<span class="text-info">利息</span>
						<span class="el-borrow-cost" id="cost01">--</span>
					</p>
					<p>
						<span class="text-info">奖金</span>
						<span class="el-borrow-cost" id="cost02">--</span>
					</p>
					<p>
						<span class="text-info">管理费</span>
						<span class="el-borrow-cost" id="cost03">--</span>
					</p>
                </div> -->
			</form>

        </div>
    </div>
</section>
<!-- 页脚 -->
<?php
    include_once "./footer.html"
 ?>
 <script src="./src/js/header.js"></script>
 <script src="./src/js/borrow_apply.js"></script>
</body>
</html>