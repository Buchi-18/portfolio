<?php
// ******************************
// My Todos test app
// ******************************
require_once(__DIR__ . '/../app/config.php');

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
  <main data-token="<?= Utils::h($_SESSION['token']); ?>">
    <header>
      <h1>Todos</h1>
      <!-- CHECKED ALL DELETE -->
      <span class="purge">
        Purge
      </span>
    </header>

    <form>
      <input type="text" name="title" placeholder="Type new todo.">
    </form>

    <ul>
      <?php foreach ($todos as $todo) : ?>
        <li data-id="<?= Utils::h($todo->id); ?>">
          <!-- チェックボックス -->
          <input type="checkbox" <?= $todo->is_done ? 'checked' : ''; ?>>
          <!-- TODO タイトル -->
          <span><?= Utils::h($todo->title); ?></span>
          <!--  DELETE ボタン -->
          <span class="delete">×</span>
        </li>
      <?php endforeach; ?>
    </ul>
  </main>

  <script src="js/main.js"></script>
</body>

</html>