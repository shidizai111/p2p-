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
    <!-- 引入个人中心样式 -->
    <link rel="stylesheet" href="./dist/css/borrow_info.min.css">
</head>
<body>
<?php
    include_once "./header.html"
?>
<!-- 借款信息 -->
<section id="borrowdata" class="container">
    <div class="row">
        <!-- 左边部分 -->
        <div class="panel panel-default col-lg-3">
            <div class="panel-heading">借款人</div>
            <div class="panel-body">
                <img src="./assets/images/head_icon.jpg" alt="">
                <p class="text-center"><a href="">xq</a></p><br>
                <p>籍贯： 四川 - 成都</p>
                <p>专职客服：<a href="">四川 - 成都</a></p>
                <p>认证信息： <span class="fa fa-user"></span></p>
                
            </div>  
        </div>
        <!-- 中间部分 -->
        <div class="col-lg-6">
            <table class="table">
                    <h3>zs借款
                        <span>信</span>
                    </h3>
                    <tbody>
                        <tr>
                        <td scope="row" width="20%">借款金额</td>
                        <td class="text-info">200</td>
                        </tr>
                        <tr>
                        <td scope="row">年化利率</td>
                        <td class="text-info">10.00%</td>
                        </tr>
                        <tr>
                        <td scope="row">借款期限</td>
                        <td class="text-info">3月</td>
                        </tr>
                        <tr>
                        <td scope="row">投标奖励</td>
                        <td class="text-info">0.00</td>
                        </tr>
                        <tr>
                        <td scope="row">还款方式</td>
                        <td class="text-info">20.00</td>
                        </tr>
                        <tr>
                        <td scope="row">剩余时间</td>
                        <td></td>
                        </tr>
                    </tbody>
            </table>
        </div>
        <!-- 右边 -->
        <div class="col-lg-3">
            <table class="table">
                    <tbody>
                        <tr>
                            <td scope="row" width="50%">总投标数</td>
                            <td class="text-info">2</td>
                        </tr>
                        <tr>
                            <td scope="row">还需金额</td>
                            <td class="text-info">0.00</td>
                        </tr>
                        <tr>
                            <td scope="row">投标进度</td>
                        </tr>
                        <tr>
                            <td colspan="2">
                            <div class="progress">
                            <div class="progress-bar progress-bar-info progress-bar-striped" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 100%">
                                <span class="sr-only">20% Complete</span>
                            </div>
                            </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
        </div>
    </div>
</section>

<section id="username" class="container">
    <div class="panel panel-default">
        <div class="panel-heading">
            借款人信息
        </div>
        <div class="panel-body">
            <table>
                <tbody>
                    <tr>
                    <td class="muted text-right">注册时间</td>
                    <td width="20%" style="padding-left: 10px;" class="text-info">
                        2015-03-30
                    </td>
                    <td class="muted text-right">借款额度</td>
                    <td width="20%" style="padding-left: 10px;" class="text-info">
                        2000
                    </td>
                    <td class="muted text-right">性别</td>
                    <td width="20%" style="padding-left: 10px;" class="text-info">
                        男
                    </td>
                    <td class="muted text-right">年龄</td>
                    <td width="20%" style="padding-left: 10px;" class="text-info">
                        25
                    </td>
                </tr>
                <tr>
                    <td class="muted text-right">文化程度</td>
                    <td width="20%" style="padding-left: 10px;" class="text-info">
                        硕士研究生
                    </td>
                    <td class="muted text-right">每月收入</td>
                    <td width="20%" style="padding-left: 10px;" class="text-info">
                        3000-4999
                    </td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>
</section>

<section id="username" class="container">
    <div class="panel panel-default">
        <div class="panel-heading">
            审核认证信息
        </div>
        <div class="panel-body">
            <table>
                <tbody>
                    <tr>
                    <td class="muted text-right">认证时态度</td>
                    <td width="20%" style="padding-left: 10px;" class="text-info">
                             优
                    </td>
                    <td class="muted text-right">信贷知识掌握情况</td>
                    <td width="20%" style="padding-left: 10px;" class="text-info">
                        优
                    </td>
                    <td class="muted text-right">借款感言</td>
                    <td width="20%" style="padding-left: 10px;" class="text-info">
                        给我2000度过难关
                    </td>
                </tr>
                <tr>
                    <td class="muted text-right">审核员认证意见</td>
                    <td width="20%" style="padding-left: 10px;" class="text-info">
                        啊啊啊啊啊
                    </td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>
</section>

<section class="container" >
    <div class="panel panel-default">
        <div class="panel-heading">
            <div style="font-size: 16px;">材料信息</div>
        </div>
        <div class="panel-body">
            <table class="table table-striped">
                <thead>
                <tr>
                    <th>材料类型</th>
                    <th>材料数量</th>
                </tr>
                </thead>
                <tbody>
                <tr style="cursor: pointer;" lid="2101" st="1" class="more">
                    <th>本人身份证</th>
                    <td>2</td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>
</section>

<section class="container" >
<div class="panel panel-default">
    <div class="panel-heading">
        <div style="font-size: 16px;">还款情况</div>
    </div>
    <div class="panel-body">
        <table class="table table-striped">
            <thead>
            <tr>
                <th>还款状态</th>
                <th>最近一周</th>
                <th>最近1月</th>
                <th>最近6月</th>
                <th>6个月前</th>
                <th>总计[?]</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td>提前还款</td>
                <td>0</td>
                <td>0</td>
                <td>0</td>
                <td>0</td>
                <td>0</td>
            </tr>
            <tr>
                <td>准时还款</td>
                <td>0</td>
                <td>0</td>
                <td>0</td>
                <td>0</td>
                <td>0</td>
            </tr>
            <tr>
                <td>逾期已还</td>
                <td>0</td>
                <td>0</td>
                <td>0</td>
                <td>0</td>
                <td>0</td>
            </tr>
            <tr>
                <td>逾期未还</td>
                <td>0</td>
                <td>0</td>
                <td>0</td>
                <td>0</td>
                <td>0</td>
            </tr>
            </tbody>
        </table>
    </div>
</div>
</section>

<section class="container">
    <div class="panel panel-default">
        <div class="panel-heading">
            <div style="font-size: 16px;">投标记录</div>
        </div>
        <div class="panel-body">
            <table class="table table-striped">
                <thead>
                <tr>
                    <th>投标人</th>
                    <th>年利率 </th>
                    <th>有效金额(¥)</th>
                    <th>投标时间</th>
                    <th>类型</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>si*****</td>
                    <td>

                        10%
                    </td>
                    <td style="padding-right:60px;" class="text-info">
                        1,000.00
                    </td>
                    <td>
                        2016-05-11 06:42:11
                    </td>
                    <td>手动投标</td>
                </tr>

                <tr>
                    <td>xia*****</td>
                    <td>

                        10%
                    </td>
                    <td style="padding-right:60px;" class="text-info">
                        1,000.00
                    </td>
                    <td>
                        2016-05-12 13:44:01
                    </td>
                    <td>手动投标</td>
                </tr>
                </tbody>
            </table>
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