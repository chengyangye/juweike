<?php
$wid = Session::get('wid');
/*
$m = new Model("micro_wall_content");
$s = $m->where(array("wid"=>$wid))->list_all();
$s1 = "[";
foreach( (array)$s as $b)
{
$s2 = "{\"id\":\"".$b->id."\",\"wxid\":\"".$b->wxid."\",\"content\":\"".$b->content."\",\"check\":\"".$b->check."\",\"time\":\"".$b->time."\"}";
$s1.=$s2.",";
}
echo substr($s1,0,-1)."]";
 */
require_once  YYUC_FRAME_PATH.'conf.php';
				$pdobj = new PDO('mysql:host='.conf::$db_host.';port='.conf::$db_port.';dbname='.conf::$db_dbname.';charset=utf8',conf::$db_username,conf::$db_password,array(PDO::MYSQL_ATTR_INIT_COMMAND => "set names utf8"));
				$pdobj->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
 echo $pdobj;
$last_id = (int)$_GET['last_id'];
if(!$last_id && $m->show_last) $ttt = ' limit 0,20';	
        $q = 'select * from `micro_wall_content` where `wid` = '.$wid.' and `id` > ? and `check` > 0 order by `id` desc'.$ttt;
        $stmt = $pdobj->prepare($q);
        $stmt->execute(array($last_id));
        $row = $stmt->fetchAll(PDO::FETCH_ASSOC);
        $arr = array();
        foreach((array)$row as $b){
            /*$r['content'] = htmlspecialchars($r['content'],ENT_QUOTES);
            $temp = shorturl($r['wxid']);
            $r['wxid'] = $temp[0];
            $arr[] = $r;*/
			$arr[] = $b;
        }
        echo json_encode($arr);
