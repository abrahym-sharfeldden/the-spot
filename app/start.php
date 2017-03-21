<?php

ini_set('display_errors', 'On');

define('APP_ROOT', __DIR__);
define('VIEW_ROOT', APP_ROOT . '/views');
define('BASE_URL', 'http://localhost:8888/the-spot');

$db = new PDO('mysql:host=127.0.0.1;dbname=the_spot','admin', 'password');

require 'functions.php';
?>