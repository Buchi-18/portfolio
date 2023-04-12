<?php
// My Todos test app
require dirname(__FILE__).'/../../../_php_app/vendor/autoload.php';
$dotenv = Dotenv\Dotenv::createImmutable(__DIR__. '/../../../_php_app');
$dotenv->load();

// 定数の定義
define('HOST', $_ENV['HOST_NAME_TODOS']);
define('DB_NAME', $_ENV['DB_NAME_TODOS']);
define('DSN', 'mysql:host='.HOST.';dbname='.DB_NAME.';charset=utf8mb4');
define('DB_USER', $_ENV['DB_USER_TODOS']);
define('DB_PASS', $_ENV['DB_PASS_TODOS']);

// 変数の定義
$page_url = (((!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off')) ? "https://" : "http://").$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];

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

function h($str)
{
    return htmlspecialchars($str, ENT_QUOTES, 'UTF-8');
}

function addTodo($pdo)
{
    $title = trim(filter_input(INPUT_POST, 'title'));
    if($title === '') {
        return;
    }

    $stmt = $pdo->prepare("INSERT INTO todos (title) VALUE(:title)");
    $stmt->bindValue('title', $title, PDO::PARAM_STR);
    $stmt->execute();
}

function getTodos($pdo)
{
    $stmt = $pdo->query("SELECT * FROM todos ORDER BY id DESC");
    $todos = $stmt->fetchAll();
    return $todos;
}

if($_SERVER['REQUEST_METHOD'] === "POST") {
    addTodo($pdo);
    header('Location: '.$page_url);
    exit;
}
$todos = getTodos($pdo);
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

  <form action="" method="post">
    <input type="text" name="title" placeholder="Type new todo.">
  </form>

  <ul>
    <?php foreach ($todos as $todo): ?>
    <li>
      <input type="checkbox"
        <?= $todo->is_done ? 'checked' : ''; ?>>
      <span
        class="<?= $todo->is_done ? 'done' : ''; ?>">
        <?= h($todo->title); ?>
      </span>
    </li>
    <?php endforeach;?>
  </ul>
</body>

</html>