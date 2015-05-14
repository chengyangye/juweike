<?php

/*
 *   @desc 用户注册
 * */


$lastdata = Redirect::last_data();
$fromqq = false;
$user = new User();
if(isset($lastdata) && isset($lastdata['qqopenid'])){
	//$user = new Model('user');
	Session::set('bddata',$lastdata);
	$fromqq = true;
	//$user->un = $lastdata['nick'];//.'@'.md5($lastdata['qqopenid']);
	$user->qqopenid = $lastdata['qqopenid'];
	$user->rtime = DB::raw('now()');
	//$user->save();
	//set_user_login($user);
	
	//die();
}

if($user->try_post()){
	if(!$user->vercodeok()){
		tusi('验证码不正确');
	}else{
		//if($user->try_post()){//密码被传入
			if($user->pwd != $user->repwd){
				Session::once('cperr','<span class="maroon">两次密码不一致！</span>');
				return;
			}			 
		//}	
		$user->rtime = DB::raw('NOW()'); //获得mysql函数
		if(Session::has('bddata')){
			$lastdata = Session::get('bddata');
			$user->qqopenid = $lastdata['qqopenid'];
		}
		$user->level_id = '5';
		$user->rip = Request::ip();
		$user->mendtime=date('Y-m-d',time()+1296000);
		$user->agid = $_SERVER['OEM_ID'];
		if($user->agid=='0'){
			/**
			//自由注册用户 需要为其分配一个员工
			$yg = new Model('user_agency');
			$ptygs = $yg->field('id')->where(array('isyg'=>'1','isstop'=>'0','level'=>array('8','9')))->list_all();
			$ptygsl = count($ptygs);
			if($ptygsl > 0){
				if(!Cache::forever('WXGJ_PTYGJS')){
					Cache::forever('WXGJ_PTYGJS',0);
				}
				$hyind = intval(Cache::forever('WXGJ_PTYGJS'));
				if($hyind>($ptygsl-1)){
					$hyind = 0;
				}
				$theyg = $ptygs[$hyind];
				
				$user->ygid = $theyg->id;
				Cache::forever('WXGJ_PTYGJS',$hyind+1);
			}
			*/
		}else{
			$user->direct = '0';
		}
		if($user->save()){
			set_user_login($user);			
		}
	}
}


function set_user_login($mu){
	Auth::im_user();
	Session::set('uid',$mu->id);
	Session::set('mainuid',$mu->id);
	$uid = Session::get('uid');
	if(!Session::has('level_id')){
		Session::set('level_id',$mu->level_id);
	}
	Session::set('un',$mu->un);
	Session::set('ue',$mu->email);
	Session::set('ut',$mu->telephone);

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
