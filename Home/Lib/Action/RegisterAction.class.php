<?php
	class RegisterAction extends Action{
		public function reg(){
			$this->display();
		}
		//检查用户是否注册
		public	function checkName(){
			$username = $_GET['username'];
			if($username!=''||$username!=null){
				$m=M('User');
				$w['username']=$username;
				$con = $m->where($w)->count();
				if($con){
					echo 1;
				}else{
					echo 0;
				}
			}
			
		}
		
		//注册
		public function doreg(){			
			$m=M('User');
			$data['username']=$_POST['username'];
			$data['password']=md5($_POST['password']);
			$data['sex']     =$_POST['sex'];
			//$m->create();
			$lastId=$m->add($data);
			if($lastId){
				$this->redirect('Login/login');
			}else{
				$this->error('用户注册失败');
			}
			
		}
	}
?>