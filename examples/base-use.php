<?php

chdir(__DIR__ . DIRECTORY_SEPARATOR . '..');
require 'vendor/autoload.php';

// constructor
$ean1 = new \Ean\Ean('34958214');

// setter
$ean2 = new \Ean\Ean;
$ean2->setEan('34958214');

