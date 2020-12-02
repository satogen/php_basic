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
$sql = 'select * from users'; // すべてのデータを取得
$stmt = $dbh->query($sql); // mysqlを実行

// fetchAll でデータの取り出し
// ASSOC：連想配列で取り出し
foreach ($stmt->fetchAll(PDO::FETCH_ASSOC) as $user) {
  var_dump($user['name']);
}

// 実行結果の値を取り出し
echo $dbh->query("select count(*) from users")->fetchColumn() . "records count";

// 切断
$dbh = null;
