<?php
//   返回登录信息给前端
   session_start();
   if(isset($_SESSION["username"])){
       //存在   
       echo json_encode(["isExist"=>true,"username"=>$_SESSION["username"],"userid"=>$_SESSION["userid"]]);
   }
   else{
       //不存在  
       echo json_encode(["isExist"=>false,"username"=>null]); 
   }
?>