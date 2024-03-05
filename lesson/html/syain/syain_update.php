<?php

require_once('common.php');

show_top("社員情報の更新");
$id = $_GET['id'];
$name = $_GET['name'];
$age = $_GET['age'];
$work = $_GET['work'];
show_update($id, $name, $age, $work);
show_down(true);
?>