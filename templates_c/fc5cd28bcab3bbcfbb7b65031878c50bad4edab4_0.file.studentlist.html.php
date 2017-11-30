<?php /* Smarty version 3.1.27, created on 2017-11-30 14:07:50
         compiled from "D:\Software\Win7\wamp64\wampserver3.0.6_x64\www\finalphp\application\index\view\studentlist.html" */ ?>
<?php
/*%%SmartyHeaderCode:35115a2010b6459878_42901858%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fc5cd28bcab3bbcfbb7b65031878c50bad4edab4' => 
    array (
      0 => 'D:\\Software\\Win7\\wamp64\\wampserver3.0.6_x64\\www\\finalphp\\application\\index\\view\\studentlist.html',
      1 => 1512050866,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '35115a2010b6459878_42901858',
  'variables' => 
  array (
    'aa' => 0,
    'arr' => 0,
    'd' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5a2010b64d6895_80921176',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5a2010b64d6895_80921176')) {
function content_5a2010b64d6895_80921176 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '35115a2010b6459878_42901858';
?>
<!-- <!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body> -->
<?php echo $_smarty_tpl->tpl_vars['aa']->value;?>

    <form action="">
    <table id="at" border='1' style="border:1px solid red">
    	<?php
$_from = $_smarty_tpl->tpl_vars['arr']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['d'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['d']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['d']->value) {
$_smarty_tpl->tpl_vars['d']->_loop = true;
$foreach_d_Sav = $_smarty_tpl->tpl_vars['d'];
?>
    		 <tr>
    		 	<td><?php echo $_smarty_tpl->tpl_vars['d']->value['studentId'];?>
</td>
    		 	<td><?php echo $_smarty_tpl->tpl_vars['d']->value['name'];?>
</td>
    		 	<td><?php echo $_smarty_tpl->tpl_vars['d']->value['gender'];?>
</td>
    		 </tr>
	      
	    <?php
$_smarty_tpl->tpl_vars['d'] = $foreach_d_Sav;
}
?>
    </table>
    	  

    </form>
    <br />
    <button onclick="loadXMLDoc(-1)">上一页</button>
    <button onclick="loadXMLDoc(1)">下一页</button>
    <button id="btn3">点击三</button>
</body>
<?php echo '<script'; ?>
>
	var num=0;
		function loadXMLDoc(abc)
{
	   if(abc==1){
	   	num=num+1;
	   //	alert(num);
	   }else{
	   	num--;
	   	if(num<0){
	   		num=0;
	   	}
	   //	alert(num);
	   }
	var xmlhttp;
	if (window.XMLHttpRequest)
	{
		//  IE7+, Firefox, Chrome, Opera, Safari 浏览器执行代码
		xmlhttp=new XMLHttpRequest();
	}
	else
	{
		// IE6, IE5 浏览器执行代码
		xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
	}
	xmlhttp.onreadystatechange=function()
	{
		if (xmlhttp.readyState==4 && xmlhttp.status==200)
		{
			////eval("var tt="+xmlhttp.responseText);
			 tt=JSON.parse(xmlhttp.responseText);
			//alert(tt.length);
			if(tt.length<5){
				num=6;
			}
			var at=document.getElementById('at');
			at.innerHTML=null;
			var temp='';
			for(var i=0;i<tt.length;i++){
			temp+="<tr>";
    		 	temp+="<td>"+tt[i].studentId+"</td>";
    		 	temp+="<td>"+tt[i].name+"</td>";
    		 	temp+="<td>"+tt[i].gender+"</td>";
    		 	temp+="<td>"+tt[i]['class']+"</td>";
    		 
    		 temp+="</tr>";
			}
			at.innerHTML=temp;
			//////alert(xmlhttp.responseText);
			//num=xmlhttp.responseText;
			//document.getElementById('hidd').innerHTML=num;
		
		}
	}
	xmlhttp.open("GET","fenye.php?num1="+num,true);
	xmlhttp.send();
	}

<?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript">
	$(function(){

		$("#btn3").click(function(event) {
		alert("message");
		});

		$("#at tr:gt(5)").remove();
         
	});
	
<?php echo '</script'; ?>
>
</html><?php }
}
?>