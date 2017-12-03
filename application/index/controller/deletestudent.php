<?php
require_once('../../config.php');
require_once(_COMMON_.'/db/conn.php');
if(isset($_GET['id'])){
	$id=$_GET['id'];
	$sId=$_GET['sId'];
	$sname=$_GET['sname'];

$sql="delete from fp_student where id=".$id;
$temp=$conn->query($sql);
if($temp){
	echo "<script>alert('学号为: ".$sId." 的 ".$sname."同学删除成功！');</script>";
	echo "<script>window.location.href='studentlist.php';</script>";

}else{
	echo "修改失败！";
	echo "<a href='studentlist.php'>返回首页</a>";
	
}

}