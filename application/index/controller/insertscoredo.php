v<?php

require_once('../../config.php');
require_once(_COMMON_.'/db/conn.php');

if(isset($_POST['sub'])){
		$s_stuId=$_POST['s_stuId'];
		$s_kmname=$_POST['s_kmname'];
		
		$s_cj=$_POST['s_cj'];

	
	$sql="select studentId from fp_student where studentId='$s_stuId' ";
 	 $r=$conn->query($sql);

 	 $num=$r->num_rows;

	if($num>0){

	//	exit;echo $s_stuId."===".$s_kmname."===".$s_cj;


$sql="insert into fp_score set s_stuId='$s_stuId',s_kmname='$s_kmname',s_cj='$s_cj'";
$temp=$conn->query($sql);

if($temp==1){
	echo "添加成功！3  秒后自动返回成绩页面";
	echo "<script>setTimeout(function(){window.location.href='scorelist.php';},3000);</script>";

}else{
	if($s_cj==''){
		echo "成绩不能为空！";
	}else{
		echo "添加失败，该学生的".$s_kmname."科目的成绩已存在！";
	}
	
	
	echo "<a href='scorelist.php'>返回成绩页面</a><br/>";
	echo "<button onclick='javascript:history.go(-1);'>返回上一页</button>";
}


}else{
    echo "添加失败，不存在学号为".$s_stuId."的学生！";
	echo "<a href='scorelist.php'>返回成绩页面</a><br/>";
	echo "<button onclick='javascript:history.go(-1);'>返回上一页</button>";
}//if语句 $num>0


}
