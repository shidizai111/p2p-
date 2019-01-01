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
     <!-- 引入投资样式 -->
     <link rel="stylesheet" href="./dist/css/invest.min.css">
    <!-- 引入分页css -->
     <link rel="stylesheet" href="./lib/JqueryPagination/jquery.pagination.css">
     <!-- 引入分页js -->
     <script src="./lib/JqueryPagination/jquery.pagination-1.2.7.min.js"></script>
    <!-- 引入模板引擎 -->
    <script src="./lib/jqueryTemplate/jquery.tmpl.js"></script>
</head>
<body>
<!-- 顶部导航 -->
<?php
    include_once "./header.html"
?>

<!-- 投资列表 -->
<section id="invest" class="container">
        <h4>投资列表</h4>
        <div class="btnset">
            <span>标的</span>
            <div class="btn-group" role="group" aria-label="...">
                <button type="button" class="btn btn-default active" >全部</button>
                <button type="button" class="btn btn-default">招标中</button>
                <button type="button" class="btn btn-default">还款中</button>
            </div>
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
            <tbody id='gridBody'>
                <!-- <tr>
                    <td scope="row">王五</td>
                    <td class="hidden-xs">江湖救急</td>
                    <td>12%</td>
                    <td>100</td>
                    <td>2000</td>
                    <td>按月分期还款</td>
                    <td><a href="./borrow_info.php"><button type="button" class="btn btn-default">查看</button></a></td>   
                </tr>
                <tr>
                    <td scope="row">王五</td>
                    <td class="hidden-xs">江湖救急</td>
                    <td>12%</td>
                    <td>100</td>
                    <td>2000</td>
                    <td>按月分期还款</td>
                    <td><a href="./borrow_info.php"><button type="button" class="btn btn-default">查看</button></a></td>   
                </tr> -->
            </tbody>
        </table>
        <div style="text-align: center;" id="pagination">
            <!-- 分页插件的html结构 -->
            <div id="page" class="m-pagination"></div>
		</div>
</section>
<!-- 2. 前端定义显示模板 -->
<script type="text/html" id="showInvest">
            <tr>
				<td>${user_id} ${user_name}</td>
				<td>${borrowTitle}</td>
				<td class="text-info">${currentRate}%</td>
				<td class="text-info">${bidRequestAmount}</td>
				<td>${paymentMethod}</td>
				<td>${(investmentAmount/bidRequestAmount*100).toFixed(2)}%</td>
				<td><a class="btn btn-danger btn-sm" href="borrow_info.php">查看</a></td>
			</tr>
    </script>
    <!-- 引入模板引擎 -->
    <!-- 自定义的公共js脚本 -->
    <!-- <script src="dist/js/common.min.js"></script> -->
    <script>
        /* // 投资列表实现的步骤
        // 1. 前端在页面加载完毕发起ajax请求去后端api获取数据
        $.get("api/getChartData.php",function (pageData) {
            // 3. 后端实现api的功能，提供数据给前端【临时使用：getChartData.php】
            // 4. 前端把模板和数据合二为一
            //语法：$('模板ID').tmpl(JSON数据或者数组)
            let htmlStr=$("#showInvest").tmpl(pageData);

            // 5. 前端把动态数据添加到页面中
            $("#gridBody").html(htmlStr);
        },"json"); */
    </script>

    <!-- 分页的参数配置 -->
    <script>
        // 配置分页的对象
        $("#page").page({
            debug: true,    //开启调试模式
            showInfo: true, //显示调试信息
            showJump: true, //显示跳转选项
            showPageSizes: true, //显示每页大小
            pageSize: 2, //定义每页大小，总数据只有5条，每页大小要小于5才能看到分页效果
            remote: {
                url: 'api/getPagerData.php', //远程api的地址
                success: function (pageData) {
                    //分页成功获取的数据的回调函数
                    //console.log("分页成功获取的数据的回调函数",pageData);
                    /* 
                    {
                        total: 5,
                        list: [
                            {},
                            {},
                            {},
                            {},
                            {}
                        ]
                    }
                    */

                    let htmlStr=$("#showInvest").tmpl(pageData.list);
                    console.log(htmlStr);

                    // 5. 前端把动态数据添加到页面中
                    $("#gridBody").html(htmlStr);
                    //$("#eventLog").append(' remote callback : ' + JSON.stringify(data) + '<br />');
                }
            }
        });

        /* $("#page").on("pageClicked", function (event, pageIndex) {
            $("#eventLog").append('EventName = pageClicked , pageIndex = ' + pageIndex + '<br />');
        }).on('jumpClicked', function (event, pageIndex) {
            $("#eventLog").append('EventName = jumpClicked , pageIndex = ' + pageIndex + '<br />');
        }).on('pageSizeChanged', function (event, pageSize) {
            $("#eventLog").append('EventName = pageSizeChanged , pageSize = ' + pageSize + '<br />');
        }); */
    </script>
<!-- 页脚 -->
<?php
    include_once "./footer.html"
 ?>
 <script src="./src/js/header.js"></script>

</body>
</html>