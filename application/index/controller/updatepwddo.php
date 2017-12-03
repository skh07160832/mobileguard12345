
<?php
require_once('../../config.php');
require_once(_COMMON_.'/db/conn.php');

require_once('base.php');
if(isset($_POST['user'])){
	$user = $_POST['user'];
	$old_pwd = $_POST['old_pwd'];
	$new_pwd = $_POST['new_pwd'];

//select * from fp_user;
//update fp_user set pass='12345' where (name='admin1') and (pass='123454');
$sql="update fp_user set pass='$new_pwd' where name='$user' and  pass='$old_pwd' ";

$result=$conn->query($sql);
$num=$conn->affected_rows;
if($num){
	echo "<script >alert('密码修改成功');window.location.href='index.php';</script>";
}else{
	echo "<script >alert('密码修改失败');history.go(-1);</script>";

}


}else{
	echo "<script>window.location.href='index.php';</script>";
}
