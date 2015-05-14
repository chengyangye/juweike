<?php
$qjid = Request::get(1);
$qj = new Model('micro_car_chexing_full_view');
$qj->find($qjid);