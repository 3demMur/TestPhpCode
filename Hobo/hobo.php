<?php

include "Hobos/Hobo.php";

$new_hobo = new TrashHobo();
$new_hobo->giveAdvice();
$new_hobo->smell();
$new_hobo->setFire();



var_dump($new_hobo);
