<?php
if(!Session::get('id')){
	//Redirect::index();
}
/* $user = new Model('user');
$user->find(Session::get('uid')); */
$un = Session::get('un');
$type = translate_agency_level(Session::get('adm'));