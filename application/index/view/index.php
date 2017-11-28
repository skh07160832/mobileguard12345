<?php 
session_start();
if(!isset($_SESSION['user'])){     
   echo "<script>alert('您还未登录，请先登录！');location.href='login.php';</script>"; 
}else{
	echo $_SESSION['user'];
}
?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title></title>
	</head>
	<body>
		<h1>欢迎页面</h1>
	</body>
</html>
