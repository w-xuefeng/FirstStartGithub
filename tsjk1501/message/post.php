<?php
header("content-Type: text/html; charset=utf-8");
include("config.php");
 
$name= $_POST['name'];
$email= $_POST['email'];
$patch  = $_POST['content'];
date_default_timezone_set("Asia/Shanghai");
$time = date('y-m-d,h:m:sa');//获取时间
//将留言写入数据库


$content = str_replace("
","<br />",$patch); 
$sql = "insert into content (name,email,content,time) values ('$name','$email','$content','$time')"; 
mysql_query($sql);
//留言 结束
echo "<script>alert('提交成功！返回首页。');location.href='message-index.php';</script>";
?>