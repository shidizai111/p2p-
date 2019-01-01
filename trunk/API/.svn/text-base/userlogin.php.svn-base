<?php
$link=mysqli_connect("localhost","root","root","zhufangfang",3306);
$username=$_POST["username"];
$pwd=MD5($_POST["inputPassword1"]);
// echo $mobile ,$sex, $username 
// // 构造sql语句
$sql="select * from userinfo where user_name='$username' and user_pwd='$pwd'";
$mysql=mysqli_query($link,$sql);
if($mysql){
    $row=mysqli_fetch_assoc($mysql);
    if($row>0){
        session_start();
        // 创建session
        $_SESSION["username"]=$row["user_name"];
        $_SESSION['userid']=$row["user_id"];
        // 记录用户登录时间和总次数
        // 当前日期和时间
        $now=date("Y-m-d H:i:s",time()+8*60*60);
        $sql="update userinfo set user_lastLogintime='$now',user_count=user_count+1 where user_id=".$_SESSION["userid"];
        // 执行sql语句
        mysqli_query($link,$sql);
        echo json_encode(["isok"=>true,"msg"=>'用户登录成功']);
    }else{
        echo json_encode(["isok"=>false,"msg"=>"用户登录失败"]);
    }
}else{
};
mysqli_close($link)
// ?>