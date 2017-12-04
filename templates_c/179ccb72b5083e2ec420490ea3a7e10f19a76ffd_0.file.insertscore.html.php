<?php /* Smarty version 3.1.27, created on 2017-12-03 15:16:18
         compiled from "D:\Software\Win7\wamp64\wampserver3.0.6_x64\www\finalphp\application\index\view\insertscore.html" */ ?>
<?php
/*%%SmartyHeaderCode:21355a241542954621_59907675%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '179ccb72b5083e2ec420490ea3a7e10f19a76ffd' => 
    array (
      0 => 'D:\\Software\\Win7\\wamp64\\wampserver3.0.6_x64\\www\\finalphp\\application\\index\\view\\insertscore.html',
      1 => 1512314108,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '21355a241542954621_59907675',
  'variables' => 
  array (
    'arr' => 0,
    'km' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5a2415429bddb3_98706148',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5a2415429bddb3_98706148')) {
function content_5a2415429bddb3_98706148 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '21355a241542954621_59907675';
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
<h2 class="text-center">添加学生成绩表</h2>
	<form action="insertscoredo.php" method="post" class="text-center">

		<br>

		学号：<input placeholder="请录入学号" type="text" value="" name="s_stuId" 
		><br>
		科目名称：<select name="s_kmname" id="" style="margin:8px;margin-left:80px;">
			
			<?php
$_from = $_smarty_tpl->tpl_vars['arr']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['km'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['km']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['km']->value) {
$_smarty_tpl->tpl_vars['km']->_loop = true;
$foreach_km_Sav = $_smarty_tpl->tpl_vars['km'];
?>

			<option value="<?php echo $_smarty_tpl->tpl_vars['km']->value;?>
"> <?php echo $_smarty_tpl->tpl_vars['km']->value;?>
 </option>
			
			<?php
$_smarty_tpl->tpl_vars['km'] = $foreach_km_Sav;
}
?>
			
		</select>
		<br>
		成绩：<input placeholder="请录入成绩" type="text" value="" name="s_cj" ><br>
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