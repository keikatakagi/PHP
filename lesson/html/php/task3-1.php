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
  $a = array('商品' => '鉛筆', '価格' => '100円');
  $b = array('商品' => '消しゴム', '価格' => '200円');
  ?>

  <table>
    <tr>
      <th>商品</th>
      <th>価格</th>
      <th>税込価格</th>
      <th>1Dzの価格</th>
    </tr>
    <tr>
      <td><?= $a['商品']?></td>
      <td><?= $a['価格']?></td>
      <td><?= $a['価格'] * 1.1 ?>円</td>
      <td><?= $a['価格'] * 12 * 1.1 ?>円</td>
    </tr>
    <tr>
      <td><?= $b['商品']?></td>
      <td><?= $b['価格']?></td>
      <td><?= $b['価格'] * 1.1 ?>円</td>
      <td><?= $b['価格'] * 12 * 1.1 ?>円</td>
    </tr>
  </table>
  
</body>
</html>