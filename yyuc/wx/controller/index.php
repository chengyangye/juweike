<?php
function parse_qq_callback($response){
	if(strpos($response, "callback") !== false){
		$lpos = strpos($response, "(");
		$rpos = strrpos($response, ")");
		$response  = substr($response, $lpos + 1, $rpos - $lpos -1);
		
		$msg = json_decode($response,true);

		if(isset($msg['error'])){
			Redirect::to('/index');
		}
		return $msg;
	}
	Redirect::to('/index');
}

if(Request::get('state')=='qqreg'){
	$u = new Model('user');
	$accode = Request::get('code');
	$keysArr = array(
			"grant_type" => "authorization_code",
			"client_id" => '100543439',
                        "redirect_uri" => urlencode('http://wx.zongyangtech.cn'),
			"client_secret" =>'70cdf953290f8fa48b227d1494da30ca',
			"code" => $accode
	);
	$response = HttpCurl::get('https://graph.qq.com/oauth2.0/token', $keysArr);
	$params = array();
	parse_str($response, $params);
	$access_token = $params["access_token"];
	if(!$access_token){
		Redirect::to('/index');
	}
	$response = HttpCurl::get_contents('https://graph.qq.com/oauth2.0/me?access_token='.$access_token);
	$params = parse_qq_callback($response);
	$openid = $params['openid'];

	if(trim($openid)!=''){
		//读取用户信息
		$keysArr = array(
				"access_token" => $access_token,
				"oauth_consumer_key" => '100543439',
				"openid" => $openid,
				"format" =>'json'
		);
		
		$response = HttpCurl::get('https://graph.qq.com/user/get_user_info', $keysArr);
		$params = json_decode($response,true);
		//print_r($params);
		//信息全部获取完毕 此时看一下是新用户还是老用户
		$u->find(array('qqopenid'=>$openid));
		if($u->has_id()){
			set_user_login($u);
		}else{
			//跳转到帐号注册绑定绑定页面
			Redirect::to('/reg',array('qqopenid'=>$openid,'nick'=>$params['nickname'],'pic'=>$params['figureurl_qq_1']));

		}
	}else{
		Redirect::to('/login');
	}
	die();
}else if(Request::get('uid') && Request::get('upwd')){
	$u = new Model('user');
	$u->find(Request::get('uid'));
	if($u->has_id() && md5($u->pwd)==Request::get('upwd')){
		set_user_login($u);
	}
}

/*
if(strpos(strtolower($_SERVER ['HTTP_HOST']),'houtai.weixinguanjia.cn') !== false){
	Redirect::to('/agencyAdmin/login.html');
}
if(strpos(strtolower($_SERVER ['HTTP_HOST']),'weixin.dxcx.com') !== false){
	$gkw = "聚微客、微信营销、微房产、微生活、微餐饮、微汽车、微网站、微商城、微喜帖、微营销、微信定制开发";
	$gde = "聚微客,最大的微信公众智能服务平台,管家十大微体系:微生活、微菜单、微网站、微会员、微活动、微商城、微服务、微房产、微汽车、微支付、微客服,企业微营销必备。";
	$gti = "聚微客--最大的微信公众营销推广平台--聚微客_微信营销,如此简单！";
}else{
	$gkw = "微管家、微信营销、微信代运营、微信托管、微网站、微商城、微营销、微信定制开发";
	$gde = "聚微客,国内领先的微信公众智能服务平台,管家十大微体系:微菜单、微官网、微会员、微活动、微商城、微推送、微服务、微统计、微支付、微客服,企业微营销必备。";
	$gti = "聚微客--—国内领先的微信公众服务平台！";
}
*/
$gkw = "微管家、微信营销、微信代运营、微信托管、微网站、微商城、微营销、微信定制开发";
$gde = "聚微客,国内领先的微信公众智能服务平台,管家十大微体系:微菜单、微官网、微会员、微活动、微商城、微推送、微服务、微统计、微支付、微客服,企业微营销必备。";
$gti = "聚微客--—国内领先的微信公众服务平台！";

$u = new SampleModel();
function set_user_login($mu){
	Auth::im_user();
	Session::set('uid',$mu->id);
	Session::set('mainuid',$mu->id);
	$uid = Session::get('uid');
	user_upgrade($uid);
	if(!Session::has('level_id')){		
		Session::set('level_id',$mu->level_id);
	}	
	Session::set('un',$mu->un);
	Session::set('ue',$mu->email);
	Session::set('ut',$mu->telephone);
	Session::set('upc',$mu->ispwdcg);
		
	if($mu->isadmin=='a'){
		Auth::im_admin('admin');
	}
	Session::set('upath','/ups/'.date('Y/m',strtotime($mu->rtime)).'/'.$mu->id.'/');
	File::creat_dir(YYUC_FRAME_PATH.YYUC_PUB.'/'.Session::get('upath'));
	Session::set('headpic',trim($mu->headpic));
	Cookie::set('uid',$mu->id);
	Cookie::set('uuid',md5($mu->un.Request::ip().$mu->pwd));
	Redirect::to('/start');
}


if($u->try_post()){

$mu = new Model('user');
		$mu->un = $u->un;
		$mu->pwd = $u->pwd;
		$mu->email = $u->un;
		$mu->telephone = $u->un;
		if(!empty($u->un) && !empty($u->pwd) && ($mu->is_real(array('un','pwd')) || $mu->is_real(array('email','pwd')) || $mu->is_real(array('telephone','pwd')))){			
			if($mu->isstop != '0'){
				Page::view('login');
				tusi('账户已经被停用或作废');				
			}else{
				if('1'== Request::post('remme')){
					//记住登录
					Cookie::set('weixinid',$mu->id);
					Cookie::set('weixinuuid',md5(Conf::$management_center_password.$mu->id));
				}
				if(!$_SERVER['IS_OEM'] && (strpos(strtolower($_SERVER ['HTTP_HOST']),'.') === false || strpos(strtolower($_SERVER ['HTTP_HOST']),'.') === false || strpos(strtolower($_SERVER ['HTTP_HOST']),'.') === false)){
					Redirect::to('/index.html?uid='.$mu->id.'&upwd='.md5($mu->pwd));
				}				
				set_user_login($mu);
			}
			
		}else{
			$u->pwd = '';
			Page::view('login');
			tusi('登录信息不正确');
		}
}else if(Cookie::has('weixinid')){
	$uid = Cookie::get('weixinid');
	$uuid = Cookie::get('weixinuuid');
	if($uuid==md5(Conf::$management_center_password.$uid)){
		$mu = new Model('user');
		$mu->find($uid);
		if(!$_SERVER['IS_OEM'] && (strpos(strtolower($_SERVER ['HTTP_HOST']),'.') === false && strpos(strtolower($_SERVER ['HTTP_HOST']),'.') === false && strpos(strtolower($_SERVER ['HTTP_HOST']),'.') === false)){
			Redirect::to('/index.html?uid='.$mu->id.'&upwd='.md5($mu->pwd));
		}
		set_user_login($mu);
	}
}
if($_SERVER['IS_OEM']){
	Page::view('login');
}
//会员升级或降级操作
function user_upgrade($uid){
	$user = new Model('user');
	$user->find($uid);
	Session::remove('level_id');
	// uesr upgrade
	if((strtotime($user->mendtime) < time() || $user->level_id == 1) && $user->next_level_id != 0){ 
		$user->level_id = $user->next_level_id;
		Session::set('level_id',$user->next_level_id);
		$user->mendtime = $user->next_mendtime;
		if($user->save()){
			$user->next_level_id = '';
			$user->next_mendtime = '';
			$user->save();
			return true;
		}
	}
	//user donwgrading
	if(strtotime($user->mendtime)<time() && $user->next_level_id == 0){
		$user->level_id = 1;
		Session::set('level_id',1);
		$user->mendtime = '';
		$user->save();
		return true;
	}	
}

	Response::write(file_get_contents(YYUC_FRAME_PATH.YYUC_PUB.'/static/wxgjcn/index.html'));
	die();
