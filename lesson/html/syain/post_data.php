<?php
// ini_set('display_errors', "On");

require_once('common.php');

if(isset($_POST["status"])){
  if (isset($_POST["id"])) {
    $id = $_POST["id"];
  } 
  if (isset($_POST["name"])) {
    $name = $_POST["name"];
  } 
  if (isset($_POST["age"])) {
    $age = $_POST["age"];
  } 
  if (isset($_POST["work"])) {
    $work = $_POST["work"];
  } 
  if (isset($_POST["old_id"])) {
    $old_id = $_POST["old_id"];
  }

  if ($_POST["status"] == "create") {
    if (check_input($id, $name, $age, $work, $error) == false) {
      header("location: syain_create.php?error={$error}");
      exit;
    }
    if ($db->idexist($id) == true) {
      $error = "既に使用されているIDです";
      header("location: syain_create.php?error={$error}");
      exit;
    }
    if ($db->createsyain($id, $name, $age, $work) == false) {
      $error = "DBエラー";
      header("location: syain_create.php?error={$error}");
      exit;
    }
    header("location: index.php");
    exit;
  }

  if($_POST["status"] == "delete"){
    if ($db->deletesyain($id, $name, $age, $work) == false) {
      $error = "DBエラー";
      header("location: syain_create.php?error={$error}");
      exit;
    }
  }
}