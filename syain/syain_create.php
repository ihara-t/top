<?php
// require_once('common.php');

// show_top("社員情報の追加");
// show_create();
// show_down(true);

require_once('common.php');

$name = isset($_GET['name']) ? $_GET['name'] : '';
$age = isset($_GET['age']) ? $_GET['age'] : '';
$work = isset($_GET['work']) ? $_GET['work'] : '';

show_top("社員情報の追加");
show_form("", $name, $age, $work, "", "create", "登録");
show_down(true);
?>