<?php

ini_set('display_errors', "On");

require_once('common.php');

show_top("社員情報の削除");
$id = $_GET['id'];
$member = $db->getsyain($id);
// var_dump($member);
show_delete($member["id"],$member["name"],$member["age"],$member["work"]);
show_down(true);
?>