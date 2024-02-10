<?php
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $name_kana = $_POST["name_kana"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $inquiry_type = $_POST["inquiry_type"];
    $inquiry_content = $_POST["inquiry_content"];
    $policy = $_POST["policy"];

    if(empty($_POST['name'])){
      echo "お名前が未入力です。";
    }
    if(empty($_POST['name_kana'])){
      echo "フリガナが未入力です。";
    }

    if(empty($_POST['email'])){
      echo "メールアドレスが未入力です。";
    }

    if(empty($_POST['phone'])){
      echo "電話番号が未入力です。";
    } elseif (strlen($phone) != 10 || strlen($phone) != 11){
      echo "電話番号は１０桁もしくは１１桁で入力してください。";
    }

    if(empty($_POST['inquiry_type'])){
      echo "お問い合わせ項目が未選択です。";
    }
    if(empty($_POST['inquiry_content'])){
      echo "お問い合わせ内容が未入力です。";
    }
    if(empty($_POST['policy'])){
      echo "個人情報保護方針をご確認の上、チェックをつけてください。";
    }

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
  <title>お問い合わせ - 確認</title>
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
        <h1>お問い合わせ内容の確認</h1>
      </div>
      <div class="form_box">
        <form action="task8-1.php" method="post">
          <div class="form_content">
            <label for="name">お名前<span class="form_required">必須</span></label>
            <input type="text" name="name" id="name" placeholder="山田太郎" vakue="<?= $name ?>">
          </div>
          <div class="form_content">
            <label for="name_kana">フリガナ<span class="form_required">必須</span></label>
            <input type="text" name="name_kana" id="name_kana" placeholder="ヤマダタロウ" vakue="<?= $name_kana ?>">
          </div>
          <div class="form_content">
            <label for="email">メールアドレス<span class="form_required">必須</span></label>
            <input type="email" name="email" id="email" placeholder="info@fast-creademy.jp">
          </div>
          <div class="form_content">
            <label for="phone">電話番号<span class="form_required">必須</span></label>
            <input type="tel" name="phone" id="phone" placeholder="0123456789">
          </div>
          <div class="form_content">
            <label for="inquiry_type">お問い合わせ項目<span class="form_required">必須</span></label>
            <select name="inquiry_type" id="inquiry_type">
              <option value="" disabled selected>選択してください</option>
              <option value="選択肢01">選択肢01</option>
              <option value="選択肢02">選択肢02</option>
              <option value="選択肢03">選択肢03</option>
              <option value="選択肢04">選択肢04</option>
            </select>
          </div>
          <div class="form_content">
            <label for="inquiry_content">お問い合わせ内容<span class="form_required">必須</span></label>
            <textarea name="inquiry_content" id="inquiry_content" placeholder="こちらにお問い合わせ内容をご記入ください"></textarea>
          </div>
          <div class="form_content">
            <label>個人情報保護方針<span class="form_required">必須</span></label>
            <div class="policy">
              <input type="checkbox" name="policy" id="policy">
              <label for="policy"><a href="#">個人情報保護方針<span class="material-symbols-outlined">description</span></a>に同意します。</label>
            </div>
          </div>
          <div class="form_btn_box">
              <input type="submit" class="form_btn" value="確認">
          </div>
        </form>
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
          <a href="#" class="btn btn02">お問い合わせ</a>
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