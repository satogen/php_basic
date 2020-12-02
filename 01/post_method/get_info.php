<?php
$birthday = $_POST['birthday'];
// $birthday = $_GET['birthday'];

// date -> 第一引数が何を表示するか？第２引数が対象の値
// strtotime -> 文字列を時間にする, 1970年からの秒数に変換
// computerがUnixタイムスタンプでやっているのでstrtotimeを用いる
$youbi = date("l", strtotime($birthday));

//下記の関数を用いるとHTMLをエスケープしてくれる
// htmlspecialchars()

//get 方式のいいところ、URLの共有で簡単に共有可能。。。検索など
// 一方削除などは向いていない。


?>
<!DOCTYPE html>
<html lang="jp">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Post</title>
</head>

<body>
  <h1>PHPの練習</h1>
  <?php echo $youbi ?>
</body>

</html>