<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP練習</title>
</head>
<body>
  <ul>
  <?php
    $a = array('月曜日','火曜日','水曜日','木曜日','金曜日','土曜日','日曜日');
    $i = 0;

    while ($i < 7){
      echo '<li>' . $a[$i] . '</li>';
      $i++;
    }
  ?>
  </ul>

</body>
</html>