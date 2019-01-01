<?php
session_start();
// 判断是否存在
if(!isset($_SESSION['username'])){
    echo "alert('非法入侵，请登录');location.href='./login.php';";
}
?>