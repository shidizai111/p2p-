<?php
 //1.连接数据库 
 $link=mysqli_connect("localhost","root","root","zhufangfang",3306);
 //2.接收数据 
 session_start();
 $user_id=$_SESSION["userid"];
 //3.构造sql语句 
 $sql="select * from borrowinfo where user_id=$user_id";
 //4.执行sql
 //mysqli_query执行成功返回结果集（结果的集合），失败返回 false
 $result=mysqli_query($link,$sql);
 //5.根据是否执行成功返回结果到前端
// 返回行的关联数组，否则返回null
 $borrow=[];
 //循环把每条借款信息追加到数组中
 while($row=mysqli_fetch_assoc($result)) {
     array_push($borrow,$row);
 }
 //把借款信息的数组转换为json返回给前端   
 echo json_encode($borrow);
  
 //6.关闭数据库连接
 mysqli_close($link);
?>