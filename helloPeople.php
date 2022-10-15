<?php

require_once __DIR__ . '/vendor/autoload.php';

use taufiq\data\People;

$people = new People("taufiq");
echo $people->sayHello("rahma");
