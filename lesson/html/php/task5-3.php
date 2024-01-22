<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../css/reset.css">
  <link rel="stylesheet" href="../css/style_php.css">
  <title>PHP練習</title>
</head>
<body>
  <?php
  $a = array('商品' => '鉛筆', '価格' => '100円', '税込価格' => '110円');
  $b = array('商品' => '消しゴム', '価格' => '200円', '税込価格' => '220円');
  $c = array('商品' => '定規', '価格' => '300円', '税込価格' => '330円');

  echo '<table><tr>';

  foreach($a as $key => $name){
    echo '<th>' . $key . '</th>';
  }

  echo '</tr><tr>';

  foreach($a as $name){
    echo '<td>' . $name . '</td>';
  }

  echo '</tr><tr>';

  foreach($b as $name){
    echo '<td>' . $name . '</td>';
  }
  echo '</tr><tr>';

  foreach($c as $name){
    echo '<td>' . $name . '</td>';
  }

  echo '</tr></table>';

  ?>
  
</body>
</html>