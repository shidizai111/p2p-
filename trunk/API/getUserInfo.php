<?php
// 链接数据库
$link=mysqli_connect("localhost","root","root","zhufangfang",3306);
// 获取session数据
     session_start();
     $user_id=$_SESSION["userid"];
    // 构造sql语句
    $sql="select * from userinfo where user_id=$user_id";
    // 执行sql语句
    $result=mysqli_query($link,$sql);
    if($result){
        // 获取行的数据
        $row=mysqli_fetch_assoc($result);
        // 返回行内关联数组否则返回空
        if($row){
            echo json_encode(['isok'=>true,'userdata'=>$row]);
        }
    };
    // 关闭数据库连接
    mysqli_close($link);
?>