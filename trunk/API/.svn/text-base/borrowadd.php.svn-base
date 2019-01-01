<?php
// 连接数据库
$link=mysqli_connect("localhost","root","root","zhufangfang",3306);
// 接收前端数据
  $bidRequestAmount=$_POST["bidRequestAmount"];
  $currentRate=$_POST["currentRate"];
  $monthes2Return=$_POST["monthes2Return"];
  $paymentMethod=$_POST["paymentMethod"];
  $minBidAmount=$_POST["minBidAmount"];
  $totalRewardAmount=$_POST["totalRewardAmount"];
  $disableDays=$_POST["disableDays"];
  $borrowTitle=$_POST["borrowTitle"];
  $borrowDescription=$_POST["borrowDescription"];
  $borrow_type=$_POST["borrow_type"];
   //由于登录用户才能发起借款申请，所以user_id直接从session中获取
//    启动session
    session_start();
     $user_id=$_SESSION["userid"];
//   构造sql语句
$sql="insert into borrowInfo(borrow_type,bidRequestAmount,currentRate,monthes2Return,paymentMethod,minBidAmount,totalRewardAmount,disableDays,borrowTitle,borrowDescription,user_id) values('$borrow_type',$bidRequestAmount,$currentRate,$monthes2Return,'$paymentMethod',$minBidAmount,$totalRewardAmount,$disableDays,'$borrowTitle','$borrowDescription',$user_id)";
// 执行sql语句
// 返回的是一个布尔值
$result=mysqli_query($link,$sql);
if($result){
    echo json_encode(["isok"=>true,'msg'=>"用户借款申请提交成功！请等待管理员审核！"]);
}else{
    echo json_encode(["isok"=>false,"msg"=>"用户借款申请提交失败"]);
}
?>