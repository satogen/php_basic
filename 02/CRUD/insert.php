<?php
/* 
  PHPのデータベースへの接続
  CRUDのInsertの処理
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


/* 
  prepare関数でエスケープ処理
  prepareの記述パターン
*/
// pattern1
// $stmt = $dbh->prepare("insert into users(name, email, password) values(?, ?, ?)"); // データの挿入

// pattern2
$stmt = $dbh->prepare("insert into users(name, email, password) values(:name, :email, :password)"); // データの挿入


/* 
  prepare関数でのSQL実行
  実行の記述パターン
*/
// pattern1
// $stmt->execute(array("name" => "e", "email" => "fafa", "password" => "p")); // mysqlを実行

// pattern2
$stmt->bindParam(":name", $name);
$stmt->bindParam(":email", $email);
$stmt->bindParam(":password", $password);

$name = "n10";
$email = "e10";
$password = "p10";

// excute一回に付き、一回実行
$stmt->execute();

// IDを表示
echo $dbh->lastInsertId();

echo "done";

// 切断
$dbh = null;
