<?php
if(Request::get('wxid')){
	Session::set('wxid',Request::get('wxid'));
}
if(Request::get('wid')){
	Session::set('wid',Request::get('wid'));
}
$h = new Model('newyy');
$h->find(Request::get(1));
$rednum = new Model('newyy_record');
$ddzs = $rednum->where(array('hid'=>Request::get(1),'wxid'=> Session::get('wxid')))->count();

//对订单项目解析
$m = new Model('newyy_record');
$ddxjson = json_decode($h->bookingset);
$ddx = array();
$formind = 0;
foreach ($ddxjson as $dj){
	$dd = new stdClass();
	$dd->name = $dj->name;
	$dpd = $dj->issys=='1'?' required="required"':'';
	if($dj->type=='text'){
		$dd->form = $m->text('form'.$formind,'class="px" placeholder="'.$dj->holder.'"'.$dpd);
	}elseif($dj->type=='textarea'){
		$dd->form = $m->textarea('form'.$formind,'class="pxtextarea" style="height:99px;overflow-y:visible" placeholder="'.$dj->holder.'"'.$dpd);
	}elseif($dj->type=='date'){
		$dd->form = $m->mdate('form'.$formind,'class="px" placeholder="'.$dj->holder.'"'.$dpd);
	}elseif($dj->type=='datetime'){
		$dd->form = $m->mdatetime('form'.$formind,'class="px" placeholder="'.$dj->holder.'"'.$dpd);
	}elseif($dj->type=='select'){
		$dd->form = $m->select(explode('|', $dj->holder),'form'.$formind,'class="dropdown-select"'.$dpd);
	}
	$formind++;
	$ddx[] = $dd;
}


function hrefto($href){
	return trim($href)== '' ? 'javascript:;':$href;
}