<?php
$con = mysql_connect("localhost","zjwdb_485042","tsjk1501WAF");
if(!$con)
{
die('连接数据库失败: ' . mysql_error());
}
mysql_query("set names utf8");     //以utf8读取数据
mysql_select_db("zjwdb_485042",$con);   //数据库
?>
