<?php
$u = new SampleModel();
if($u->try_post()){
	$http = new HttpClient('mp.weixin.qq.com');
	$http->setPersistCookies(true);
	$http->setPersistReferers(true);
	$http->setCookies(array('uin_cookie'=>'85858963','euin_cookie'=>'A6C9D89A295536D698C6446BEBE935C403FA57F2166E6962','ac'=>'1,008,009'));
	$http->get('/');
	$http->post('/cgi-bin/login', array('f'=>'json','imgcode'=>'','username'=>$u->un,'pwd'=>md5($u->pwd)));
	$sres = trim($http->getContent(true));
	if($sres==''){
		tusi('密码找回失败');
	}else{
		$reds = json_decode($http->getContent(true));
		if($reds->ErrCode=='0'){
			$pub = new Model('pubs');
			$pub->find(array('wun'=>$u->un,'isval'=>'1'));
			if($pub->has_id()){
				$pub->wpwd = $u->pwd;
				$pub->save();
				$ru = new Model('user');
				$ru->update(array('id'=>$pub->uid),array('pwd'=>$u->pwd));
				Response::exejs('alert("聚微客密码已重置为微信公众平台密码，请重新登录");goto("/login.html")');
			}else{
				tusi('密码找回失败');
			}
			
		}else{
			tusi('平台信息不正确');
		}
	}
}