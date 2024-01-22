<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../css/style_php.css">
  <title>Document</title>
</head>
<body>
  <table class="task5">

  <?php

  for ($i = 1; $i <= 9; $i++){
    echo '<tr class="task5">';
    for($j = 1; $j <= 9; $j++){
      echo '<td class="task5">' . $i . ' × ' . $j . ' = ' . $i * $j .  '</td>';
    }
    echo '</tr>';
  }

  // 質問メモ　divで括ってCSSで調整しているが他にやり方があるか　→tableを使う
  ?>

  </table>
</body>
</html>