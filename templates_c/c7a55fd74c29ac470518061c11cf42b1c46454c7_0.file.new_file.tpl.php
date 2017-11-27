<?php /* Smarty version 3.1.27, created on 2017-11-24 15:29:16
         compiled from "D:\Software\Win7\wamp64\wampserver3.0.6_x64\www\finalphp\application\index\view\new_file.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:172865a183acc98e8b7_00545226%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c7a55fd74c29ac470518061c11cf42b1c46454c7' => 
    array (
      0 => 'D:\\Software\\Win7\\wamp64\\wampserver3.0.6_x64\\www\\finalphp\\application\\index\\view\\new_file.tpl',
      1 => 1511537321,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '172865a183acc98e8b7_00545226',
  'variables' => 
  array (
    'link' => 0,
    'a' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5a183acc9dcac8_93550307',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5a183acc9dcac8_93550307')) {
function content_5a183acc9dcac8_93550307 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '172865a183acc98e8b7_00545226';
?>
<!DOCTYPE html>
<html>
	<head>
		
		<meta charset="UTF-8">
		<title></title>
		<link rel="stylesheet" type="text/css" href="<?php echo INDEX;?>
/1application/index/controller/1.css"/>
	</head>
	
		<?php echo $_smarty_tpl->tpl_vars['link']->value;?>

	
			
	<body>
		 
		<li>6767</li>
		你好，"=="<?php echo $_smarty_tpl->tpl_vars['a']->value;?>

	</body>
</html>
<?php }
}
?>