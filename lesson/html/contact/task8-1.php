<?php
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $name_kana = $_POST["name_kana"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $inquiry_type = $_POST["inquiry_type"];
    $inquiry_content = $_POST["inquiry_content"];
    $policy = $_POST["policy"];
  }

  $i = 0;

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
        <?php
            if(empty($name)){
              echo '<p style="color:red; font-weight:bold; font-size:20px;">お名前が未入力です。</p>';
              $i++;
            } 
            if(empty($name_kana)){
              echo '<p style="color:red; font-weight:bold; font-size:20px;">フリガナが未入力です。</p>';
              $i++;
            }

            if(empty($email)){
              echo '<p style="color:red; font-weight:bold; font-size:20px;">メールアドレスが未入力です。</p>';
              $i++;
            } elseif(strpos($email, '@') === false) {
              echo '<p style="color:red; font-weight:bold; font-size:20px;">メールアドレスには @ が含まれている必要があります。</p>';
              $i++;
            }

            if(empty($phone)){
              echo '<p style="color:red; font-weight:bold; font-size:20px;">電話番号が未入力です。';
              $i++;
            } elseif (strlen($phone) <10 || strlen($phone) > 11){
              echo '<p style="color:red; font-weight:bold; font-size:20px;">電話番号は１０桁もしくは１１桁で入力してください。</p>';
              $i++;
            }

            if(empty($inquiry_type)){
              echo '<p style="color:red; font-weight:bold; font-size:20px;">お問い合わせ項目が未選択です。</p>';
              $i++;
            }
            if(empty($inquiry_content)){
              echo '<p style="color:red; font-weight:bold; font-size:20px;">お問い合わせ内容が未入力です。</p>';
              $i++;
            }
            if(empty($policy)){
              echo '<p style="color:red; font-weight:bold; font-size:20px;">個人情報保護方針をご確認の上、チェックをつけてください。</p>';
              $i++;
            }

            // // 入力されたデータの確認
            // var_dump($name);
            // var_dump($name_kana);
            // var_dump($email);
            // var_dump($phone);
            // var_dump($inquiry_type);
            // var_dump($inquiry_content);
            // var_dump($policy);
        ?>
      </div>
      <div class="form_box">
        <form action="<?php if($i > 0){echo 'task8-1.php';} else {echo 'task9-1.php';} ?>" method="post">
          <div class="form_content">
            <label for="name">お名前<span class="form_required">必須</span></label>
            <input type="text" name="name" placeholder="山田太郎" value="<?= $name ?>">
          </div>
          <div class="form_content">
            <label for="name_kana">フリガナ<span class="form_required">必須</span></label>
            <input type="text" name="name_kana" placeholder="ヤマダタロウ" value="<?= $name_kana ?>">
          </div>
          <div class="form_content">
            <label for="email">メールアドレス<span class="form_required">必須</span></label>
            <input type="text" name="email" placeholder="info@fast-creademy.jp" value="<?= $email ?>">
          </div>
          <div class="form_content">
            <label for="phone">電話番号<span class="form_required">必須</span></label>
            <input type="tel" name="phone" placeholder="0123456789" value="<?= $phone ?>">
          </div>
          <div class="form_content">
            <label for="inquiry_type">お問い合わせ項目<span class="form_required">必須</span></label>
            <select name="inquiry_type">
              <option value="" disabled selected>選択してください</option>
              <option value="選択肢01" <?php if($inquiry_type == '選択肢01'){echo 'selected';} ?>>選択肢01</option>
              <option value="選択肢02" <?php if($inquiry_type == '選択肢02'){echo 'selected';} ?>>選択肢02</option>
              <option value="選択肢03" <?php if($inquiry_type == '選択肢03'){echo 'selected';} ?>>選択肢03</option>
              <option value="選択肢04" <?php if($inquiry_type == '選択肢04'){echo 'selected';} ?>>選択肢04</option>
            </select>
          </div>
          <div class="form_content">
            <label for="inquiry_content">お問い合わせ内容<span class="form_required">必須</span></label>
            <textarea name="inquiry_content" placeholder="こちらにお問い合わせ内容をご記入ください"><?= $inquiry_content ?></textarea>
          </div>
          <div class="form_content">
            <label>個人情報保護方針<span class="form_required">必須</span></label>
            <div class="policy">
              <input type="checkbox" name="policy" id="policy" <?php if($policy == 'on'){echo 'checked';} ?>>
              <label for="policy"><a href="#">個人情報保護方針<span class="material-symbols-outlined">description</span></a>に同意します。</label>
            </div>
          </div>
          <div class="form_btn_box">
              <?php if($i == 0){echo '<p style="font-weight:bold; font-size:20px; padding:20px;">入力内容に間違いがなければ、送信ボタンを押してください。</p><br>';}?> 
              <input type="submit" class="form_btn" value="<?php if($i > 0){echo '確認';} else {echo '送信';} ?>">
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