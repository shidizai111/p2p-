<?php
// 连接数据库
$link=mysqli_connect("localhost","root","root","zhufangfang",3306);
   //2.接收数据 
   //2.接收数据 
   $user_realname=$_POST["user_realname"];
   $user_tel=$_POST["user_tel"];
   $user_mobile=$_POST["user_mobile"];
   $user_education=$_POST["user_education"];
   $user_money=$_POST["user_money"];
   $user_address=$_POST["user_address"];
//    查询id
        session_start();
        $user_id=$_SESSION["userid"];
     //3.构造sql语句 
     $sql="update userinfo set user_realname='$user_realname',user_tel='$user_tel',user_mobile='$user_mobile',user_education='$user_education',user_money=$user_money,user_address='$user_address' where user_id=$user_id";
   //4.执行sql
   //mysqli_query会返回一个布尔值，执行成功则返回true，否则返回 false！
   $result=mysqli_query($link,$sql);
   //5.根据是否执行成功返回结果到前端
   if($result){
       echo json_encode(["isOk"=>true,"msg"=>"用户资料修改成功！"]);
   }
   else{
       echo json_encode(["isOk"=>false,"msg"=>"用户资料修改失败！"]);
   }
   //6.关闭数据库连接
   mysqli_close($link);

?>