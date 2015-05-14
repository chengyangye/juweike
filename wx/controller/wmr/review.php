<?php
if(Request::get('wxid')){
	Session::set('wxid',Request::get('wxid'));
}
if(Request::get('wid')){
	Session::set('wid',Request::get('wid'));
}

if(Request::get('typ')){
	//查找我的印象
	$red = new Model('micro_meirong_yinxiang_record');
	$red->find(array('wxid'=>Session::get('wxid'),'wid'=>Session::get('wid')));
	if(Request::get('typ')=='setres'){
		$content = Request::get('content');
		$red->wxid = Session::get('wxid');
		$red->wid = Session::get('wid');
		$red->name = $content;
		$red->save();
	}
	
	$yx = new Model('micro_meirong_yinxiang');
	$yx->where(array('wid'=>Session::get('wid'),'isshow'=>'1'));
	$sum = $yx->sum('yinxiang_number');
	$yxres = $yx->order('sort desc,yinxiang_number desc,id')->list_all();
	$yx_arr = array();
	
	$u_arr = array();
	if($red->has_id()){
		$u_arr = array('content'=>$red->name,'count'=>1,'id'=>99998196789);
	}else{
		$u_arr = array('content'=>'','count'=>0,'id'=>-1);
	}
	
	foreach ($yxres as $y){
		if($y->name==$red->name){
			$u_arr['id'] = $y->id;
			$u_arr['count'] = $y->yinxiang_number;
		}
		$yx_arr[] = array('content'=>$y->name,'count'=>$y->yinxiang_number,'id'=>$y->id);
	}
	$res = array('msg'=>'ok','ret'=>'0','user'=>$u_arr,'top'=>$yx_arr,'sum'=>$sum);
	Response::json($res);	
}else if(Request::get('rtyp')){
	$vi = new Model('micro_meirong_expert_comment');
	$res = array();
	$vres = $vi->where(array('wid'=>Session::get('wid')))->order('sort desc,id')->list_all();
	foreach ($vres as $v){
		$msg = array();
		$msg['name'] = $v->expert_name;
		$msg['title'] = $v->zhiwei;
		$msg['photo'] = Conf::$http_path.$v->pic;
		$msg['intro'] = $v->jianjie;
		$msg['reviewTitle'] = $v->title;
		$msg['reviewDesc'] = $v->content;
		$res[] = $msg;
	}
	
	Response::json($res);
}