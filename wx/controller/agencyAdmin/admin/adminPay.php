<?php
/*
 *  @desc 管理员为代理用户充值操作
 *   */

$user = new Model('user_agency');
$where="isadmin<>1";
$p = new Pagination();
$res = $p->model_list($user->where($where)->order('id desc'));