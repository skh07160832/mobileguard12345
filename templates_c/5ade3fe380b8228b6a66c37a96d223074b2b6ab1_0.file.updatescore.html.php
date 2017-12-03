<?php /* Smarty version 3.1.27, created on 2017-12-03 14:08:44
         compiled from "D:\Software\Win7\wamp64\wampserver3.0.6_x64\www\finalphp\application\index\view\updatescore.html" */ ?>
<?php
/*%%SmartyHeaderCode:324375a24056cceae46_08247998%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5ade3fe380b8228b6a66c37a96d223074b2b6ab1' => 
    array (
      0 => 'D:\\Software\\Win7\\wamp64\\wampserver3.0.6_x64\\www\\finalphp\\application\\index\\view\\updatescore.html',
      1 => 1512235538,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '324375a24056cceae46_08247998',
  'variables' => 
  array (
    's_id' => 0,
    's_stuId' => 0,
    'arr' => 0,
    'km' => 0,
    's_kmname' => 0,
    's_cj' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5a24056cd87263_16541765',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5a24056cd87263_16541765')) {
function content_5a24056cd87263_16541765 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '324375a24056cceae46_08247998';
?>

<!-- 

 -->
 <style type="text/css">
	#updateid form input{
		padding: 5px;
		margin: 5px;
	}
	#updateid form input[type='submit']{
		background-color: #508af7;
		width: 100px;
	}
 </style>
 <br>
<div style="margin:50px;border:1px solid #2d4b4c;width:50%;" id="updateid">
	<h2 class="text-center">修改学生表</h2>
	<form action="updatescoredo.php" method="post" class="text-center">

		<input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['s_id']->value;?>
" name="s_id" >
		<br>
		学号：<input  type="text" value="<?php echo $_smarty_tpl->tpl_vars['s_stuId']->value;?>
" name="s_stuId">
		<br>
		
		科目：<select name="s_kmname" id="" style="margin:8px;margin-left:100px;">
			
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
" <?php if (($_smarty_tpl->tpl_vars['km']->value == $_smarty_tpl->tpl_vars['s_kmname']->value)) {?>selected='selected' <?php }?> > <?php echo $_smarty_tpl->tpl_vars['km']->value;?>
 </option>
			
			<?php
$_smarty_tpl->tpl_vars['km'] = $foreach_km_Sav;
}
?>
			
		</select>
		
		<!-- 科目：<input type="text" value="<?php echo $_smarty_tpl->tpl_vars['s_kmname']->value;?>
"  name="s_kmname" > -->
		<br>
		
		成绩：<input type="text" value="<?php echo $_smarty_tpl->tpl_vars['s_cj']->value;?>
" name="s_cj" ><br>
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