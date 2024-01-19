<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP基礎知識</title>
</head>
<body>

  <?php
  $message = "今日の日付：" . date('Y/m/d');
  define('TITLE','配列とは');
  $a = array('田中', 100, 'OK');
  $b = ['中田', 55, 'NG'];
  $a[] = 200;
  $a[total] = 300;
  array_push($a, 400, 500);
  unset($a[2]);
  unset($a[total]);
?>

  <h1>Hello PHP World!</h1>

  <p> <?= $message ?> </p>
  <p> <?= TITLE ?> </p>
  <p>
    <?php print_r ($a);?><br>
    <?php print_r ($b);?><br>
    <?php echo $a[0];?><br>
    <?php echo $b[1];?>
</p>

</body>
</html>