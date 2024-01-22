<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../css/style_php.css">
  <title>Document</title>
</head>
<body>
  <?php
  for ($i = 1; $i <= 9; $i++){
    for($j = 1; $j <= 9; $j++){
      echo '<div class="box99">' . $i . ' × ' . $j . ' = ' . $i * $j .  '　</div>';
    }
    echo '<br>';
  }
  ?>
</body>
</html>