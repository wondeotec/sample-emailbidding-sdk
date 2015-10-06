<?php

require_once __DIR__.'/vendor/autoload.php';

set_error_handler(function ($errno, $errstr, $errfile, $errline) {
    throw new ErrorException($errstr, $errno, $errno, $errfile, $errline);
});
