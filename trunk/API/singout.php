<?php
session_start();
session_destroy();
echo "<script>alert('退出登录成功');location.href='../login.php';</script>"
?>