<?php
if(Request::get('wxid')){
	Session::set('wxid',Request::get('wxid'));
}
if(Request::get('wid')){
	Session::set('wid',Request::get('wid'));
}
if(Session::has('wxid') && Session::has('wid')){
	$wxid = Session::get('wxid');
	$wid = Session::get('wid');
	$cxid = Request::get(1);
	$h = new Model('micro_car_yyby');
	$h->find(array('wid'=>$wid));
	$mc = new Model('micro_car_my');
	$mc->find(array('wid'=>$wid,'wxid'=>$wxid));
	
	$c = new Model('micro_car_chexing');
	$c->find($mc->cxing);
	
	$cx = new Model('micro_car_chexi');
	$cx->find($mc->cxi);
	
	
	$pp = new Model('micro_car_pinpai');
	$pp->find($mc->cpp);
	//对订单项目解析
	$m = new Model('micro_car_yyby_record');
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
}else{
	die();
}





function hrefto($href){
	return trim($href)== '' ? 'javascript:;':$href;
}