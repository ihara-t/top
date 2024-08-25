<?php
require_once('common.php');

$id = isset($_GET['id']) ? $_GET['id'] : '';
$syain = null;
$error = "";

if ($id !== '') {
    $syain = $db->getsyain($id);
    if ($syain === null) {
        echo "指定された社員は存在しません。";
        show_down(true);
        exit();
    }
} else {
    echo "社員IDが指定されていません。";
    show_down(true);
    exit();
}

show_top("社員情報の編集");
show_form($syain['id'], $syain['name'], $syain['age'], $syain['work'], $id, "edit", "更新");

if ($error !== "") {
    echo "<p style='color:red;'>$error</p>";
}

echo '<form action="post_data.php" method="post">';
echo '<input type="hidden" name="id" value="' . htmlspecialchars($id, ENT_QUOTES, 'UTF-8') . '">';
echo '<input type="hidden" name="status" value="delete">';
echo '<input type="submit" value="削除">';
echo '</form>';

show_down(true);
?>
