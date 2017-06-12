<?php
ini_set("display_errors", 1);
error_reporting(E_ALL);

header('Content-type: text/html; charset=UTF-8');
define('VIEW', __DIR__ . '/views/');
require_once 'lib/config.php';
require_once 'lib/small.php';
start();
