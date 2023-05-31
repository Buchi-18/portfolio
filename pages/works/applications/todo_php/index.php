<?php
require_once(__DIR__ . '/app/config.php');
require_once(__DIR__ . '/app/classes/Database.php');
require_once(__DIR__ . '/app/classes/Utils.php');

// データベースの取得
$pdo = Database::getInstance();


if ($_SERVER['REQUEST_METHOD'] === "POST") {
  $action = filter_input(INPUT_GET, 'action');

  switch ($action) {
    case 'add':
      // todo.jsで送信したbodyの中身を取得
      $title = trim(filter_input(INPUT_POST, 'fetchBodyTitle'));

      $stmt = $pdo->prepare("INSERT INTO todos (title) VALUE (:title)");
      $stmt->bindValue(':title', $title, PDO::PARAM_STR);
      $stmt->execute();

      // PHPスクリプトからのレスポンスがJSON形式であることを明示
      header('Content-Type: application/json');
      //キャスト演算子 (int) で整数型へ変換
      echo json_encode([
        'id' => (int) $pdo->lastInsertId()
      ]);
      exit;
      break;
    case 'toggle':
      break;
    case 'delete':
      $id = filter_input(INPUT_POST, 'fetchBodyId');
      if (empty($id)) return;

      $stmt = $pdo->prepare("DELETE FROM todos WHERE id = :id");
      $stmt->bindValue(':id', $id, PDO::PARAM_INT);
      $stmt->execute();

      break;

    default:
      exit;
  }
}

$stmt = $pdo->query("SELECT * FROM todos ORDER BY id DESC");
$todos = $stmt->fetchAll();




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
        <input type="checkbox" <?= $todo->is_done ? 'checked' : ''; ?>>
        <span><?= Utils::h($todo->title); ?></span>
        <span class="delete">×</span>
      </li>
    <?php endforeach ?>
  </ul>

  <script src="js/todo.js"></script>

</body>

</html>