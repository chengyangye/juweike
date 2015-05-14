<?php
$m = new Model('heka');
foreach($_GET as $a => $b)
{
$m->$a = $b;
}
$m->save();
echo $m->id;