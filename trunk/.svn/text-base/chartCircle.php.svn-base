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
    <script src="./lib/echarts/echarts-all.js"></script>

</head>
<body>
       <!-- 加载公共的页头文件 -->
    <?php
       //include_once "./api/loginCheck.php";
       include_once "./header.html";
    ?>
  <!-- 模板页面的内容开始 -->
  <section class="container">
        <div class="row">
            <!-- 左边树形目录菜单 -->

				<!-- 引入左侧菜单 -->
                <?php
                    include_once "./aside.html"
                    ?>

            <!-- 右侧主体内容 -->
            <div class="col-lg-9">
            <div class="panel panel-default">
                <div class="panel-heading">
                    报表统计
                </div>
                <!-- step1：为ECharts准备一个具备大小（宽高）的Dom -->
                <div id="chartP2P" style="width:100%;height:500px"></div>
            </div>
            </div>
        </div>
    </section>
    <!-- 模板页面的内容结束 -->

    <!-- 加载公共的页脚文件 -->
    <?php
       include_once "./footer.html";
    ?>

</body>
<script>
     //3-1. 基于准备好的dom，初始化echarts图表
     var myChart = echarts.init(document.getElementById('chartP2P')); 
        
        //3-2. 设置配置对象
        var option = {
/*             tooltip: {
                show: true  //数据的工具提示
            },
            legend: {
                data:['借款类型的金额统计'] //图例
            },
            //X轴的信息
            xAxis : [
                {
                    type : 'category', //类型： 分类
                    data : ["信用贷","车易贷","房易贷"] //x轴数据
                }
            ],
            //y轴的信息
            yAxis : [
                {
                    type : 'value' //类型： 值
                }
            ],
            //数据序列： 为报表的图形体统数据源
            series : [
                {
                    "name":"借款类型的金额统计", //图例名称
                    "type":"bar", //报表类型 bar 柱状图
                    "data":[50000,150000,600000] //数组数据
                }
            ] */
        };

        option = {
            title : {
                text: '借款类型的金额统计',
                subtext: '统计年份2018',
                x:'center'
            },
            tooltip : {
                trigger: 'item',
                formatter: "{a} <br/>{b} : {c} ({d}%)"
            },
            legend: {
                orient : 'vertical', //垂直对齐
                x : 'left', //水平位置： 左边
                data:["信用贷","车易贷","房易贷"]
            },
            //工具箱
            toolbox: {
                show : true,
                feature : {
                    mark : {show: true},
                    dataView : {show: true, readOnly: false},
                    magicType : {
                        show: true, 
                        type: ['pie', 'funnel'],
                        option: {
                            funnel: {
                                x: '25%',
                                width: '50%',
                                funnelAlign: 'left',
                                max: 1548
                            }
                        }
                    },
                    restore : {show: true},
                    saveAsImage : {show: true}
                }
            },
            calculable : true,
            series : [
                {
                    name:'借款类型的金额统计',
                    type:'pie', //饼型报表
                    radius : '55%', //饼的半径大小
                    center: ['50%', '60%'],
                    data:[] //在异步获取数据时，要把最开始的静态数据删除，显示loading动画
                }
            ]
        };

        //3-3. 为echarts对象加载数据 
        myChart.setOption(option); 


        // (1)做好静态报表
        // (2)发起ajax请求去后端api获取数据
        $.get("API/getChartData.php",function (chartData) {
            //console.log(chartData);
            
            // (3)把获取到的数据封装为报表需要的格式
            let dataArray=[
                {value:0, name:'信用贷'},
                {value:0, name:'车易贷'},
                {value:0, name:'房易贷'}
            ];
            //遍历数组执行封装
            chartData.forEach((v,i) => {
                
                //borrow_type: "信用贷", bidRequestAmount: "5000"
                if(v.borrow_type=="信用贷"){
                    dataArray[0].value+=parseFloat(v.bidRequestAmount);
                }
                else if(v.borrow_type=="车易贷"){
                    dataArray[1].value+=parseFloat(v.bidRequestAmount);
                }
                else if(v.borrow_type=="房易贷"){
                    dataArray[2].value+=parseFloat(v.bidRequestAmount);
                }
            });
            console.log(dataArray);


            // (4)修改series数据序列的数据为封装的数组
            option.series[0].data=dataArray;

            // (5)调用方法重新设置myChart.setOption(option); 
            myChart.setOption(option); 
            // 隐藏加载的loading动画
            myChart.hideLoading(); 
        },"json");
</script>
</html>