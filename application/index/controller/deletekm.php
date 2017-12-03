<?php
require_once('../../config.php');
require_once(_COMMON_.'/db/conn.php');
if(isset($_GET['km_id'])){
	$km_id=$_GET['km_id'];
	

$sql="delete from fp_km where km_id=".$km_id;
$temp=$conn->query($sql);
if($temp){
	echo "<script>alert('科目编号为: ".$km_id."删除成功！');</script>";
	echo "<script>window.location.href='kmlist.php';</script>";

}else{
	echo "修改失败！";
	echo "<a href='kmlist.php'>返回科目列表</a>";
	
}

}