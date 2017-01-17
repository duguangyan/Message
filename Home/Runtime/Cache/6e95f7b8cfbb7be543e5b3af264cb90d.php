<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>top</title>
		<link rel="stylesheet" type="text/css" href="__PUBLIC__/Css/Home/top.css" />
	</head>
	<body>
		<h1>杜光焱留言板系统</h1>
		<p>欢迎您 <?php echo (session('username')); ?> ! </p> <a href="__APP__/Login/dologout" target="_top">退出</a>
	</body>
</html>