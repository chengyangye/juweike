<?php
$m = new Model('heka');
$s = $m->find(array('id' => Request::get(1)));
