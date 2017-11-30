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