<?php
// セッション （サーバ側にデータを保存する）
// サーバの保持されているので、他ファイルでも確認することができる。

// セッションを開始
session_start();

// セッションに値を挿入
// $_SESSION['userName'] = 'taguchi';
$_SESSION['userName'] = 'test';

// セッションを表示
echo $_SESSION['userName'];
