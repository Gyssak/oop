<?php

if(PHP_MAJOR_VERSION < 8) {
    die("This program requires at least 8 major versions.");
}
require_once __DIR__.'/../config/init.php';
require_once ROOT . '/vendor/autoload.php';

dump($_SERVER);
echo "hello !";

$app = new \PHPFramework\Application();

