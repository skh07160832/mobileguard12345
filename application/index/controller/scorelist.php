<?php
require_once('../../config.php');
require_once(_COMMON_.'/smarty/init.inc.php');
require_once(_COMMON_.'/db/conn.php');
require_once('base.php');
 //require_once(_COMMON_.'/link/linkscript.php');
$sql='select * from fp_score ';
$result=$conn->query($sql);
$arr=array();
$num=$result->num_rows;
if($num>0){
  while($row=$result->fetch_assoc()){
  $arr[]=$row;
	}
}
$smarty->assign("arr",$arr);
//$smarty->assign("aa",$a);

//var_dump($arr);
$smarty->display('scorelist.html');