<?php
	 header("Content-type: text/html; charset=utf-8"); 
	class LoginAction extends Action{
		public function index(){
			
		}
		
		public function login(){
			$this->display();
		}
		public function dologin(){
//			1.接受值
//			2.判断用户在数据库中是否存在
//			3.存在允许登陆

//			4.不存在，先是错误	
			//dump($_POST);
			$username = $_POST['username'];
			$password = md5($_POST['password']);
			$code     = $_POST['code'];
			if($_SESSION['code'] != md5($code)) {
  				// $this->error('验证码错误！');
  				$this->redirect('Login/login',array('r'=>'验证码错误!'));
			}
			
			$m=M('User');
			$where = array(
				'username'=>$username,
				'password'=>$password,
			);
			$con = $m->field('id')->where($where)->find();
			if($con){
				
				$_SESSION['username']= $username;
				$_SESSION['id'] = $con['id'];
				//$this->success('登陆是成功',U('Index/index'));
				$this->redirect('Index/index');
			}else{
				//$this->error('登陆失败');
				$this->redirect('Login/login',array('v'=>'用户名或者密码错误!'));
			}
		}
		//退出
		public function dologout(){
			$_SESSION=array();
			if(isset($_COOKIE[session_name()])){
				setcookie(session_name(),'',time()-1,'/');
			}
			session_destroy();
			$this->redirect('Index/index');
		}

	}
?>