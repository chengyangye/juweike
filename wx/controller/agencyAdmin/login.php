<?php
/**
 *   @desc 管理员代理后台登陆
 * */
$u = new SampleModel();
if(Cookie::has('sys_autologin')){
	$mu = new Model('user_agency');
	$mu->find(Cookie::get('sys_autologin'));
	if($mu->has_id() && md5($mu->id.$mu->pwd)==Cookie::get('sys_autologin_uuid')){
		Auth::im_admin();
		Session::set('mu',$mu);
		Redirect::to('/agencyAdmin/frame');
	}else{
		Cookie::remove('sys_autologin');
	}
}


if($u->try_post()){
	if(!$u->vercodeok()){
		tusi('验证码不正确');
	}else{
		$mu = new Model('user_agency');
		$mu->un = $u->un;
		$mu->pwd = $u->pwd;
		if($mu->is_real(array('un','pwd'))){
			if($mu->isstop !='0'){
				tusi('账户已经被停用或作废');
			}else{
				Auth::im_admin();
				Session::set('mu',$mu);
				Session::set('hupc',$mu->ispwdcg);
				if(Request::post('remembermeadmin')=='1'){
					//自动登录
					Cookie::set('sys_autologin',$mu->id);
					Cookie::set('sys_autologin_uuid',md5($mu->id.$mu->pwd));
				}
				Redirect::to('/agencyAdmin/frame');
			}
		}else{
			$u->pwd = '';
			tusi('登录信息不正确');
		}
	}
	
}
