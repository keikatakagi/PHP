
<h1>確認</h1>
<?php
  session_start();
  echo "セッションI：" . session_id() . "<br>";
  echo "状況：{$_SESSION["data"]}<br><br>";
?>
<a href="index8-0.php">元のページへ</a>