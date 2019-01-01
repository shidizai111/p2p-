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
    <link rel="stylesheet" href="./dist/css/personaldata.min.css">
    <link rel="stylesheet" href="./dist/css/list.min.css">

</head>
<body>
<?php
    include_once "./header.html"
?>
<!-- 个人中心 -->
<section id="personaldata" class="container">
    <div class="row">
    <?php
            include_once "./aside.html"
            ?>
        <div class="personalr col-lg-9">
                <div class="panel panel-default">
                    <div class="panel-heading">个人资料</div>
                    <div class="panel-body">
                        <form class="form-horizontal" id="myform">
                            <div class="form-group">
                                <label for="inputEmail3" class="col-sm-2 control-label">用户名</label>
                                <div class="col-sm-10">
                                    <span name="user_name"  class="form-control-static">小强</span>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputEmail3" class="col-sm-2 control-label">真实姓名</label>
                                <div class="col-sm-10">
                                <input type="text" name="user_realname" style="width: 250px;" class="form-control">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputEmail3" class="col-sm-2 control-label">证件号码</label>
                                <div class="col-sm-10">
                                    <span>512************4646</span>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="mobile" class="col-sm-2 control-label">手机号码</label>
                                <div class="col-sm-10">
                                <input type="text" class="form-control" name="user_mobile" placeholder="请输入手机号码">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="mobile" class="col-sm-2 control-label">联系电话</label>
                                <div class="col-sm-10">
                                <input type="text" class="form-control" name="user_tel" placeholder="请输入联系电话">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputEmail3"   class="col-sm-2 control-label">个人学历</label>
                                <div class="col-sm-10">
                                    <select class="form-control" name="user_education">
                                        <option>初中</option>
                                        <option>中专/高中</option>
                                        <option>专科</option>
                                        <option>本科</option>
                                        <option>硕士研究生</option>
                                        <option>博士研究生</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputEmail3"  class="col-sm-2 control-label">个人收入</label>
                                <div class="col-sm-10">
                                    <select class="form-control" name="user_money">
                                        <option>1000元以下</option>
                                        <option>1000元-1999元</option>
                                        <option>2000元-2999元</option>
                                        <option>3000-4999</option>
                                        <option>5000-8999</option>
                                        <option>10000以上</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="email" class="col-sm-2 control-label">联系地址</label>
                                <div class="col-sm-10">
                                    <textarea style="resize: none;" class="form-control"  name="user_address"></textarea>
                                </div>
                            </div> 
                            <div class="form-group">
                                <div class="col-sm-offset-2 col-sm-10">
                                    <button type="button" class="btn btn-primary" id="submitBtn">保存数据</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
        </div>
    </div>
</section>


<!-- 页脚 -->
<?php
    include_once "./footer.html"
 ?>
 <script src="./src/js/header.js"></script>
 <script src="./src/js/personaldata.js"></script>
</body>
</html>