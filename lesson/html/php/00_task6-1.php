<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <?php
  $num = 3;
  $str = '気合いだ！';
  function showString ($num, $str){
    if($num <= 3){
      echo $str;
      $num--;
    }

  }
  ?>
</body>
</html>