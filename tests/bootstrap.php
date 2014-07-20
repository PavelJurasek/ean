<?php

chdir(__DIR__ . DIRECTORY_SEPARATOR . '..');

$loader = require 'vendor/autoload.php';
$loader->add('Ean\\Test\\', __DIR__ . DIRECTORY_SEPARATOR . 'tests');
