<?php 
class Employee extends Model {
	//此处定义虚拟字段
	//public $virtual_field = null;
	/**
	* 构造函数
	*/
	function __construct($postid=''){
		parent::__construct('user_agency',$postid);		
	}

	/**
	* 数据入库之前的合法性验证
	*/
	public function validate(){
		//验证示例
		$this->val_email('email','邮箱格式貌似不正确！');
		$this->val_min_length('un', 3,'帐号长度不能小于3个字符！');
		$this->val_max_length('un', 30,'帐号长度不能大于于30个字符！');
		$this->val_max_length('pwd', 60,'密码长度不能大于于16个字符！');
		$this->val_min_length('pwd', 6,'密码长度不能小于6个字符！');
	
	    $this->val_unique('un','该帐号已经被注册！');
		//$this->val_unique('email','该邮箱已经被注册了!');
		$this->val_integer('qq','QQ号码不正确！');
		$this->val_phone('telephone','手机号码格式不正确！');
		
	//	$this->val_chinese('name','既然在中国，就用用中文名字吧！');
		
		//非空校验
		$this->val_notnull('name','不能留空呀！');
		//$this->val_notnull('email','不能留空呀！');
		$this->val_notnull('pwd','不能留空呀！');
		
		$this->val_notnull('telephone','不能留空呀！');
		$this->val_notnull('un','不能留空呀！');
		$this->val_notnull('qq','不能留空呀！');
		$this->val_notnull('l_shi','不能留空呀！');
		
	}

	/**
	* 根据数据库的数据进行虚拟字段的填充
	*/
	public function fill_virtual_field(){
		//虚拟字段填充示例	
	}


	/**
	* 根据模型中的虚拟字段回填数据库字段数据
	*/
	public function fill_entity_field(){
		//回填示例
		//$names = explode('_', $this->virtual_field);
		//$this->birthday = $this->bnian.'-'.$this->byue.'-'.$this->bri;		
	}

	/**
	* 读取Model类的访问地址,有些模型数据的访问地址不止一个,需自行扩展
	*/
	public function path(){
		//组合示例
		//$path = '/'.$this->theme.'/'.date('Y-m-d', $this->posttime).'/'.$this->id.'.html';
		//return $path;
		
	}

}
?>