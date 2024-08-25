<?php
// require_once('common.php');

// if (isset($_POST['status'])) {
//     $status = $_POST['status'];
//     $id = isset($_POST['id']) ? $_POST['id'] : '';
//     $name = isset($_POST['name']) ? $_POST['name'] : '';
//     $age = isset($_POST['age']) ? $_POST['age'] : '';
//     $work = isset($_POST['work']) ? $_POST['work'] : '';
//     $old_id = isset($_POST['old_id']) ? $_POST['old_id'] : '';

//     if ($status === 'create') {
//         if (check_input($id, $name, $age, $work, $error)) {
//             if ($db->idexist($id)) {
//                 $error = "既に使用されているIDです。";
//                 header("Location: syain_create.php?error=" . urlencode($error));
//                 exit();
//             }
//             if ($db->createsyain($id, $name, $age, $work)) {
//                 header("Location: index.php");
//                 exit();
//             } else {
//                 $error = "DBエラー";
//                 header("Location: syain_create.php?error=" . urlencode($error));
//                 exit();
//             }
//         }

require_once('common.php');

if (isset($_POST['status'])) {
    $status = $_POST['status'];
    $id = isset($_POST['id']) ? $_POST['id'] : '';
    $name = isset($_POST['name']) ? $_POST['name'] : '';
    $age = isset($_POST['age']) ? $_POST['age'] : '';
    $work = isset($_POST['work']) ? $_POST['work'] : '';
    $old_id = isset($_POST['old_id']) ? $_POST['old_id'] : '';

    if ($status === 'create') {
        if (check_input($id, $name, $age, $work, $error)) {
            if ($db->idexist($id)) {
                $error = "既に使用されているIDです。";
                $query = http_build_query([
                    'error' => $error,
                    'name' => $name,
                    'age' => $age,
                    'work' => $work
                ]);
                header("Location: syain_create.php?$query");
                exit();
            }
            if ($db->createsyain($id, $name, $age, $work)) {
                header("Location: index.php");
                exit();
            } else {
                $error = "DBエラー";
                $query = http_build_query([
                    'error' => $error,
                    'name' => $name,
                    'age' => $age,
                    'work' => $work
                ]);
                header("Location: syain_create.php?$query");
                exit();
            }
        }
    } elseif ($status === 'edit') {
        if (check_input($id, $name, $age, $work, $error)) {
            if ($id !== $old_id && $db->idexist($id)) {
                $error = "新しいIDが既に使用されています。";
                header("Location: syain_edit.php?id=" . urlencode($old_id) . "&error=" . urlencode($error));
                exit();
            }
            if ($db->updatesyain($old_id, $id, $name, $age, $work)) {
                header("Location: index.php");
                exit();
            } else {
                $error = "更新に失敗しました。";
                header("Location: syain_edit.php?id=" . urlencode($old_id) . "&error=" . urlencode($error));
                exit();
            }
        }
    } elseif ($status === 'delete') {
        if ($db->deletesyain($id)) {
            header("Location: index.php");
            exit();
        } else {
            $error = "削除に失敗しました。";
            header("Location: syain_edit.php?id=" . urlencode($id) . "&error=" . urlencode($error));
            exit();
        }
    }
}
