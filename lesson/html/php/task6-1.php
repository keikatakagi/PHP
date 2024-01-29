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
    for($i = 1; $i <= $num; $i++){
      echo $str . '<br>';
    }
  }

  $a = 3;
  $b = '気合いだ！';

  showString($a, $b);

?>
</body>
</html>