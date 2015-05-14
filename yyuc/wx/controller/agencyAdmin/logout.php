<?php
/*
 *   @desc 用户退出
 * */
Session::remove('mu');
Session::remove('id');
Session::remove('un');
Cookie::remove('sys_autologin');
Redirect::to("/agencyAdmin/login");