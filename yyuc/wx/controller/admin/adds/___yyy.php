<?php
$u = new Model('user');
$u->find(Session::get('uid'));
$url = '/admin2/index.php?g=User&m=Shake&a=index&wxgjuid='.Session::get('uid').'&wxgjpwd='.md5($u->pwd).'&token='.(Session::get('wid'));
Redirect::to($url);