<?php 
	require_once(dirname(dirname(dirname(__DIR__))).'/common/config.php');
	//require_once('index.php');
	
	if(!isset($_SESSION)){
		session_start();
	}
   if(!isset($_SESSION['user'])){     
   echo "<script>alert('您还未登录，请先登录！');location.href='login.php';</script>"; 
}
?> 

<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title></title>
		<link rel="stylesheet" href="base.css">
		<!-- 包含linkscript.php'的字符串链接 -->
		<?php require_once(_COMMON_.'/link/linkscript.php');
			 
		?>
		
	</head>
	<body>
		<div id="content">
			
			<div id="header" >
				<div id="h1" >学生管理系统</div>
					
				<div class='h-right'>
					
					<li><a href="updatepwd.php?user=<?php echo $_SESSION['user'];?>"> <?php echo $_SESSION['user'];?></a></li>
					<li><a href="loginout.php?id=1">退出登录</a></li>
				</div>
			</div>
		</div>
		
		<!--左边栏内容-->
		<div id="left">
			<div class='l-img'>
				<img src="<?php echo _PUBLIC_;?>/static/images/1.png"/>
			</div>
			<div class="l-left">
				<li><a href="studentlist.php">学生信息表</a></li>
				<li><a href="searchscore.php">查找成绩</a></li>
				<li><a href="kmlist.php">科目信息表</a></li>
				<li><a href="scorelist.php">学生成绩列表</a></li>
				<li><a href="insertkm.php">增加科目</a></li>
				<li><a href="insertstudent.php">添加学生</a></li>
				<li><a href="insertscore.php">添加学生成绩</a></li>
				<li><a href="#">123</a></li>
			
				<li><a href="updatepwd.php?user=<?php echo $_SESSION['user'];?>">修改密码</a></li>
				<li><a href="#">123</a></li>
				<li><a href="#">123</a></li>
				<li><a href="#">123</a></li>
			</div>
		</div>
		
		
		
	</body>
</html>
