<?php

require_once('../../config.php');
require_once(_COMMON_.'/db/conn.php');

if(isset($_POST['sub'])){
		$km_name=$_POST['km_name'];
		
	
$sql="insert into fp_km set km_name='$km_name' ";
$temp=$conn->query($sql);
if($temp){
	echo "添加成功！3  秒后自动返回科目列表";
//function (a, b) {return a * b}
	echo "<script>setTimeout(function(){window.location.href='kmlist.php';},3000);</script>";

}else{
	echo "添加失败！";
	echo "<a href='kmlist.php'>返回科目列表</a>";
	echo "<button onclick='javascript:history.go(-1);'>返回上一页</button>";
}

}


