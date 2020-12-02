<?php
/* 
  PHPのオブジェクト指向
*/

/* 
  ｀概要｀
  クラス：設計図
  - メンバー変数
  - メソッド（関数）
  - コンストラクタ

  インスタンス：クラスを実体化したもの
  - 設計図を元に作成されたモノ
*/


// クラスの作成
class User
{
  public $name;
  public $email;

  // 初期化処理
  public function __construct($original_name, $original_email)
  {
    $this->name = $original_name;
    $this->email = $original_email;
  }

  public function sayHi()
  {
    echo "hi my name is " . $this->name;
  }
}

$top = new User("tom", "dummy@dummy.com");
$bob = new User("bob", "dummy@dummybob.com");

echo $top->name;
echo $top->sayHi();

echo $bob->name;
