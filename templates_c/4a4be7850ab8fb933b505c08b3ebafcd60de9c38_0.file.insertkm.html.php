<?php /* Smarty version 3.1.27, created on 2017-12-03 13:57:40
         compiled from "D:\Software\Win7\wamp64\wampserver3.0.6_x64\www\finalphp\application\index\view\insertkm.html" */ ?>
<?php
/*%%SmartyHeaderCode:71615a2402d4286aa3_80152091%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4a4be7850ab8fb933b505c08b3ebafcd60de9c38' => 
    array (
      0 => 'D:\\Software\\Win7\\wamp64\\wampserver3.0.6_x64\\www\\finalphp\\application\\index\\view\\insertkm.html',
      1 => 1512215237,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '71615a2402d4286aa3_80152091',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5a2402d42dc9b5_64876413',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5a2402d42dc9b5_64876413')) {
function content_5a2402d42dc9b5_64876413 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '71615a2402d4286aa3_80152091';
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
<h2 class="text-center">添加科目表</h2>
	<form action="insertkmdo.php" method="post" class="text-center">

		<br>

		科目名称：<input placeholder="请录入名称" type="text" value="" name="km_name" ><br>
		<input type="submit" value="添加"  name="sub" >
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