<?php
var_dump($_POST);
require_once('common.php');

$id = isset($_POST['id']) ? $_POST['id'] : '';
$name = isset($_POST['name']) ? $_POST['name'] : '';
$age = isset($_POST['age']) ? $_POST['age'] : '';
$work = isset($_POST['work']) ? $_POST['work'] : '';
$old_id = isset($_POST['old_id']) ? $_POST['old_id'] : '';

show_top("社員情報の更新");

echo "<p>ID: " . htmlspecialchars($id, ENT_QUOTES, 'UTF-8') . "</p>";
echo "<p>名前: " . htmlspecialchars($name, ENT_QUOTES, 'UTF-8') . "</p>";
echo "<p>年齢: " . htmlspecialchars($age, ENT_QUOTES, 'UTF-8') . "</p>";
echo "<p>職業: " . htmlspecialchars($work, ENT_QUOTES, 'UTF-8') . "</p>";

echo '<form action="post_data.php" method="post">';
echo '<input type="hidden" name="status" value="edit">';
echo '<input type="hidden" name="id" value="' . htmlspecialchars($id, ENT_QUOTES, 'UTF-8') . '">';
echo '<input type="hidden" name="old_id" value="' . htmlspecialchars($old_id, ENT_QUOTES, 'UTF-8') . '">';
echo '<input type="hidden" name="name" value="' . htmlspecialchars($name, ENT_QUOTES, 'UTF-8') . '">';
echo '<input type="hidden" name="age" value="' . htmlspecialchars($age, ENT_QUOTES, 'UTF-8') . '">';
echo '<input type="hidden" name="work" value="' . htmlspecialchars($work, ENT_QUOTES, 'UTF-8') . '">';
echo '<input type="submit" value="確認">';
echo '</form>';

show_down(true);
?>

