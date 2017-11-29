<?php
header("Content-type:text/html;charset=utf-8");
$servername = "localhost";
$username = "root";
$password = "";
 
// 创建连接
$conn = new mysqli($servername, $username, $password);
 
// 检测连接
if ($conn->connect_error) {
    die("连接失败: " . $conn->connect_error);
} 
//echo "连接成功";
$conn->select_db("finalphp") or die("数据库不存在");
$conn->query("set names utf8");
	
//	$conn=new mysqli();
	//@mysql_connect("localhost","root","") or die("服务器连接失败");
	//mysql_select_db("db_test13") or die("数据库不存在");
	//mysql_query("set names utf8");
?>