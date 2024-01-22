<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../css/style_php.css">
  <title>PHP基礎知識</title>
</head>
<body>

  <div class="lesson05">
    <?php
    for ($i = 0; $i <= 3; $i++){
      echo '外側のループで$iの値は、' . $i . 'です。<br>';
      if ($i === 1) {continue;}
      for ($j = 0; $j <= 3; $j++){
        if ($i === 2 && $j === 2) {continue;}
        echo '　内側のループで$jの値は、' . $j . 'です。<br>';
      }
    }
    echo '<br>';
    $a = 0;
    $b = 5;

    while ($a < $b){
      if ($a === 2) {break;}
      echo '$aの値は' . $a . 'です。<br>';
      $a++;
    }
    echo '<br>';
    $c = 0;

    do{
      // if ($c === 3) {break;}
      echo '$cの値は' . $c . 'です。<br>';
      $c++;
      if ($c === 3) {continue;}
      echo '$cの値は' . $c . 'です。<br>';
    } while ($c < $b)

    ?>
    <br>
    <?php
      $week = [mon => '月', tue => '火', wed => '水', thu => '木', fri => '金'];

      foreach ($week as $name){
        // if ($name == '水') {continue;}
        echo $name . '曜日<br>';
      }

      foreach ($week as $key => $name){
        // if ($key == 'wed') {break;}
        echo $key . 'は、' . $name . '曜日です。<br>';
      }
    ?>
  </div>

  <div class="lesson04">
    <?php
      $message = '条件分岐';

      // $a = 100;
      $a = mt_rand(0, 100);
      // if ($a === 100) {
      //   $judge = "$a Perfect!";
      // } elseif ($a >= 80) {
      //   $judge = "$a よくできました";
      // } elseif ($a >= 60) {
      //   $judge = "$a 合格";
      // } else {
      //   $judge = $a . '点です';
      // }

    if ($a%2 === 0){
      if ($a%3 === 0){
        $judge = $a . 'は６の倍数です';
      } else {
        $judge = $a . 'は偶数です';
      }
    } else {
      $judge = $a . 'は奇数です';
    }

    if ($a%2 === 0 && $a%3 === 0){
      $judge2 = $a . 'は６の倍数です';
    } elseif ($a%2 === 0){
      $judge2 = $a . 'は偶数です';
    } else {
      $judge2 = $a . 'は奇数です';
    }

    $judge3 = ($a%2 === 0) ? $a . 'は偶数です' : $a . 'は奇数です';

    switch ($a) {
      case $a === 100 :
        $judge4 = "$a Perfect!";
        break;
      case $a >= 80 :
        $judge4 = "$a よくできました!";
        break;
      case $a >= 60 :
        $judge4 = "$a 合格!";
        break;    
        default: $judge4 = $a . '点でした';
    }
    ?>

    <p><?= $judge; ?></p>
    <p><?= $judge2; ?></p>
    <p><?= $judge3; ?></p>
    <p><?= $judge4; ?></p>
  </div>

  <div class="lesson03">
    <?php
    define('TITLE','Hello PHP World!');
    $message = '演算子とは';
    $a = 0;
    ?>

    <p> <?= $message ?> </p>

    <p>
      <?php
      $b = ++$a;
      echo $a . '<br>';
      echo $b . '<br>';

      $a = 0;
      $b = $a++;
      echo $a . '<br>';
      echo $b . '<br>';
      ?>
    </p>
  </div>

  <div class="lesson02">
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
  </div>

</body>
</html>