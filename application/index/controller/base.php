<?php require_once(dirname(dirname(dirname(__DIR__))).'/common/config.php');?> 
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title></title>
		<?php require_once(_COMMON_.'/link/linkscript.php');?>
				
		<style type="text/css">
			*{
				padding: 0;
				margin: 0;
			}
			li{
				list-style: none;
			}
			#header{
				background: #696969;
				height: 80px;
				/*line-height: 80px;*/
			}
			#header #h1{
				color: darkred;
				text-align: center;
				margin: 0px auto;
				font-size: 40px;
				line-height: 80px;
				width: 80%;
				height: 80px;
				float: left;
				
			}
			/*上边栏右内容*/
			#header .h-right{
				width: 20%;
				height: 80px;
				float: right;
				background: greenyellow;
				text-align: center;
				/**/
			}
			#header .h-right li{
				margin-left: 30px;
				float: left;
				margin-top: 25px;
				
				
			}
			#header .h-right li a{
			display: block;
			width: 80px;
			height: 30px;
			background: #66CDAA;
			line-height: 30px;
			}
			#header .h-right li:hover a{
				background: red;
				
			}
			/*左边栏内容*/
			#left{
				width: 200px;
				height: 1000px;
				background: cadetblue;
				float: left;
			}
			#left .l-img{
				background: black;
				padding: 2px;
			}
			#left .l-img img{
				display: block;
				width: 200px;
				
			}
			#left .l-left li{
				height: 60px;
				background: red;
				text-align: center;
				line-height: 60px;
			}
			#left .l-left li:hover{
				background: cornflowerblue;
			}
		</style>
	</head>
	<body>
		<div id="content">
			
			<div id="header" >
				<div id="h1" >学生管理系统</div>
					
				<div class='h-right'>
					
					<li><a href="">登录</a></li>
					<li><a href="">注册</a></li>
				</div>
			</div>
		</div>
		
		<!--左边栏内容-->
		<div id="left">
			<div class='l-img'>
				<img src="<?php echo _PUBLIC_;?>/static/images/1.png"/>
			</div>
			<div class="l-left">
				<li><a href="#">123</a></li>
				<li><a href="#">123</a></li>
				<li><a href="#">123</a></li>
				<li><a href="#">123</a></li>
				<li><a href="#">123</a></li>
				<li><a href="#">123</a></li>
			</div>
		</div>
		
		
		dfgdtfsghdfhsss
		<div id="">
			<i class="fa fa-car"></i>
		</div>
	</body>
</html>
