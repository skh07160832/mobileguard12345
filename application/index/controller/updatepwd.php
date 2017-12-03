
<?php
require_once('../../config.php');
require_once(_COMMON_.'/smarty/init.inc.php');

require_once('base.php');
if(isset($_GET['user'])){
	$user = $_GET['user'];
/*
$sql='select * from fp_user where name='$user' ';
$result=$conn->query($sql);
$arr=array();
$num=$result->num_rows;

  while($row=$result->fetch_assoc()){
  $arr[]=$row;
	}
*/
$smarty->assign("user",$user);

$smarty->display('updatepwd.html');
}