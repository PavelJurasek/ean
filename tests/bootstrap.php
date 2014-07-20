<?php

/**
 * autoloader
 */
spl_autoload_register(function($className) {
	$classpath = str_replace('\\', DIRECTORY_SEPARATOR, $className);

	// rozpoznajemy, czy test
    if ('Test' === substr($className, -4)) {
        $filename = __DIR__ . DIRECTORY_SEPARATOR . $classpath . '.php';
    } else {
        $filename = __DIR__ . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . 'src' . DIRECTORY_SEPARATOR . $classpath . '.php';
    }

    if (file_exists($filename)) {
        require_once $filename;
    }
});