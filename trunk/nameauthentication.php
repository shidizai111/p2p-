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
    <!-- 引入借款项目样式 -->
    <link rel="stylesheet" href="./dist/css/nameauthentication.min.css">
        <!-- 引入列表样式 -->
        <link rel="stylesheet" href="./dist/css/list.min.css">
</head>
<body>
<?php
    include_once "./header.html"
?>
<!-- 个人中心 -->
<section id="borrowobjcet" class="container">
    <div class="row">
    <?php
            include_once "./aside.html"
            ?>
        <!-- 右边 -->
        <div class="personalr col-lg-9">
                <div class="panel panel-default">
                    <div class="panel-heading">借款项目</div>
                    <div class="panel-body">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>标题</th>
                                <th>时间</th>
                                <th>借款金额(元)</th>
                                <th>期限</th>
                                <th>利率</th>
                                <th>状态</th>
                            </tr>
                        </thead>
                        <tbody id="showBorrow">
                        
                        </tbody>
                    </table>
                    </div>
                </div>
        </div>
    </div>
</section>
<script id="borrowTmpl" type="text/html">
        <tr>
            <td>
                <a target="_blank" href="#">${borrowTitle}</a>
                <span class="label label-primary">${borrow_type.substr(0,1)}</span>
            </td>
            <td>2016-01-02</td>
            <td>${bidRequestAmount}</td>
            <td>${monthes2Return}月</td>
            <td>${currentRate}%</td>
            <td>
                <label class="text-muted">待发布</label>
                <label class="text-success">招标中</label>
                <label class="text-success">满标未审核</label>
                <label class="text-success">还款中</label>
                <label class="text-danger">招标拒绝</label>
            </td>
        </tr>
</script>
<!-- !-- 页脚 --> 
<?php
    include_once "./footer.html"
 ?>
 <script src="./src/js/header.js"></script>
 <!-- 引入模板js文件 -->
 <script src="./lib/jqueryTemplate/jquery.tmpl.js"></script>
 <script src="./src/js/nameauthentication.js"></script>
</body>
</html>