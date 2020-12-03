<?php

//----------------------------------------------------------------------
// Bootstrap the application:
//----------------------------------------------------------------------
$app_root = dirname(__FILE__);
$rev = trim(file_get_contents("$app_root/active_revision.txt"));

define('REV', "r$rev");
define('PHP_ROOT', "$app_root/webcode/r$rev");

require PHP_ROOT . '/application.php';

//----------------------------------------------------------------------
// Configure for LOCAL ENVIRONMENT:
//----------------------------------------------------------------------
date_default_timezone_set('Canada/Eastern');
ini_set('display_errors',TRUE);
ini_set('error_reporting',E_ALL);

G::$EnvType	= 'prod';
G::$cache = false;

//----------------------------------------------------------------------
// Handle the Request:
//----------------------------------------------------------------------
app_dispatcher();
