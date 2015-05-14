<?php
if(!Session::get('mainuid')){
	Redirect::index();
}
$user = new Model('user');
$pub = new Model('pubs');
if(Request::get(1)){
	$uid = Request::get(1);
	$user->find($uid);
	if($user->id==Session::get('mainuid') || Session::get('mainuid')==$user->pid){
		$pub->find(array('uid'=>$uid));
		$user->headpic = $pub->headpic;
	}else{
		die();
	}
}else{
	$user->find(Session::get('mainuid'));
	$pub->find(array('uid'=>Session::get('mainuid')));
	$user->headpic = $pub->headpic;
}

Session::set('wid',$pub->id);

$initifurl = '';
if(Request::get('page')){
	$initifurl = '/'.str_replace('@', '/', Request::get('page')).'.html';	
}
$un = $user->un;
$level = $user->level_id;
$level_name = translate_level($level);
set_user_login($user);
include another('index');

function set_user_login($mu){
	Auth::im_user();
	Session::set('uid',$mu->id);
	$uid = Session::get('uid');
	user_upgrade($mu);
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
}
//会员升级或降级操作
function user_upgrade($user){
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
