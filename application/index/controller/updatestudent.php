<?php
require_once('../../config.php');
require_once(_COMMON_.'/smarty/init.inc.php');
require_once(_COMMON_.'/db/conn.php');
require_once('base.php');

if (isset($_GET['id'])) {
	$id=$_GET['id'];
	$sql="select * from fp_student where id='$id'";
	$r=$conn->query($sql);
	while($row=$r->fetch_assoc()){
		$sId=$row['studentId'];
		$sname=$row['name'];
		$sgender=$row['gender'];
		$sclass=$row['class'];
	}
	

}

$smarty->assign('id',$id);
$smarty->assign('sId',$sId);
$smarty->assign('sname',$sname);
$smarty->assign('sgender',$sgender);
$smarty->assign('sclass',$sclass);
//var_dump();
$smarty->display('updatestudent.html');