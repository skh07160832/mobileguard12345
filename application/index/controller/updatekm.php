<?php
require_once('../../config.php');
require_once(_COMMON_.'/smarty/init.inc.php');
require_once(_COMMON_.'/db/conn.php');
require_once('base.php');

if (isset($_GET['km_id'])) {
	$km_id=$_GET['km_id'];
	$sql="select * from fp_km where km_id='$km_id'";
	$r=$conn->query($sql);
	while($row=$r->fetch_assoc()){
		$km_name=$row['km_name'];
		
	}
	

}

$smarty->assign('km_id',$km_id);
$smarty->assign('km_name',$km_name);
//var_dump();
$smarty->display('updatekm.html');