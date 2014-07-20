<?php

chdir(__DIR__ . DIRECTORY_SEPARATOR . '..');
require 'vendor/autoload.php';

// constructor
$generator = new \Ean\Generator;
print $generator->generate(5, 8);
print $generator->generate(5, 13);

