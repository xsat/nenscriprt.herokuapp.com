<?php

error_reporting(E_ALL);
ini_set('display_errors', 'on');

try {
    require_once __DIR__. '/../vendor/autoload.php';

    define('APP_DIR', __DIR__ . '/../app');
    define('VIEW_DIR', APP_DIR . '/views/');

    echo (new \Frontend\Application())->main();
} catch (Exception $e) {
    echo '<pre>', $e->getMessage(), "\n" , $e->getTraceAsString(), '</pre>';
}
