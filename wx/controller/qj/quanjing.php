<?php
$qid = Request::get(1);
	$full_view = new Model('360_full_view');
	$full_view->find(array('id'=>Request::get(1)));