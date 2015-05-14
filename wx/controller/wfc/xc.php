<?php
if(Request::get('wxid')){
	Session::set('wxid',Request::get('wxid'));
}
if(Request::get('wid')){
	Session::set('wid',Request::get('wid'));
}
if(Session::has('wxid') && Session::has('wid')){
	if(Request::get(1)=='getpic'){
		$set = new Model('micro_estate_album');
		$xcres = $set->where(array('wid'=>Session::get('wid')))->order('sort desc,id')->list_all();
		$resdata = array();
		foreach($xcres as $xc) {
			$pics = json_decode($xc->pic,true);
			//图片数量
			$picnum = count($pics);
			//每行数量
			$mhsl = intval(($picnum)/2);
		
			$xmdata = array();
			$xmdata['title'] = $xc->name;
		
			//第一行
			$line1data = array();
			$line1data[] = array('type'=>'title','title'=>$xc->name,'subTitle'=>$xc->name);
			for($i=0;$i<$mhsl;$i++){
				$pic = $pics[$i];
				$line1data[] = array('type'=>'img','name'=>$pic['txt'],'img'=>Conf::$http_path.$pic['src'],'size'=>array($pic['w'],$pic['h']));
			}
			//第二行
			$line2data = array();
			if(isset($pics[$mhsl])){
				$pic = $pics[$mhsl];
				$line2data[] = array('type'=>'img','name'=>$pic['txt'],'img'=>Conf::$http_path.$pic['src'],'size'=>array($pic['w'],$pic['h']));
			}
			$line2data[] = array('type'=>'text','content'=>$xc->jianjie);
			for($i=$mhsl+1;$i<$picnum;$i++){
				$pic = $pics[$i];
				$line2data[] = array('type'=>'img','name'=>$pic['txt'],'img'=>Conf::$http_path.$pic['src'],'size'=>array($pic['w'],$pic['h']));
			}
			$xmdata['ps1'] = $line1data;
			$xmdata['ps2'] = $line2data;
			$resdata[] = $xmdata;
		}
		Response::json($resdata);
	}
	
}else{
	die();
}
