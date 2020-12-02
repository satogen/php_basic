<?php
// cookieブラウザに保存
//ブラウザに保存し、呼び出す

// setcookieで保存する, 第三引数に保存時間を指定している秒で指定
// 第三引数に値を指定しない場合、ブラウザを閉じるとクッキーがなくなる。

// setcookie("username", 'fujita', time()+60*60*24*14);
// setcookie("username", 'fujita', time()-);
echo $_COOKIE['username'];
