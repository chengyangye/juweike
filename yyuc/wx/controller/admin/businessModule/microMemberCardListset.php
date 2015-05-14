<?php

if(Request::post()){
	$rcd = new Model('micro_member_card_record');
	$rcl = new Model('micro_member_card_list');
	$id = Request::post('id');
	$rcd->find($id);
	$fs = Request::post('fs');
	$md = Request::post('md');
	$je = Request::post('je');
	$bz = Request::post('bz');
	if($fs=='cz'){
		$rcd->ye = $rcd->ye+$je;
	}elseif($fs=='xf'){
		$rcd->ye = $rcd->ye-$je;
		$rcd->jf = $rcd->jf+$je;
		$rcd->xf = $rcd->xf+$je;
	}elseif($fs=='jfa'){
		$rcd->jf = $rcd->jf+$je;
	}elseif($fs=='jfd'){
		$rcd->jf = $rcd->jf-$je;
	}
	$rcl->wid = Session::get('wid');
	$rcl->mid = $rcd->cid;
	$rcl->rid = $rcd->id;
	$rcl->wxid = $rcd->wxid;
	$rcl->fs = $fs;
	$rcl->je = $je;
	$rcl->mdid = $md;
	$rcl->stime = DB::raw('now()');
	$rcl->bz = $bz;
	$rcd->save();
	$rcl->save();
	Response::write('ok');
}

