<?php

ini_set('display_errors', "On");

require_once('common.php');

$id = $_GET['id'];
$name = $_GET['name'];
$age = $_GET['age'];
$work = $_GET['work'];
// var_dump($id);
$member = $db->getsyain($id);
show_top("社員情報の削除");
show_delete($id, $name, $age, $work);
show_down(true);
?>