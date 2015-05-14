<?php 
$step = intval(Request::get('step'));
$pub = new Model('pubs');
$pub->find(Session::get('Q_upwxid'));
if($pub->has_id()){
	$message = "升级步骤".$step."成功";
	$percent = 25 * intval($step);
	if($step=='1'){
		//开通接口		
		$http = unserialize($pub->http);
		//关闭普通接口
		$http->post('/cgi-bin/skeyform?form=advancedswitchform&lang=zh_CN', array('flag'=>'0','type'=>'1','token'=>$pub->token));
		Log::error($http->getContent(true));
		sleep(1);
		//修改开发路径
		$http->post('/cgi-bin/callbackprofile?t=ajax-response&lang=zh_CN&token='.$pub->token, array('url'=>'http://wx.zongyangtech.cn/mpapi.html?appid='.$pub->id,'callback_token'=>md5($pub->id.Conf::$management_center_target)));
		Log::error($http->getContent(true));
		sleep(1);
		//开启开发接口
		$http->post('/cgi-bin/skeyform?form=advancedswitchform&lang=zh_CN', array('flag'=>'1','type'=>'2','token'=>$pub->token));
		Log::error($http->getContent(true));
		sleep(1);
	}else if($step=='2'){
		sleep(1);
	}else if($step=='3'){
		sleep(1);
	}else if($step=='4'){
		sleep(1);
	}	
	Response::write('{"finish":true,"success":true,"step":'.$step.',"message":"'.$message.'","percent":'.$percent.'}',Mime::$json);
}else{
	Response::write('{"forbit":true}',Mime::$json);
}