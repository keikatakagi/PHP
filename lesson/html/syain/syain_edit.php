<?php

ini_set('display_errors', "On");

require_once('common.php');
$members = $db->getsyain($id);
show_top("社員情報");
show_syain($members);
show_down(true);
?>