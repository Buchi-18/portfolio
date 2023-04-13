<?php
// ******************************
// My Todos test app
// ******************************
require_once(__DIR__.'/../app/config.php');

use MyApp\Database;
use MyApp\Todo;
use MyApp\Utils;

$pdo = Database::getInstance();

$todo = new Todo($pdo);
$todo->processPost();
$todos = $todo->getAll();
?>

<!DOCTYPE html>
<html lang="ja">

<head>
  <meta name="robots" content="noindex">
  <meta charset="utf-8">
  <link rel="stylesheet" href="./css/styles.css">
  <title>My Todos</title>
</head>

<body>
  <main>
    <header>
    <h1>Todos</h1>
      <!-- CHECKED ALL DELETE -->
      <form action="?action=purge" method="post">
        <span class="purge">Purge</span>
        <input type="hidden" name="token"
          value="<?= Utils::h($_SESSION['token']); ?>">
      </form> 
    </header>

    <form action="?action=add" method="post">
      <input type="text" name="title" placeholder="Type new todo.">
      <input type="hidden" name="token"
        value="<?= Utils::h($_SESSION['token']); ?>">
    </form>

    <ul>
      <?php foreach ($todos as $todo): ?>
      <li>
        <!-- チェックボックス -->
        <form action="?action=toggle" method="post">
          <input type="checkbox"
            <?= $todo->is_done ? 'checked' : ''; ?>>
          <input type="hidden" name="id" value="<?= Utils::h($todo->id); ?>">
          <input type="hidden" name="token"
            value="<?= Utils::h($_SESSION['token']); ?>">
        </form>

        <!-- TODO タイトル -->
        <span
          class="<?= $todo->is_done ? 'done' : ''; ?>">
          <?= Utils::h($todo->title); ?>
        </span>

        <!-- DELETE ボタン -->
        <form action="?action=delete" method="post" class="delete-form">
          <span class="delete">×</span>
          <input type="hidden" name="id" value="<?= Utils::h($todo->id); ?>">
          <input type="hidden" name="token"
            value="<?= Utils::h($_SESSION['token']); ?>">
        </form>

      </li>
      <?php endforeach;?>
    </ul>
  </main>

  <script src="js/main.js"></script>
</body>

</html>