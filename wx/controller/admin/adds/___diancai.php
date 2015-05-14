<?php
$u = new Model('user');
$u->find(Session::get('uid'));
$url = '/admin3/index.php?g=User&m=Dining&a=orders&dining=1&wxgjuid='.Session::get('uid').'&wxgjpwd='.md5($u->pwd).'&token='.md5(Session::get('wid'));
Redirect::to($url);
