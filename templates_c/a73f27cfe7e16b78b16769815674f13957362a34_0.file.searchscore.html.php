<?php /* Smarty version 3.1.27, created on 2017-12-04 14:58:03
         compiled from "D:\Software\Win7\wamp64\wampserver3.0.6_x64\www\finalphp\application\index\view\searchscore.html" */ ?>
<?php
/*%%SmartyHeaderCode:117965a25627bdde2d8_77418914%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a73f27cfe7e16b78b16769815674f13957362a34' => 
    array (
      0 => 'D:\\Software\\Win7\\wamp64\\wampserver3.0.6_x64\\www\\finalphp\\application\\index\\view\\searchscore.html',
      1 => 1512399481,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '117965a25627bdde2d8_77418914',
  'variables' => 
  array (
    'arr' => 0,
    'a' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5a25627be57476_62984220',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5a25627be57476_62984220')) {
function content_5a25627be57476_62984220 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '117965a25627bdde2d8_77418914';
?>
<!--  -->
<!-- 树状图 -->
<?php echo '<script'; ?>
 src="https://code.highcharts.com/highcharts.js"><?php echo '</script'; ?>
>
<style type="text/css">
	.div1{
		
		width: 25%;
		margin: 40px;
		/*margin-bottom: 0px;
		margin-right: 0px;
		margin-top: 50px;*/
		float: left;

		/*border: 1px solid red;*/
		
	}
	.div1 input{
		width: 200px;
		height: 40px;
	}
	.div1 button{
		width: 80px;
		height: 30px;
	}
</style>
<div class="div1">
	
学号：<input type="text" id='stuid' placeholder='输入一个学号'>
<br><br>
选择科目：<select name="km_name" id="selectid">
			<option value="">请选择科目</option>
			<?php
$_from = $_smarty_tpl->tpl_vars['arr']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['a'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['a']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['a']->value) {
$_smarty_tpl->tpl_vars['a']->_loop = true;
$foreach_a_Sav = $_smarty_tpl->tpl_vars['a'];
?>
				<option value="<?php echo $_smarty_tpl->tpl_vars['a']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['a']->value;?>
</option>
			<?php
$_smarty_tpl->tpl_vars['a'] = $foreach_a_Sav;
}
?>
		  </select>
		  <br><br>
		<button id="search1" >查找</button>
</div>
<div id="div2" >
	
</div>
<!-- 树状图 -->
<div id="container" style="width: 550px; height: 400px; margin: 0 auto">
	
</div>

</body>
<?php echo '<script'; ?>
 type="text/javascript">
	
		$(function(){
			
			//alert($a);
			$("#search1").click(function(){
				//func1();
				loadXMLDoc();
			});
		

		});
		
	function func1(){
		alert("errrr");
	}

	//ajax
	
		function loadXMLDoc()
{
	var $a=$("#selectid").val();
	var $b=$("#stuid").val();

	//alert($b+"=="+$a)

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
			
			var num=xmlhttp.responseText;
			//alert(num);
			document.getElementById('div2').innerHTML=num;
			shuzhuang();
		}
	}
	xmlhttp.open("GET","searchscoredo.php?km_name="+$a+"&stuId="+$b,true);
	xmlhttp.send();
	}




$(document).ready(function() {  });
	function shuzhuang(){
		var $kmlength=$(".kmclass1");
		//alert($kmlength);
		//for(var i=0;i<$kmlength;i++){}
		var kmarr=new Array();
		var cjarr=new Array();
		$(".kmclass1").each(function(index, el) {
			kmarr[index]=$(this).children('td:eq(0)').text();
			cjarr[index]=$(this).children('td:eq(1)').text();
			//alert($(this).children('td:eq(0)').text())
		});
		var str1 = JSON.stringify(kmarr);
		//alert(cjarr.length);
	//for(var i=0;i<kmarr.length;i++){
   		//a=kmarr[i];
   //	}
   
   var chart = {
      type: 'column'
   };
   var title = {
      text: '成绩显示图'   
   };
   var subtitle = {
      text: 'subject'  
   };
  // var categories=new Array
   //categories:[kmarr[0],kmarr[1],kmarr[2]];
   var xAxis = {


			str1,
   	  
      crosshair: true
   };
   var yAxis = {
      min: 0,
      title: {
         text: 'Rainfall (mm)'         
      }      
   };
   var tooltip = {
      headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
      pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
         '<td style="padding:0"><b>{point.y:.1f} mm</b></td></tr>',
      footerFormat: '</table>',
      shared: true,
      useHTML: true
   };
   var plotOptions = {
      column: {
         pointPadding: 0.2,
         borderWidth: 0
      }
   };  
   var credits = {
      enabled: false
   };
   
   var series= [{
        name: 'Tokyo',
            data: [49.9, 71.5, 106.4, 129.2, 144.0, 176.0, 135.6, 148.5, 216.4, 194.1, 95.6, 54.4]
        }];     
      
   var json = {};   
   json.chart = chart; 
   json.title = title;   
   json.subtitle = subtitle; 
   json.tooltip = tooltip;
   json.xAxis = xAxis;
   json.yAxis = yAxis;  
   json.series = series;
   json.plotOptions = plotOptions;  
   json.credits = credits;
   $('#container').highcharts(json);
  }
//});
<?php echo '</script'; ?>
>
</html><?php }
}
?>