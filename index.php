<?php

error_reporting(E_ALL & ~E_NOTICE);
ini_set('display_errors', 'on');

require_once('bootstrap.php');

$fc = new PHPCI\Application();
print $fc->handleRequest();