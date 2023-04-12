<?php
session_start();

require_once dirname(__FILE__).'/../../../_php_app/vendor/autoload.php';
$dotenv = Dotenv\Dotenv::createImmutable(__DIR__.'/../../../_php_app');
$dotenv->load();

// 定数の定義
define('HOST', $_ENV['HOST_NAME_TODOS']);
define('DB_NAME', $_ENV['DB_NAME_TODOS']);
define('DSN', 'mysql:host='.HOST.';dbname='.DB_NAME.';charset=utf8mb4');
define('DB_USER', $_ENV['DB_USER_TODOS']);
define('DB_PASS', $_ENV['DB_PASS_TODOS']);
define('PAGE_URL', (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off' ? "https://" : "http://").$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']);

// 関数読込
require_once(__DIR__.'/functions.php');

