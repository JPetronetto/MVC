<?php

define('WWW_ROOT', dirname(__FILE__));
define('DS', DIRECTORY_SEPARATOR);

require_once(WWW_ROOT . DS . 'autoload.php');

$foo = new Classes\Foo();
$bar = new Classes\Bar();
$db = new Classes\Database\Database();

