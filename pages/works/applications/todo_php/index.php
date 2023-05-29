<?php
require_once(__DIR__ . '/app/config.php');

try {
  $dbh = new PDO(
    DSN,
    DB_USER,
    DB_PASS,
    [
      // PDOException をスローする
      PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
      //結果セットに返された際のカラム名と同名のプロパティを有する 匿名のオブジェクトを返す
      PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ,
      //プリペアドステートメントのエミュレーションを有効または無効のする
      PDO::ATTR_EMULATE_PREPARES => false,
    ]
  );
} catch (PDOException $e) {
  echo 'DB接続エラー！: ' . $e->getMessage();
  exit;
}


// データベースの取得
$pdo = $dbh;
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
      <li>
        <input type="checkbox">
        <span><?= $todo->title ?></span>
        <span class="delete">×</span>
      </li>
    <?php endforeach ?>
  </ul>

  <script src="todo.js"></script>

</body>

</html>