<?php
// ini_set('display_errors', 'on');
require_once(__DIR__ . '/app/config.php');
require_once(__DIR__ . '/app/classes/Todo.php');

use MyApp\Database;
use MyApp\Utils;

// データベースの取得
$pdo = Database::getInstance();
// Todoクラスのインスタンス取得
$todo = new \Todo($pdo);
//POSTが送信された時の処理
$todo->processPost();
//todoを全て取得
$todos = $todo->getAll();
?>

<!DOCTYPE html>
<html lang="ja">

<head>
  <meta name="robots" content="noindex">
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./css/todo.css">
  <title>Todo app</title>
</head>

<body>

  <main data-token="<?= Utils::h($_SESSION['token']); ?>">
    <header>
      <h1>Todos</h1>
      <!-- CHECKED ALL DELETE -->
      <span class="purge">
        Delete all checked
      </span>
    </header>

    <form>
      <input type="text" name="title" placeholder="Type new todo.">
    </form>

    <ul>
      <?php foreach ($todos as $todo) : ?>
        <li data-id="<?= Utils::h($todo->id); ?>">
          <input type="checkbox" name="checkbox" <?= $todo->is_done ? 'checked' : ''; ?>>
          <span><?= Utils::h($todo->title); ?></span>
          <span class="delete">×</span>
        </li>
      <?php endforeach ?>
    </ul>

  </main>

  <script src="js/todo.js"></script>

</body>

</html>