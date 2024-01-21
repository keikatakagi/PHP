<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <?php
    $a = mt_rand(1, 12);

    switch ($a) {
      case $a === 3 || $a === 4 || $a === 5 :
      $judge = '春';
      break;
      case $a === 6 || $a === 7 || $a === 8 :
      $judge = '夏';
      break;
      case $a === 9 || $a === 10 || $a === 11 :
      $judge = '秋';
      break;
      default: $judge = '冬';
    }
  ?>

  <h1><?= $a; ?>月は<?= $judge; ?>の季節です。</h1>
  
</body>
</html>