<?php
/* 
  PHPのデータベースへの接続
  CRUDのUpdate
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

// updateの処理
$stmt = $dbh->prepare("update users set email = :email where name like :name");
// Nameのnから始まる値のEmailをDummyに変更
$stmt->execute(array(":email" => "dummy", ":name" => "n%")); // ％：nの後ろは任意

echo "done";

// 切断
$dbh = null;
