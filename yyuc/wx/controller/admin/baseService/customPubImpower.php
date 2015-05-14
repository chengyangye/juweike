<?php
$errbiao = array("-1"=>"系统错误",
"-2"=>"帐号或密码错误",
"-3"=>"密码错误",
"-4"=>"不存在该帐户",
"-5"=>"访问受限",
"-6"=>"需要输入验证码",
"-7"=>"此帐号已绑定私人微信号，不可用于公众平台登录",
"-8"=>"邮箱已存在",
"-32"=>"验证码输入错误",
"-200"=>"因频繁提交虚假资料，该帐号被拒绝登录",
"-94"=>"请使用邮箱登陆",
"10"=>"该公众会议号已经过期，无法再登录使用");
$uid = Request::get(1);
if(!uid){
	die();
}
$u = new Model('user');
$u->find($uid);
$p = new Model('pubs');
if($u->id==Session::get('mainuid') || Session::get('mainuid')==$u->pid){
	$p->find(array('uid'=>$uid));
}else{
	die();
}
//删除
if('del'==Request::get(2)){
	if($u->id==Session::get('mainuid')){
		//自己 
		$p->isval = '0';
		$p->save();
		Response::write('ok');
	}else{
		$u->pid = 0;
		$u->save();
		Response::write('ok');
	}
}

$badun = '';
if($p->try_post()){
	if(!empty($p->wun)&&!empty($p->wpwd)){
		$pp = new Model('pubs');
		$pp->find(array('wun'=>$p->wun,'isval'=>'1'));
		if($pp->has_id() && $pp->id != Session::get('wid')){
			tusi('公众帐号已被其他用户关联');
			$cu = new Model('user');
			$cu->field('un')->find($pp->uid);
			$badun = $cu->un;
			return;
		}
		if(trim($p->imgcode)!=''){
			$http = unserialize(file_get_contents(YYUC_FRAME_PATH.YYUC_PUB.'/'.Session::get('upath').'http.jpg'));
		}else{
			$http = new HttpClient('mp.weixin.qq.com');
			$http->setPersistCookies(true);
			$http->setPersistReferers(true);
			$http->setCookies(array('uin_cookie'=>'85858963','euin_cookie'=>'A6C9D89A295536D698C6446BEBE935C403FA57F2166E6962','ac'=>'1,008,009'));
			$http->get('/');
		}		
		$http->post('/cgi-bin/login', array('f'=>'json','imgcode'=>trim($p->imgcode),'username'=>$p->wun,'pwd'=>md5(substr($p->wpwd, 0,16))));
		$sres = trim($http->getContent(true));
		Log::error($sres);
		if($sres==''){
			tusi('平台连接失败');
		}else{
			$reds = json_decode($sres); 
			if($reds->ErrCode==-6){//错误的用户名密码
				$http->get('/cgi-bin/verifycode?username='.$p->wun."&r".rand(10000000, 99999999));
				file_put_contents(YYUC_FRAME_PATH.YYUC_PUB.'/'.Session::get('upath').'vcodeimg.jpg', $http->getContent(true));
				file_put_contents(YYUC_FRAME_PATH.YYUC_PUB.'/'.Session::get('upath').'http.jpg', serialize($http));
				$needimg = Session::get('upath').'vcodeimg.jpg?p='.rand(10000000, 99999999);
				
			}elseif($reds->ErrCode!=0){//错误的用户名密码
				tusi('平台账户信息错误:'.$errbiao[$reds->ErrCode]);
			}elseif($reds->ShowVerifyCode!='0'){
				//需要验证吗
			}else{
				$token = $reds->ErrMsg;
				$token = explode('&token=', $token);
				$token = $token[1];
				//关闭普通接口
				$http->post('/cgi-bin/skeyform?form=advancedswitchform&lang=zh_CN', array('flag'=>'0','type'=>'1','token'=>$token));
				$http->getContent(true);
				//修改开发路径
				$http->post('/cgi-bin/callbackprofile?t=ajax-response&lang=zh_CN&token='.$token, array('url'=>Conf::$http_path.'mpapi.html?appid='.Session::get('wid'),'callback_token'=>md5(Session::get('wid').Conf::$management_center_target)));
				$http->getContent(true);
				sleep(1);
				//开启开发接口
				$http->post('/cgi-bin/skeyform?form=advancedswitchform&lang=zh_CN', array('flag'=>'1','type'=>'2','token'=>$token));
				$http->getContent(true);
				tusi('平台账户信息绑定成功');
				Response::exejs("alert('关注你的公众帐号，回复“宝宝”检测是否升级成功');");
				$p->isval = '1';
				Redirect::delay_to('/admin/userCenter/pubs.html',2);
			}
		
		}
	}
	$p->uid = Session::get('uid');
	$p->save();
	Session::set('wid',$p->id);
}



