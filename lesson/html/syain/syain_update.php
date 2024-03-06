<?php

require_once('common.php');

show_top("社員情報の更新");
$id = $_GET['id'];
$member = $db->getsyain($id);
// var_dump($member);
show_update($member["id"],$member["name"],$member["age"],$member["work"],$member["id"]);
show_down(true);
?>