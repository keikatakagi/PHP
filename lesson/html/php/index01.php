<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP基礎知識</title>
</head>
<body>

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



</body>
</html>