<?php
require_once('../../config.php');
require_once(_COMMON_.'/db/conn.php');
if(isset($_GET['s_id'])){
	$s_id=$_GET['s_id'];
	$s_stuId=$_GET['s_stuId'];
	$s_kmname=$_GET['s_kmname'];
	

$sql="delete from fp_score where s_id=".$s_id;
$temp=$conn->query($sql);
if($temp){
	echo "<script>alert('学号为: ".$s_stuId."学生的".$s_kmname."科目成绩删除成功！');</script>";
	echo "<script>window.location.href='scorelist.php';</script>";

}else{
	echo "修改失败！";
	echo "<a href='scorelist.php'>返回成绩列表</a>";
	
}

}