<?php

include_once './iNoty.php';
include_once './aNoty.php';
include_once './myNoty.php';

$myNoty = new myNoty;

echo $myNoty->polymorph_getVersion();