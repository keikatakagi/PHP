<?php

ini_set('display_errors', "On");

require_once('common.php');
$members = $db->getallsyain();
show_top();
// var_dump($members);
show_syainlist($members);
show_down();
?>
