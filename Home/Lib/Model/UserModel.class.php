<?php
	class UserModel extends Model{
		protected $_validate =array(
			//array(验证字段,验证规则,错误提示,[验证条件,附加规则,验证时间])
			array('code','require','验证码未填写！'),
			array('code','checkCode','验证码填写错误',0,'callback',1),
			array('username','require','用户名填写错误！'),
			array('username','','用户已经存在!',0,'unique',1),
			array('username','/^[a-zA-Z\d]\w{3,11}[a-zA-Z\d]$/','用户名必须6个字母以上',0,'regex',1),
			array('repassword','password','确认密码不正确',0,'confirm'),
		);
		protected  function checkCode($code){
			if(md5($code)!=$_SESSION['code']){
				return false;
			}else{
				return true;
			}
		}
	}
?>