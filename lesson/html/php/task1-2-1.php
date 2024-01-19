<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP練習</title>
</head>
<body>
  <?php
  $tax = "現在、消費税は10％です。";
  $pencil = "鉛筆が100円で税込110円です";
  $eraser = "消しゴムが200円で税込220円です";
  ?>
  <p><?= $tax ?></p>
  <p><?= $pencil ?></p>
  <p><?= $eraser ?></p>
</body>
</html>