<?php
	require_once(dirname(__DIR__).'/config.php');
	//define("_SMARTY_",str_replace('\\','/',dirname(__FILE__)));
	//__FILE__是PHP中的预定义常量，表示当前文件所在路径。str_replce函数把
	// "\"换成"/"目的是为了兼容在linux操作系统下的目录
	require_once(_COMMON_.'/smarty/libs/Smarty.class.php');
	$smarty = new Smarty();
	//$smarty->setTemplateDir(_SMARTY_.'/templates');
	$smarty->setTemplateDir('../view');
	$smarty->setCompileDir(_INDEX_.'/templates_c');
	$smarty->right_delimiter='}>';
	$smarty->left_delimiter='<{';
	$smarty->assign('_PUBLIC_',_PUBLIC_);
	$smarty->assign('_COMMON_',_COMMON_);
	$smarty->assign('_APP_',_APP_);
	$smarty->assign('_INDEX_',_INDEX_);
	
?>
