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
    <!-- 引入bootstrap表单验证css样式 -->
    <link rel="stylesheet" href="./lib/bootstrapvalidator/dist/css/bootstrapValidator.min.css">
    <!-- 引入字体图标css -->
    <link rel="stylesheet" href="./lib/fontawesome/css/fontawesome-all.min.css">
    <!-- 引入头部样式 -->
    <link rel="stylesheet" href="./dist/css/header.min.css">
    <!-- 引入页脚样式 -->
    <link rel="stylesheet" href="./dist/css/footer.min.css">
    <!-- 引入登录页面样式 -->
    <link rel="stylesheet" href="./dist/css/login.min.css">
</head>
<body>
<?php
    include_once "./header.html"
?>

<!-- 登录界面 -->
<section id="login" class="container">
    <div class="panel panel-default">
        <div class="panel-heading">用户登录</div>
        <div class="panel-body">
            <form class="form-horizontal" id="myform">
                <h4 class="text-center">请输入用户名和密码</h4>
                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">用户名</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="inputEmail3" name="username"  placeholder="请输入用户名">
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputPassword1" class="col-sm-2 control-label">密&emsp;码</label>
                    <div class="col-sm-10">
                        <input type="password" class="form-control" id="inputPassword1"  placeholder="请输入密码" name="inputPassword1">
                    </div>
                </div>
                <div class="form-group">
                    <label for="checkCode" class="col-sm-2 control-label">验证码</label>
                    <div class="col-sm-5">
                    <input type="text" class="form-control" name="checkCode" id="checkCode" placeholder="请输入验证码">
                    </div>
                    <div class="col-sm-5">
                        <canvas id="mycanvas" title="看不清楚请点击换一个" width="100" height="40"></canvas>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-9">
                        <button type="submit" class="btn btn-success">登录</button>
                        <a href="/register.php">新用户，马上注册</a>
                    </div>
                </div>
            </form>
        </div>
    </div>
</section>

<!-- 模态框 -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel"></h4>
      </div>
      <div class="modal-body">

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">关闭</button>
      </div>
    </div>
  </div>
</div>

<!-- 页脚 -->
<footer id="footer">
    <div class="container">
        <div class="row">
            <div class="content col-lg-8">
                <p>专业Java培训、PHP培训、UI培训、iOS培训、高级Web前端培训机构</p>
                <p>版权所有：&emsp;2006-2015成都源代码教育咨询有限公司</p>
                <p>地&emsp;&emsp;址：&emsp;成都市高新区府城大道西段399号天府新谷1号楼620-625</p>
                <p>电&emsp;&emsp;话：&emsp;028-86261949&nbsp; / 400-808-6840&emsp;
                    邮箱：&emsp;yuandaima@itsource.cn</p>
                <p>
                    <a href="http://www.miitbeian.gov.cn">蜀ICP备14030149号-1</a>&emsp;&emsp;
                    <a href="http://www.gaj.chengdu.gov.cn">蜀公网安备510114990541</a>
                </p>
            </div>
            <div class="middle col-lg-2">
                <p>官方微博:<p>
                        <img src="./assets/images/tecent.png" alt="" class="img-responsive">
                        <img src="./assets/images/sina.png" alt="" class="img-responsive">
            </div>
            <div class="right  col-lg-2">
                <p>官方微信</p>
                <img src="./assets/images/wx.jpg" alt="" class="img-responsive">
            </div>
        </div>
    </div>
</footer>
<script>
    $("#qrcode").tooltip()
</script>
<script src="./src/js/header.js"></script>
<script src="./src/js/login.js"></script>
</body>
</html>