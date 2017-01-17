<?php
// 本类由系统自动生成，仅供测试用途
class IndexAction extends CommonAction {
    public function index(){
		$this->display();	
	}
	
	public function top(){
//		$username = $_SESSION['username'];
//		$this->assign('username',$username);
		$this->display();
	}
	public function left(){
		$m= D('Message');
		//分页	
		import('ORG.Util.Page');// 导入分页类
		$count      = $m->count();// 查询满足要求的总记录数
		$Page       = new Page($count,2);// 实例化分页类 传入总记录数和每页显示的记录数
		$Page->setConfig('header','条信息');//设置信息
		$show       = $Page->show();// 分页显示输出
		
		$arr = $m->relation(true)->limit($Page->firstRow.','.$Page->listRows)->order('id desc')->select();
		$this->assign('arr',$arr);
		$this->assign('show',$show);// 赋值分页输出
		
		$this->display();
	}
	public function right(){
		$this->display();
	}
}