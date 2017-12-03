<?php

require_once('../../config.php');
require_once(_COMMON_.'/db/conn.php');

if(isset($_POST['sub'])){
		$km_id=$_POST['km_id'];
		$km_name=$_POST['km_name'];
	
$sql="update fp_km set km_name='$km_name' where km_id='$km_id'";
$temp=$conn->query($sql);
if($temp){
	echo "修改成功！3  秒后自动返回首页";
	echo "<script>setTimeout(function(){window.location.href='kmlist.php';},3000);</script>";

}else{
	echo "修改失败！";
	echo "<a href='kmlist.php'>返回首页</a>";
	echo "<button onclick='javascript:history.go(-1);'>返回上一页</button>";
}

}
