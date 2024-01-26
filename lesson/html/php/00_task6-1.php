<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <?php
  function showString ($num, $str){
    if($num <= 3){
      echo $str;
      return $num--;
    }
  }

  $a = 3;
  $b = '気合いだ！';

  $c = showString($a, $b);

  echo $a;

  ?>
</body>
</html>