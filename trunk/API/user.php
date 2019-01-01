<?php
$link=mysqli_connect("localhost","root","root","zhufangfang",3306);
$username=$_POST["username"];
$pwd=MD5($_POST["inputPassword1"]);
$sex=$_POST["sex"];
$mobile=$_POST["mobile"];
$email=$_POST["email"];
// echo $mobile ,$sex, $username 
// // 构造sql语句
$sql="insert into userinfo(user_name,user_pwd,user_sex,user_mobile,user_email) values('$username','$pwd','$sex','$mobile','$email')";
$mysql=mysqli_query($link,$sql);
if($mysql){
    echo json_encode(["isok"=>true,"msg"=>'用户注册成功']);
}else{
    echo json_encode(["isok"=>false,"msg"=>"用户注册失败"]);
};
mysqli_close($link)
// select * from table where user_name='usernme' and 
// ?>