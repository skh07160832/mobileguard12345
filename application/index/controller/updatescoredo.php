<?php

require_once('../../config.php');
require_once(_COMMON_.'/db/conn.php');

if(isset($_POST['sub'])){
		$s_id=$_POST['s_id'];
		$s_stuId=$_POST['s_stuId'];
		$s_kmname=$_POST['s_kmname'];
		$s_cj=$_POST['s_cj'];

	
	//	exit;echo $s_stuId."===".$s_kmname."===".$s_cj;
 	 $sql="select studentId from fp_student where studentId='$s_stuId' ";
 	 $r=$conn->query($sql);

 	 $num=$r->num_rows;

if($num>0){

$sql="update fp_score set s_stuId='$s_stuId',s_kmname='$s_kmname',s_cj='$s_cj' where s_id='$s_id'";
$temp=$conn->query($sql);

if($temp==1){
	echo "修改成功！3  秒后自动返回成绩页面";
	echo "<script>setTimeout(function(){window.location.href='scorelist.php';},3000);</script>";

}else{
	echo "修改失败！";
	echo "<a href='scorelist.php'>返回成绩页面</a><br/>";
	echo "<button onclick='javascript:history.go(-1);'>返回上一页</button>";
}


}else{
    echo "修改失败！没有该学号为".$s_stuId."的学生";
	echo "<a href='scorelist.php'>返回成绩页面</a><br/>";
	echo "<button onclick='javascript:history.go(-1);'>返回上一页</button>";
}//if $num语句结束

}
