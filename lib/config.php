<?php
/**
 * TODO: Configura la aplicación en base a tus necesidades
 */
define('WEB_PATH', 'neoshop-public-master/');
define('ENDPOINT_URL', 'http://localhost/neoshop-public-master/api/');
define('PROTOCOL', 'http');

define('BASE', PROTOCOL . '://' . $_SERVER['HTTP_HOST'] . '/' . WEB_PATH);

include_once "functions.php";
