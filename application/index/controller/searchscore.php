<?php
require_once('../../config.php');
require_once(_COMMON_.'/smarty/init.inc.php');
require_once(_COMMON_.'/db/conn.php');
require_once('base.php');

$sql='select km_name from fp_km ';//查找科目
$result=$conn->query($sql);
$arr=array();
$num=$result->num_rows;
if($num>0){
  while($row=$result->fetch_assoc()){
  $arr[]=$row['km_name'];
	}
}

$smarty->assign("arr",$arr);
$smarty->display('searchscore.html');