<?php
/* 
  PHPのデータベースへの接続
  CRUDのDelete
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

// deleteの処理
$stmt = $dbh->prepare("delete from users where password = :password");
// p10の値を削除
$stmt->execute(array(":password" => "p10"));

// 削除したレコード数の確認
echo $stmt->rowCount() . "records deleted";

echo "done";

// 切断
$dbh = null;
