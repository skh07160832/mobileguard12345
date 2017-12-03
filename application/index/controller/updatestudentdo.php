<?php

require_once('../../config.php');
require_once(_COMMON_.'/db/conn.php');

if(isset($_POST['sub'])){
		$id=$_POST['id'];
		$sId=$_POST['sId'];
		$sname=$_POST['sname'];
		$sgender=$_POST['sgender'];
		$sclass=$_POST['sclass'];
	
$sql="update fp_student set studentId='$sId',name='$sname',gender='$sgender',class='$sclass' where id='$id'";
$temp=$conn->query($sql);
if($temp){
	echo "修改成功！3  秒后自动返回首页";
//function (a, b) {return a * b}
	echo "<script>setTimeout(function(){window.location.href='studentlist.php';},3000);</script>";

}else{
	echo "修改失败！";
	echo "<a href='studentlist.php'>返回首页</a>";
	echo "<button onclick='javascript:history.go(-1);'>返回上一页</button>";
}

}
