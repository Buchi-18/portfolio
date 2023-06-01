<?php
class Database
{
  private static $instance;

  public static function getInstance()
  {
    try {
      //isset() 変数が宣言されていること、そして null とは異なることを検査する
      if (!isset(self::$instance)) {
        self::$instance = new PDO(
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
      }
      return self::$instance;
    } catch (PDOException $e) {
      echo 'DB_ERROR_接続に失敗しました: ' . $e->getMessage();
      exit;
    }
  }
}
