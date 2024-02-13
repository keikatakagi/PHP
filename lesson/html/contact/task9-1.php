<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = $_POST["name"];
  $name = $_POST["name_kana"];
  $email = $_POST["email"];
  $email = $_POST["tel"];
  $message = $_POST["inquiry_type"];
  $message = $_POST["inquiry_content"];
  $message = $_POST["policy"];
}

try {
  $pdo = new PDO(
    // DSN(Data Source Name)
      'mysql:host=localhost;dbname=consumer;charset=utf8mb4',
    // user
      'root',
    //password 
      'root',
      [
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        PDO::ATTR_EMULATE_PREPARES => false
      ]
  );

  $stmt = $pdo->prepare("INSERT INTO consumer VALUES(?,?,?,?,?,?,?);");
  $stmt->bindParam(1, $name, PDO::PARAM_INT);
  $stmt->bindParam(2, $name_kana, PDO::PARAM_STR);
  $stmt->bindParam(3, $email, PDO::PARAM_INT);
  $stmt->bindParam(4, $tel, PDO::PARAM_STR);
  $stmt->bindParam(5, $inquiry_type, PDO::PARAM_STR);
  $stmt->bindParam(6, $inquiry_content, PDO::PARAM_STR);
  $stmt->bindParam(7, $policy, PDO::PARAM_STR);
  $result = $stmt->execute();

}
?>

<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../css/reset.css">
  <link rel="stylesheet" href="../css/style.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
  <title>お問い合わせ - 完了</title>
</head>
<body>
  <header>
    <div class="header">
      <div class="head_top">
        <div class="head_title">
          <h1>ここには会社名が入ります</h1>
        </div>
        <div class="head_box">
          <a href="../index.html" class="head_btn btn01">トップページ</a>
          <a href="#" class="head_btn btn02">ボタン02</a>
        </div>
      </div>
      <div class="head_navi">
        <ul>
          <li><a href="">メニュー01</a></li>
          <li><a href="">メニュー02</a></li>
          <li><a href="">メニュー03</a></li>
        </ul>    
      </div>
    </div>
  </header>

  <div class="mv">
    <h1>
      <img src="../img/contact/mv.png" alt="">
    </h1>
  </div>

  <section class="form_01">
    <div class="wrapper">
        <div class="form_01_title">
          <h1>送信完了しました。</h1>
        </div>
    </div>
  </section>

  <section class="sec_btn">
    <div class="wrapper">
      <div class="sec_btn_content">
        <div class="sec_btn_box">
          <h2>こちらからご購入ください</h2>
          <a href="#" class="btn btn01">ネットショップ</a>
        </div>
        <div class="sec_btn_box">
          <h2>お気軽にお問い合わせください</h2>
          <a href="../contact/index.html" class="btn btn02">お問い合わせ</a>
        </div>
      </div>
    </div>
  </section>

  <div class="bottom">
    <div class="wrapper">
      <div class="bottom_box">
        <h3>ここには会社名が入ります</h3>
        <p>住所が入ります</p>
        <p>03-1234-5678</p>
        <p>営業時間：9:00～18:00</p>
      </div>
      <div class="bottom_navi">
        <ul>
          <li><a href="">リンク01</a></li>
          <li><a href="">リンク02</a></li>
          <li><a href="">リンク03</a></li>
          <li><a href="">リンク04</a></li>
          <li><a href="">リンク05</a></li>
          <li><a href="">リンク06</a></li>
          <li><a href="">リンク07</a></li>
        </ul>    
      </div>
    </div>
  </div>

  <footer><p>ここには会社名が入ります©copyright</p></footer>

</body>
</html>