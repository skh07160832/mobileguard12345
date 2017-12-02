<?php /* Smarty version 3.1.27, created on 2017-12-02 18:00:12
         compiled from "D:\Software\Win7\wamp64\wampserver3.0.6_x64\www\finalphp\application\index\view\studentlist.html" */ ?>
<?php
/*%%SmartyHeaderCode:67305a22ea2cc10873_29462731%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fc5cd28bcab3bbcfbb7b65031878c50bad4edab4' => 
    array (
      0 => 'D:\\Software\\Win7\\wamp64\\wampserver3.0.6_x64\\www\\finalphp\\application\\index\\view\\studentlist.html',
      1 => 1512221943,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '67305a22ea2cc10873_29462731',
  'variables' => 
  array (
    'aa' => 0,
    'arr' => 0,
    'd' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5a22ea2ccd7c13_57131425',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5a22ea2ccd7c13_57131425')) {
function content_5a22ea2ccd7c13_57131425 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '67305a22ea2cc10873_29462731';
?>
<!-- <!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body> -->
<!--  <?php echo $_smarty_tpl->tpl_vars['aa']->value;?>
-->


    <div style="width:70%;float:left;margin:50px;" class="">
        <h2 class="text-center">学生信息表</h2>

	    <select name="" id="tiaoshu">
		   	<option value="5">5</option>
		   	<option value="8">8</option>
		   	<option value="10">10</option>
		   	<option value="12">12</option>
		   	<option value="15">15</option>
		   	<option value="20">20</option>
		   	<option value="25">25</option>
		   	<option value="50">50</option>
		</select>&nbsp;显示行数

     	<a href="insertstudent.php" style="padding:5px">
				<span><i class="fa fa-plus-square-o" style="margin-right:2px;"></i>添加学生</span>
		</a>

         <div style="float:right;line-height:30px;">
         	内容筛选：<input style="margin-bottom:10px;float:right;height:30px;border:1px solid #7bcdd6;" type="text" id="searchid">
         </div>
	     

		 <form action="">
		    <table class="table table-striped table-bordered table-hover text-center" id="at" >
		      
		       <tr style="background:#7bcdd6;">
		       	<td><i class='fa fa-user'></i>学号</td>
		       	<td>姓名</td>
		       	<td>性别</td>
		       	<td>班级</td>
		       	<td colspan="2" ><i class='fa fa-wrench'></i>操作</td>
		       </tr>

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
		    		 <tr title="tt">
		    		 	<td><?php echo $_smarty_tpl->tpl_vars['d']->value['studentId'];?>
</td>
		    		 	<td><?php echo $_smarty_tpl->tpl_vars['d']->value['name'];?>
</td>
		    		 	<td><?php echo $_smarty_tpl->tpl_vars['d']->value['gender'];?>
</td>
		    		 	<td><?php echo $_smarty_tpl->tpl_vars['d']->value['class'];?>
</td>
		    		 	<td><a href="updatestudent.php?id=<?php echo $_smarty_tpl->tpl_vars['d']->value['id'];?>
">修改</a></td>
		    		 	<td><a href="deletestudent.php?id=<?php echo $_smarty_tpl->tpl_vars['d']->value['id'];?>
&sId=<?php echo $_smarty_tpl->tpl_vars['d']->value['studentId'];?>
&sname=<?php echo $_smarty_tpl->tpl_vars['d']->value['name'];?>
">删除</a></td>
		    		 </tr>
			      
			    <?php
$_smarty_tpl->tpl_vars['d'] = $foreach_d_Sav;
}
?>
		    </table>
    	</form>
    	
	    	<div style="">
				<button style="background:#7bcdd6;padding:4px;" id="Pre">上一页</button>&nbsp;&nbsp;
	    		<button  style="background:#7bcdd6;padding:4px;" id="Next">下一页</button>
			</div >
			
			
    	
		
    	
    </div> 
    <br />
    
   
</body>

	
<?php echo '<script'; ?>
 type="text/javascript">


	$(function(){

		$trleg=$("#at tr").length;
		 var arr=new Array();
		
			for(var i=0;i<$trleg;i++){
		 		arr[i]=$("#at tr:eq("+i+")");
		 }

	var $tiaoshu=5;
	 $("#at tr:gt("+$tiaoshu+")").remove();
   
  	var $pageleng=Math.ceil(($trleg-1)/$tiaoshu);
  	var $yunum=($trleg-1)%$tiaoshu;
 	// alert($yunum+"====="+$pageleng);
 
  	var $Nowpage=1;

	$("#Next").click(function(){
  
  	$Nowpage+=1;
  
   var temp2=($Nowpage)*$tiaoshu+1;
   
   $("#at tr:gt(0)").remove();
	if($Nowpage>$pageleng){
		
		$Nowpage=$pageleng;
	}
  	if($Nowpage==$pageleng){  
  	//temp1=($Nowpage-1)*5+1;
  	if($yunum!=0){
     temp2=$trleg;
     
  	}else{

  	}
  	
  }
	var temp1=($Nowpage-1)*$tiaoshu+1;

 	 for(var i=temp1;i<temp2;i++){
  	$("#at").append(arr[i]);
  	}
 

});

	$("#Pre").click(function(){
	$Nowpage--;
    if($Nowpage<1){
    	$Nowpage=1;
    }
 	$("#at tr:gt(0)").remove();

   var temp2=($Nowpage)*$tiaoshu+1;
   var temp1=($Nowpage-1)*$tiaoshu+1;

  if(temp2>$trleg){
  	temp2=$trleg
  }

  for(var i=temp1;i<temp2;i++){
  	$("#at").append(arr[i]);
  }

  });



		 
		  

		   $("#searchid").on('input',function(e){  
            		
            	var $tempval=$("#searchid").val();
            	$tempval=$tempval.toString();
            	//alert(typeof($tempval));
            	if ($tempval!='') {

                 $("#at tr:gt(0)").remove();
               
                 var $temp=0;
				for(var i=0;i<$trleg;i++){
					
					var childcon=arr[i].children().text();
					//alert(typeof(childcon));
					//var result=childcon.indexOf();
					//childcon=childcon.toString();
					//if (childcon.search($tempval)>0 && $tempval!='') {
						if (childcon.match($tempval)!=null && $tempval!='') {
						$temp++;
						$("#at").append(arr[i]);
					}	
		 		}

		 			if($temp==0){

		 					var temp3='<tr><td colspan="6">没有任何信息</td></tr>';
		 					$("#at").append(temp3);
		 				}


		 			}else{
		 				$Nowpage=1;
		 				 $("#at tr:gt(0)").remove();
		 				 
		 				for (var i = 0; i < $tiaoshu+1; i++) {
		 					$("#at").append(arr[i]);
		 					$temp++;
		 				};

		 				
		 			}
             });
		 
		
		  //条数
		  $('#tiaoshu').change(function(){
		  	$Nowpage=1;

			$tiaoshu=parseInt($(this).val());
   			$pageleng=Math.ceil(($trleg-1)/$tiaoshu);
   			$yunum=($trleg-1)%$tiaoshu;
		  	
		  	 $("#at tr:gt(0)").remove();
		 	for (var i = 0; i < $tiaoshu+1; i++) {
		 			$("#at").append(arr[i]);
		 				};
	
		  });


	});
	
<?php echo '</script'; ?>
>
</html><?php }
}
?>