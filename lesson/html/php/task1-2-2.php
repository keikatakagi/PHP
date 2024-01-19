<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP練習</title>
</head>
<body>
  <?php
  $tax = 1.1;
  $product01 = "鉛筆";
  $product02 = "消しゴム";
  $price01 = 100;
  $price02 = 200;
  ?>
<p> <?= "現在、消費税は10%です。" ?> </p>
<p> <?= $product01 ?>が<?= $price01?>円で税込<?= $price01 * $tax ?>円です。</p>
<p> <?= $product02 ?>が<?= $price02?>円で税込<?= $price02 * $tax ?>円です。</p>
</body>
</html>