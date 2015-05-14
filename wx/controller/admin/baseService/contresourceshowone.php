<?php
$res = new Model('res');
$res->find(Request::get(1));
$l = $res;
$sel = true;