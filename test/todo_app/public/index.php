<!-- ************************* -->
<!-- My Todos test app -->
<!-- ************************* -->

<?php
define('DSN', 'mysql:host=localhost;dbname=todos_db;charset=utf8mb4');
define('DB_USER', 'root');
define('DB_PASS', 'root');

try {
    $pdo = new PDO(
        DSN,
        DB_USER,
        DB_PASS,
        [
          PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
          PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ,
          PDO::ATTR_EMULATE_PREPARES => false,
        ]
    );
} catch (PDOException $e) {
    echo $e->getMessage();
    exit;
}

function getTodos($pdo)
{
    $stmt = $pdo->query("SELECT * FROM todos ORDER BY id DESC");
    $todos = $stmt->fetchAll();
    return $todos;
}

$todos = getTodos($pdo);
var_dump($todos);
exit;

?>

<!DOCTYPE html>
<html lang="ja">

<head>
  <meta name="robots" content="noindex">
  <meta charset="utf-8">
  <link rel="stylesheet" href="../css/styles.css">
  <title>My Todos</title>
</head>

<body>
  <h1>Todos</h1>

  <ul>
    <li>
      <input type="checkbox">
      <span>Title</span>
    </li>
    <li>
      <input type="checkbox" checked>
      <span class="done">Title</span>
    </li>
    <li>
      <input type="checkbox">
      <span>Title</span>
    </li>
  </ul>
</body>

</html>