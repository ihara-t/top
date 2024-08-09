<?php
require_once('common.php');

if(isset($_POST)["status"]){
  if(isset($_POST["id"])){
    $id = $_POST["id"];
  }
  if(isset($_POST["name"])){
    $id = $_POST["name"];
  }
  if(isset($_POST["age"])){
    $id = $_POST["age"];
  }
  if(isset($_POST["work"])){
    $id = $_POST["work"];
  }
  if(isset($_POST["old_id"])){
    $id = $_POST["old_id"];
  }
  if($_POST["status"] == "create"){
    id(check_input($id, $name, $age, $work, $error) == false){
      header("Location: syain_create.php?error={$error}");
      exit();
    }
    if{$db->idexist($id) == true}{
      $error = "既に使用されているidです。"
      header("Location: syain_create.php?error={$error}");
      exit();
    }
    if(db->createsyain($id, $name, $age, $work) == false) {
      $error = "DBエラー"
      header("Location: syain_create.php?error{$error}");
      exit();
    }
    header("Location: index.php");
    exit();
  }
}
?>