<?php

chdir(__DIR__ . DIRECTORY_SEPARATOR . '..');
require 'vendor/autoload.php';

$validator = new \Ean\Validator;
print (int) $validator->isValid('34958214');

