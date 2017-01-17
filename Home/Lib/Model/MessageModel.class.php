<?php
	class MessageModel extends RelationModel{
		protected $_auto=array(
			array('time','time',1,'function'),
			array('uid','getId',1,'callback')
		);
		
		protected $_link=array(
			'User'=> array(     //User表
			     'mapping_type'=>BELONGS_TO,
			          'class_name'=>'User', //User表  
			          'foreign_key'=>'uid', //关联单位外键
			          'mapping_name'=>'user',//输出的名称
			          'mapping_fields'=>'username', // 值查询username
					  'as_fields'=>'username',//
			),
		
		);
		
		
		protected function getId(){
			return $_SESSION['id'];
		}
	}
?>