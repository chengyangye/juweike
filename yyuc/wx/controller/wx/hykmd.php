<?php
$lbs = new Model('lbs');
$mdres = $lbs->where(array('wid'=>Session::get('wid'),'istag'=>'1'))->list_all();