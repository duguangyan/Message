<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>left</title>
	</head>
	<body>
		<?php if(is_array($arr)): $i = 0; $__LIST__ = $arr;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>留言题目：<?php echo ($vo["title"]); ?>   <br/>
			留言内容：<?php echo ($vo["content"]); ?> <br/>
			留言时间: <?php echo (date('Y-m-d H:i:s',$vo["time"])); ?>    <br/>
			留言人　：<?php echo ($vo["username"]); ?>     <br>
			附件名　：<?php echo ($vo["filename"]); ?><br>
			<img src="__PUBLIC__/Uploads/<?php echo ($vo["filename"]); ?>"/>
			<hr><?php endforeach; endif; else: echo "" ;endif; ?>
		<?php echo ($show); ?>
	</body>
</html>