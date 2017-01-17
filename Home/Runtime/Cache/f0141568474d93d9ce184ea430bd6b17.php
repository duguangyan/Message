<?php if (!defined('THINK_PATH')) exit();?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>登陆</title>
		<link rel="stylesheet" type="text/css" href="__PUBLIC__/Css/basic.css" />
		<link rel="stylesheet" type="text/css" href="__PUBLIC__/Css/Home/login.css" />
		<script src="http://libs.baidu.com/jquery/2.0.0/jquery.min.js"></script>
	</head>
	<body>
		<form action="__URL__/dologin" method="post" name='myForm'>
			用户名：<input type="text" name='username'><br/>
			密　码：<input type="password" name="password"><br/>
			<span><?php echo ($_GET['v']); ?></span><br/>
			验证码：<input type="text" name='code'>
			
			 	 <img  src='__APP__/Public/code?w=50&h=30' onclick='this.src=this.src+"?v="+Math.random()'><br/>
			 	 <span><?php echo ($_GET['r']); ?></span>
			<!--<img src="__APP__/Public/code?w=50&h=30" onclick="this.src=this.src+'?v='+Math.random()">--><br/>
			<input title="login" type="button" value="登陆"/><input class="register" type="button" value="注册"/>
		</form>
		<script type="text/javascript">
			$(function(){
				$('input[title="login"]').click(function(){
					$('form[name="myForm"]').submit();
				});
				$('.register').click(function(){
					window.location='__APP__/register/reg';
				});
			});
		</script>
	</body>
</html>