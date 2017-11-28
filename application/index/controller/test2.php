<?php
require_once('../../config.php');
require_once(_COMMON_.'/smarty/init.inc.php');
$smarty->assign('public',_PUBLIC_);
$smarty->display('test2.html');
	
?>