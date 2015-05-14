<?php
 
class KeyWord extends Model{
	
	function __construct($postid=''){
		parent::__construct('key_word',$postid);
	}
	
	/**
	 * 数据入库之前的合法性验证
	 */
	public function validate(){
		
	
		$this->val_unique('keyWord','该帐号已经被注册！');
	
		$this->val_notnull('keyWord','不能留空呀！');
	
	}
	
	public function fill_entity_field(){}
	
}

