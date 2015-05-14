<?php
/**
 *   @desc 代理的用户
 * */

$user = new Model('user');

$p = new Pagination();

$res = $p->model_list($user->order('id desc'));
