<?php
/* 
  PHPのデータベースへの接続
  CRUDのReadの処理
*/

// データベースの接続
// MySQL
try {
  // データベースに接続
  $dbh = new PDO('mysql:host=localhost;dbname=blog_app', 'root', '');
} catch (PDOException $e) {
  // エラーメッセージを表示
  var_dump($e->getMessage());
  // プログラム終了
  exit;
}

// 処理
// prepare関数でエスケープ処理
$stmt = $dbh->prepare("insert into users(name, email, password) values(:name, :email, :password)"); // すべてのデータを取得

$stmt->execute(array("name" => "e", "email" => "fafa", "password" => "p")); // mysqlを実行

echo "done";

// 切断
$dbh = null;
