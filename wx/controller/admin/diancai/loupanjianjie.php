<?php
$m = new Model('micro_diancai_set');
$m->find(array('wid'=>Session::get('wid')));
$linkurl = Conf::$http_path.'dc/index-'.Session::get('wid').'.html?wxid=123';

if(!$m->has_id())
{
	$m->xiangmu = '[{"type":"text","name":"店铺状态","holder":"营业中","issys":"0"},{"type":"text","name":"店铺分类","holder":"小吃快餐","issys":"0"},{"type":"text","name":"营业时间","holder":"0:00-23:55","issys":"0"},{"type":"text","name":"服务半径","holder":"3公里","issys":"0"},{"type":"text","name":"配送区域","holder":"333","issys":"0"}]';

}
if($m->try_post()){
	$m->wid = Session::get('wid');
	$m->save();
	tusi('保存成功');
}