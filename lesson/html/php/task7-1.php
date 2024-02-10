<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
<?php
  ini_set('display_errors', 1);
  
  class Staff{
    private $name;
    private $age;
    private $sex;
    private static $id = 0;

    public function __construct($name, $age, $sex){
      $this -> name = $name;
      $this -> age = $age;
      $this -> sex = $sex;
    }
    public function number(){
      self::$id++;
    }
    public function show(){
      printf('(S%04d) %s %s歳 %s性<br>', self::$id, $this -> name, $this -> age, $this -> sex);
    }
  }

  $staff = [];
  $staff[] = new Staff('佐藤 一郎', '31', '男');
  $staff[] = new Staff('山田 花子', '25', '女');
  $staff[] = new Staff('鈴木 次郎', '27', '男');

  foreach($staff as $result){
    $result->number();
    $result->show();
  }
  
  ?>
</body>
</html>