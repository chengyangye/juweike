<?php 
$un = trim(Request::post('username'));
$pwd = trim(Request::post('password'));
$uid = Session::get('uid');

if($un !='' && $pwd !=''){
	//存入微信用户名密码
	$pub = new Model('pubs');
	if($pub->has(array('wun'=>$un,'isval'=>'1'))){
		Response::write('{"repeat":true,"un":"0"}',Mime::$json);
	}	
	$http = new HttpClient('mp.weixin.qq.com');
	$http->setPersistCookies(true);
	$http->setPersistReferers(true);
	$http->setCookies(array('uin_cookie'=>'85858963','euin_cookie'=>'A6C9D89A295536D698C6446BEBE935C403FA57F2166E6962','ac'=>'1,008,009'));
	$http->get('/');	
	$http->post('/cgi-bin/login', array('f'=>'json','imgcode'=>'','username'=>$un,'pwd'=>md5($pwd)));
	$sres = trim($http->getContent(true));
	if($sres==''){
		Response::write('{"notres":true}',Mime::$json);
	}else{
		$reds = json_decode($http->getContent(true));
		if($reds->ErrCode=='-6'){//错误的用户名密码
			Response::write('{"yzml":true}',Mime::$json);
		}elseif($reds->ErrCode!='0'){//错误的用户名密码
			Response::write('{"error_account":true}',Mime::$json);
		}elseif($reds->ShowVerifyCode!='0'){
			//需要验证吗
		}else{
			$pub->find(array('uid'=>Session::get('uid')));
			$pub->uid = Session::get('uid');
			$pub->wun = $un;
			$pub->wpwd = $pwd;
			$pub->rtime = DB::raw('now()');
			$pub->isval = '0';
			$pub->http = serialize($http);
			$pub->httptime = time();
			$token = $reds->ErrMsg;
			$token = explode('&token=', $token);
			$token = $token[1];
			$pub->token = $token;
			$pub->save();
			Session::set('Q_upwxid',$pub->id);
			Response::write('{"errCode":0}',Mime::$json);			
		}
		
	}	
}
