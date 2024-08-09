<?php
require_once('common.php');
// require_once('app/Database.php');
// require_once('app/html_func.php');
// $db = new Database();
$members = $db->getallsyain();
show_top();
show_syainlist($members);
show_down();
?>

<!-- 
<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <h1>aaaa</h1>
</body>
</html> -->