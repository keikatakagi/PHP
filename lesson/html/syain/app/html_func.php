<?php

function show_top($heading = "社員一覧")
{
  echo <<<TOP
<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>社員管理</title>
  <link rel="stylesheet" href="css/style.css">
</head>
<body>
  <h1>$heading</h1>
TOP;
}

function show_down($return = false)
{
  if ($return == true) {
    echo '<button><a href="index.php">社員一覧に戻る</a></button>';
  }
  echo <<<BOTTOM
  </body>
  </html>
BOTTOM;
} 

function show_syainlist($members)
{
  // var_dump($members);
  echo <<<TABLE1
    <table>
      <tr>
        <th>社員番号</th>
        <th>名前</th>
      </tr>
TABLE1;
  foreach ($members as $member) {
    echo <<<TABLE2
      <tr>
        <th>{$member["id"]}</th>
        <td><a href="syain_edit.php?id={$member["id"]}">{$member["name"]}</a></td>
      </tr>
TABLE2;
  }
  echo <<<TABLE3
    </table>
    <button><a href="syain_create.php">社員情報の追加</a></button>
TABLE3;
}

function show_form($id, $name, $age, $work, $old_id, $status, $button)
{
  $error = "";
  $error = get_error();
  // var_dump($name);
  echo <<<FORM
  <form action="post_data.php" method="post">
    <p>社員番号</p>
    <input type="text" name="id" placeholder="例）10001" value="{$id}">
    <p>名前</p>
    <input type="text" name="name" placeholder="例）中野 孝" value="{$name}">
    <p>年齢</p>
    <input type="text" name="age" placeholder="例）35" value="{$age}">
    <p>勤務形態</p>
    <input type="text" name="work" placeholder="例）社員" value="{$work}">
    <p class="red">{$error}</p>
    <input type="hidden" name="old_id" value="{$old_id}">
    <input type="hidden" name="status" value="{$status}">
    <input type="submit" name="button" value="{$button}">
  </form>
FORM;
}

function show_create($id, $name, $age, $work)
{
  $error = get_error();
  // var_dump($name);
  show_form($id, $name, $age, $work, "","create","登録");
}

function show_syain($member){
  // var_dump($member);
  echo <<<TABLE4
  <table>
    <tr>
      <th>社員番号</th>
      <th>名前</th>
      <th>年齢</th>
      <th>労働形態</th>
    </tr>
    <tr>
      <th>{$member["id"]}</th>
      <td>{$member["name"]}</td>
      <td>{$member["age"]}</td>
      <td>{$member["work"]}</td>
    </tr>
  </table>
  <br>
  <a href=syain_update.php>社員情報の更新</a>
  <br>
  <a href=syain_delete.php>社員情報の削除</a>
  <br>
TABLE4;
}

function show_update($id, $name, $age, $work){
  $error = get_error();
  show_form("", "", "", "", "","update","更新");
}

function show_delete(){
  $error = get_error();
  show_form("", "", "", "", "","delete","削除");
}

?>
