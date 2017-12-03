<?php
require_once('../../config.php');
require_once(_COMMON_.'/smarty/init.inc.php');
require_once(_COMMON_.'/db/conn.php');
require_once('base.php');

if (isset($_GET['s_id'])) {
	$s_id=$_GET['s_id'];
	$sql="select * from fp_score where s_id='$s_id'";
	$r=$conn->query($sql);
	while($row=$r->fetch_assoc()){
		$s_stuId=$row['s_stuId'];
		$s_kmname=$row['s_kmname'];
		$s_cj=$row['s_cj'];
	
	}
	
	$sql="select km_name from fp_km ";
 	 $r=$conn->query($sql);
 	 $arr=array();
	while($row=$r->fetch_assoc()){
		$arr[]=$row['km_name'];
	
	}


$smarty->assign('s_id',$s_id);
$smarty->assign('s_stuId',$s_stuId);
$smarty->assign('s_kmname',$s_kmname);
$smarty->assign('s_cj',$s_cj);
$smarty->assign('arr',$arr);

$smarty->display('updatescore.html');

}