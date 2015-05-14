<?php
$u = new Model('user');
$u->find(Session::get('uid'));
$url = '/admin2/index.php?g=User&m=Alipay_config&a=index&dining=1&wxgjuid='.Session::get('uid').'&wxgjpwd='.md5($u->pwd).'&token='.(Session::get('wid'));
Redirect::to($url);