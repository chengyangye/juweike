<?php
if(Request::get(1) == "1")
{
$url = '/admin2/index.php?g=User&m=Product&a=cats&dining=1&wxgjuid='.Session::get('uid').'&wxgjpwd='.md5($u->pwd).'&token='.(Session::get('wid'))."&dining=1";
}elseif(Request::get(1) == "2"){
$url = '/admin2/index.php?g=User&m=Product&a=index&dining=1&wxgjuid='.Session::get('uid').'&wxgjpwd='.md5($u->pwd).'&token='.(Session::get('wid'))."&dining=1";
}elseif(Request::get(1) == "3"){
$url = '/admin2/index.php?g=User&m=Product&a=tables&dining=1&wxgjuid='.Session::get('uid').'&wxgjpwd='.md5($u->pwd).'&token='.(Session::get('wid'))."&dining=1";
}elseif(Request::get(1) == "4"){
$url = '/admin2/index.php?g=User&m=Product&a=orders&dining=1&wxgjuid='.Session::get('uid').'&wxgjpwd='.md5($u->pwd).'&token='.(Session::get('wid'))."&dining=1";
}
$u = new Model('user');
$u->find(Session::get('uid'));
Redirect::to($url);