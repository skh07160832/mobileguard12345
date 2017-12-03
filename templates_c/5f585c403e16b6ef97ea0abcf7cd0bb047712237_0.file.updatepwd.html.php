<?php /* Smarty version 3.1.27, created on 2017-12-03 13:58:00
         compiled from "D:\Software\Win7\wamp64\wampserver3.0.6_x64\www\finalphp\application\index\view\updatepwd.html" */ ?>
<?php
/*%%SmartyHeaderCode:191805a2402e8692718_46962461%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5f585c403e16b6ef97ea0abcf7cd0bb047712237' => 
    array (
      0 => 'D:\\Software\\Win7\\wamp64\\wampserver3.0.6_x64\\www\\finalphp\\application\\index\\view\\updatepwd.html',
      1 => 1512301101,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '191805a2402e8692718_46962461',
  'variables' => 
  array (
    'user' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5a2402e86f41b4_70902622',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5a2402e86f41b4_70902622')) {
function content_5a2402e86f41b4_70902622 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '191805a2402e8692718_46962461';
?>
<style type="text/css">
	#insertid form input{
		padding: 5px;
		margin: 5px;
	}
	#insertid form input[type='submit']{
		background-color: #508af7;
		width: 100px;
	}
 </style>
 <br>
<div style="margin:50px;border:1px solid #2d4b4c;width:50%;" id="insertid">
<h2 class="text-center">修改用户密码</h2>
	<form action="updatepwddo.php" method="post" class="text-center">

		<br>
			<input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['user']->value;?>
" name="user">
		用户名：<input disabled="false" placeholder="" type="text" value="<?php echo $_smarty_tpl->tpl_vars['user']->value;?>
" >
		<br>
		原密码：<input placeholder="请输入原密码" type="password" value="" name="old_pwd" ><br>
		新密码：<input placeholder="请输入新的密码" type="password" value="" name="new_pwd" ><br>
		<input type="submit" value="修改"  name="sub" >
	</form>
</div>

	
</body>
<?php echo '<script'; ?>
 type="text/javascript">

<?php echo '</script'; ?>
>
</html><?php }
}
?>