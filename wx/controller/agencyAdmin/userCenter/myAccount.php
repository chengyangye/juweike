<?php
/**
 *    @desc 我的账户信息
 * */
$user = new Model('user_agency');
$user->find(Session::get('id'));