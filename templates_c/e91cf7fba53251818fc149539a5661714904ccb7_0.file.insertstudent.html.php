<?php /* Smarty version 3.1.27, created on 2017-12-03 13:57:17
         compiled from "D:\Software\Win7\wamp64\wampserver3.0.6_x64\www\finalphp\application\index\view\insertstudent.html" */ ?>
<?php
/*%%SmartyHeaderCode:285395a2402bda4dbc0_07816604%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e91cf7fba53251818fc149539a5661714904ccb7' => 
    array (
      0 => 'D:\\Software\\Win7\\wamp64\\wampserver3.0.6_x64\\www\\finalphp\\application\\index\\view\\insertstudent.html',
      1 => 1512207586,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '285395a2402bda4dbc0_07816604',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5a2402bdaa3ad8_67118652',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5a2402bdaa3ad8_67118652')) {
function content_5a2402bdaa3ad8_67118652 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '285395a2402bda4dbc0_07816604';
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
<h2 class="text-center">添加学生表</h2>
	<form action="insertstudentdo.php" method="post" class="text-center">

		<br>

		学号：<input placeholder="请录入学号" type="text" value="" name="sId" 
		><br>
		姓名：<input placeholder="请录入姓名" type="text" value=""  name="sname" >
		<br>
		<span >性别：</span><input style="margin-left:110px;" type="radio" value="男" name="sgender" checked="checked">男&nbsp;
		<input type="radio" value="女" name="sgender" >女

		<br>
		班级：<input placeholder="请录入班级" type="text" value="" name="sclass" ><br>
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