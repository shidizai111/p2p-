<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <!-- 开启视口 -->
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
    <!-- 引入首页样式 -->
    <link rel="stylesheet" href="./dist/css/index2.min.css">
</head>
<body>
    <?php
    include_once "./header.html"
    ?>
<!-- 海报 -->
<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
        <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
        <li data-target="#carousel-example-generic" data-slide-to="1"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
        <div class="item active">
            <img src="./assets/images/banner01.jpg" alt="">
        </div>
        <div class="item">
            <img src="./assets/images/banner02.jpg" alt="">
        </div>
    </div>

    <!-- Controls -->
    <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>
<!-- 列表 -->
<section id="Articlelist" class="container">
    <div class="row">
        <dl class="col-lg-4 list01">
            <!-- <span><img src="./assets/images/feature01.png" alt=""></span> -->
            <dt>投资理财</dt>
            <dd>稳定投资、高收益、短期限，易融贷先行赔付，保障投资人权益。</dd>
        </dl>
        <dl class="col-lg-4 list02">
            <dt>投资理财</dt>
            <dd>稳定投资、高收益、短期限，易融贷先行赔付，保障投资人权益。</dd>
        </dl>
        <dl class="col-lg-4 list03">
            <dt>投资理财</dt>
            <dd>稳定投资、高收益、短期限，易融贷先行赔付，保障投资人权益。</dd>
        </dl>
    </div>
</section>


<!-- 借款 -->
<section id="borrow" class="container">
    <div class="title row">
        <div class="col-lg-6">
            <h1>进行中的借款</h1>
        </div>
        <a href="" class="col-lg-6">进行中的借款</a>
    </div>
    <table class="table table-hover">
        <thead>
            <tr>
                <th>借款人</th>
                <th class="hidden-xs">借款标题</th>
                <th>年利率</th>
                <th>金额</th>
                <th>还款方式</th>
                <th>进度</th>
                <th>操作</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td colspan="7" class="text-center">
                    <P  class="text-danger">目前暂时没有进行中的借款</P>
                </td>   
            </tr>
        </tbody>
    </table>
</section>

<!-- 企业最新资讯 -->
<section id="enterprise" class="container ">
        <div class="tablel">
            <!-- 左边 -->
            <div class="title row">
                <div class="col-lg-6">
                    <h1>企业最新资讯</h1>
                </div>
                <a href="" class="col-lg-6">更多资讯</a>
            </div>
            <table class="table table-hover clear">
                <tbody>
                        <tr>
                            <a href="">
                                <td scope="row">
                                    <a href="">
                                        <span class="fl">央视力挺互联网金融</span>
                                        <span class="fr">发表日期：2015-03-23</span>
                                    </a>
                                </td>
                            </a>
                        </tr>
                        <tr>
                            <a href="">
                                <td scope="row">
                                    <a href="">
                                        <span class="fl">央视力挺互联网金融</span>
                                        <span class="fr">发表日期：2015-03-23</span>
                                    </a>
                                </td>
                            </a>
                        </tr>
                </tbody>
            </table>
        </div>
</section>

<!-- 页脚 -->
<?php
    include_once "./footer.html"
 ?>
</body>
<script src="./src/js/header.js"></script>
</html>