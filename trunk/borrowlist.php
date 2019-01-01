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
    <link rel="stylesheet" href="./dist/css/borrowlist.min.css">
        <!-- 引入列表样式 -->
        <link rel="stylesheet" href="./dist/css/list.min.css">
</head>
<body>
<?php
    include_once "./header.html"
?>
<!-- 个人中心 -->
<section id="borrowlist" class="container">
    <div class="row">
    <?php
            include_once "./aside.html"
            ?>
        <!-- 右边 -->
        <div class="personalr col-lg-9">
                <div class="panel panel-default">
                    <div class="panel-heading">还款计划</div>
                    <div class="panel-body">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>日期</th>
                                <th>期数</th>
                                <th>金额(元)</th>
                                <th>本金(元)</th>
                                <th>利息(元)</th>
                                <th>状态</th>
                                <th>详情</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>2016-01-02</td>
                                <td>11</td>
                                <td>1000</td>
                                <td>990</td>
                                <td>12</td>
                                <td>已还</td>
                                <td scope="row">
                                    <span class="bgfont">信</span>
                                    <a href="">江湖救急</a>
                                </td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>2016-01-02</td>
                                <td>11</td>
                                <td>1000</td>
                                <td>990</td>
                                <td>12</td>
                                <td>未还</td>
                                <td scope="row">
                                    <span class="bgfont">信</span>
                                    <a href="">江湖救急</a>
                                </td>
                                <td><a href="">马上还款</a></td>
                            </tr>
                        </tbody>
                    </table>
                    </div>
                </div>
        </div>
    </div>
</section>

<!-- !-- 页脚 --> 
<?php
    include_once "./footer.html"
 ?>
 <script src="./src/js/header.js"></script>
</body>
</html>