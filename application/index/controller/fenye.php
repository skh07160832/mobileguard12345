<?php
require_once('../../config.php');

require_once(_COMMON_.'/db/conn.php');
if(isset($_GET['num1'])){
	$num=$_GET['num1'];

$num*=5;
if($num<0){
	$num=0;
}else if($num>=29){
	$num=30;
}
$sql="select * from fp_student limit $num,5";
$result=$conn->query($sql);
$arr=array();
$num1=$result->num_rows;
if($num1>0){
  while($row=$result->fetch_assoc()){
  $arr[]=$row;
	}
}
echo json_encode($arr);
//
}
//echo "rtrt";
?>

<script type="text/javascript">

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

</script>