<?php
session_start();

require_once dirname(__FILE__) . '/../../../../../_php_app/vendor/autoload.php';
$dotenv = Dotenv\Dotenv::createImmutable(__DIR__ . '/../../../../../_php_app');
$dotenv->load();

// 定数の定義
define('HOST', $_ENV['HOST_NAME_TODOS']);
define('DB_NAME', $_ENV['DB_NAME_TODOS']);
define('DSN', 'mysql:host=' . HOST . ';dbname=' . DB_NAME . ';charset=utf8mb4');
define('DB_USER', $_ENV['DB_USER_TODOS']);
define('DB_PASS', $_ENV['DB_PASS_TODOS']);

// オートロードクラス
spl_autoload_register(function ($class_name) {
  $prefix = "MyApp\\";

  if (strpos($class_name, $prefix) === 0) {

    $file_name = sprintf(__DIR__ . '/classes' . '/%s.php', substr($class_name, strlen($prefix)));

    if (file_exists($file_name)) {
      require($file_name);
    } else {
      echo 'File not found: ' . $file_name;
      exit;
    }
  }
});
