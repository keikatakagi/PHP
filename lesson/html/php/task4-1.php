<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <?php
    $a = mt_rand(0, 99);
    if ($a < 5){
      $judge = '大凶';
    } elseif ($a < 20) {
      $judge = '凶';
    } elseif ($a < 50){
      $judge = '吉';
    } elseif ($a < 80){
      $judge = '中吉';
    } else {
      $judge = '大吉';
    }

    // 質問メモ　 if ( 20 <= $a < 50 ){～　のように、変数を挟む処理はできない
    // $a >= 20 && $a <= 50 
  ?>

  <h1>今日の運勢は”<?= $judge; ?>”です</h1>
</body>
</html>