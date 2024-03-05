<?php

require_once('common.php');

show_top("社員情報の追加");
$id = $_GET['id'];
$name = $_GET['name'];
$age = $_GET['age'];
$work = $_GET['work'];
show_create($id, $name, $age, $work);
show_down(true);
?>