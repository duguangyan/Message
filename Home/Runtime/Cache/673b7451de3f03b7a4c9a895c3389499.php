<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>right</title>
		<script type="text/javascript">
			 window.parent.frames[ "leftTree"].location.reload();  
		</script>
	</head>
	<body>
		<form action="__APP__/Message/doMess" method="post" enctype="multipart/form-data">
			留言题目：<input type="text" name="title" /><br/><br/>
			留言内容：<textarea name="content" cols="30" rows="10"></textarea><br/><br/>
			附　　件：<input type="file" name="filename" /><br><br/>
			<input type="submit" value="提交" />
		</form>
	</body>
</html>