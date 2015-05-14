<?php
/**
 * 此方法是框架访问权限验证的钩子方法<br/>
 * $uri 为请求的URL的相对路径<br/>
 * 如:http://www.yyuc.com/admin/set/index.html 则$uri为:admin/set/index<br/>
 * $uri为实际的控制器路径，而并非用户真实的请求路径(开启自定义路由的情况下两者并不相同)
 * @param $uri
 */
function access_validations($url){
	if(strpos($url, 'admin/')===0){
		if(trim(Session::get('uid'))==''){
			Redirect::index();
		}
		$level_id =  Session::get('level_id');
		$auth_check = new Model('auth_check');
		$auth_check->find(array('auth_id'=>$level_id));
		$nopages = explode(',',$auth_check->controllers);
		$f =  Request::part(-1);
		$p =  Request::part(-2);
		if(($f=='no' && $p=='no') || in_array($p.'/'.$f, $nopages)){
			Redirect::to('/res/noAccess/no-authority.html');
		}
		if(Session::get('upc')=='0' && strpos($f, 'updatePwd') === false && $f !='ind'  && $f !='main'){
			Redirect::to('/admin/userCenter/updatePwd.html');
		}
	}else if(strpos($url, 'houtai/')===0){
		if(!Session::get('mu')){
			Redirect::to('/agencyAdmin/login.html');
		}
		$mu = Session::get('mu');
		//查找用户权限
		$qxm = new Model('houtai_check');
		$qxm->field('id,nopages')->find(array('typ'=>'3','typid'=>$mu->id));
		if(!$qxm->has_id()){
			$qxm = new Model('houtai_check');
			$tjwhere = array();
			if($mu->isyg){
				$tjwhere['typ'] = '1';
			}else{
				$tjwhere['typ'] = '2';
			}
			$tjwhere['typid'] = $mu->level;
			$qxm->field('id,nopages')->find($tjwhere);
		}
		$nopages = explode(',', trim($qxm->nopages));
		$f =  Request::part(-1);
		$p =  Request::part(-2);
		if(!$mu->isadmin && in_array($p.'@'.$f, $nopages)){
			die('无权访问');
		}
		if(Session::get('hupc')=='0' &&  strpos($f, 'updatePwd') === false ){
			Redirect::to('/houtai/xitong/updatePwd.html');
		}
	}
	return true;
}
function access_control(){
	
}
/**
 * 数据执行校验
 *
 * @param DBDes $dbdes
 */
function db_validations($dbdes){
	
}

/**
 *  404挽救
 */
function rescue_404($url){
	
}
/*****************自定义的页面验证写在此处*******************/

?>
