<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <?php

  //  max_number($n1,$n2){
  //   $maximum = max($n1,$n2);
  //   return $maximum;
  //  }

   $a = 9;
   $b = 21;

   $num = max($a,$b);

   echo '$a = ' . $a . '<br>';
   echo '$b = ' . $b . '<br>';
   echo '$aと$bのうち最大値は' . $num . 'です。';
 
  ?>
</body>
</html>