<?php
   //1.连接数据库 
   $link=mysqli_connect("localhost","root","root","zhufangfang",3306);
   //2.接收数据 
   //3.构造sql语句 
   // 获取所有用户的借款信息给管理员（平台运营方做统计）
   //$sql="select * from borrowinfo";
   $sql="SELECT t1.*,t2.user_name from borrowinfo as t1 LEFT JOIN userinfo as t2 on t1.user_id=t2.user_id";
   //4.执行sql
   //mysqli_query执行成功返回结果集（结果的集合），失败返回 false
   $result=mysqli_query($link,$sql);
   //5.根据是否执行成功返回结果到前端
   //总的记录数的获取
   $total=mysqli_num_rows($result);

   /*跳过的条数：
   skipNum=(currentPage -1)*pageSize
   skipNum=(pageIndex)*pageSize【使用】

   http://localhost/trunk/api/getPagerData.php?pageIndex=2&pageSize=2

   mysql跳过数据的语法：
   limit m,n 其中m是指跳过的条数,n是取的条数
   m=(pageIndex)*pageSize
   n=pageSize
   */
   
   //接收分页参数
   $pageIndex=$_GET["pageIndex"];
   $pageSize=$_GET["pageSize"];

   $m=($pageIndex)*$pageSize;
   $n=$pageSize*1;
   
   //构造分页的sql语句
   //$sql="select * from borrowinfo limit $m,$n";
   $sql.=" limit $m,$n";

   //执行分页的sql语句
   $result2=mysqli_query($link,$sql);
   $borrow=[];
   //循环把每条借款信息追加到数组中
   while($row=mysqli_fetch_assoc($result2)) {
       array_push($borrow,$row);
   }
   //把借款信息的数组转换为json返回给前端   
   //echo json_encode($borrow);
   echo json_encode(["total"=>$total,"list"=>$borrow]);
    
   //6.关闭数据库连接
   mysqli_close($link);
?>