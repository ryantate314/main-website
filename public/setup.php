<?php

ini_set('display_errors', '1');
error_reporting(E_ALL);

#Get real path for root dir ---linux and windows
$here = dirname(dirname(__FILE__));
$here = ($h = realpath($here)) ? $h : $here;
define('ROOT_DIR',str_replace('\\', '/', $here.'/'));
unset($here); unset($h);

define('INCLUDE_DIR',     ROOT_DIR . 'include' . DIRECTORY_SEPARATOR);
//define('API_INCLUDE_DIR', INCLUDE_DIR . DIRECTORY_SEPARATOR . 'API' . DIRECTORY_SEPARATOR);
define('PUBLIC_DIR',      ROOT_DIR . 'public'  . DIRECTORY_SEPARATOR);
//define('DATA_DIR',        INCLUDE_DIR . 'data' . DIRECTORY_SEPARATOR);

define("APPLICATION_NAME", "Ryan Tate");