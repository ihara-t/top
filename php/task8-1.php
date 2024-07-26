<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>確認ページ</title>
    <style>
        .error { color: red; }
    </style>
</head>
<body>
    <h1>確認ページ</h1>
    <?php
        $yourname = $_POST['yourname'];
        $hurigana = $_POST['hurigana'];
        $mail = $_POST['mail'];
        $tell = $_POST['tell'];
        $item = $_POST['item'];
        $comment = $_POST['comment'];

        $errors = [];

        
        if (empty($yourname)) {
            $errors[] = "お名前を入力してください。";
        }
        if (empty($hurigana)) {
            $errors[] = "フリガナを入力してください。";
        }
        if (empty($mail) || !filter_var($mail, FILTER_VALIDATE_EMAIL)) {
            $errors[] = "正しいメールアドレスを入力してください。";
        }
        if (empty($tell) || !(preg_match('/^\d{10,11}$/', $tell))) {
            $errors[] = "正しい電話番号を入力してください。";
        }
        if (empty($item)) {
            $errors[] = "お問い合わせ項目を選択してください。";
        }
        if (empty($comment)) {
            $errors[] = "お問い合わせ内容を入力してください。";
        }
        


        if (!empty($errors)) {
            echo '<div class="error">';
            foreach ($errors as $error) {
                echo '<p>' . $error . '</p>';
            }
            echo '</div>';
            echo '<form action="indextest.html" method="post">';
            echo "<p>お名前: $yourname</p>";
            echo "<p>フリガナ: $hurigana</p>";
            echo "<p>メールアドレス: $mail</p>";
            echo "<p>電話番号: $tell</p>";
            echo "<p>お問い合わせ項目: $item</p>";
            echo "<p>お問い合わせ内容: $comment</p>";
            echo '<button type="submit">確認</button>';
            echo '</form>';
        } else {
            echo '<form id="confirmForm" action="task8-2.php" method="post">';
            echo "<p>お名前: $yourname</p>";
            echo "<p>フリガナ: $hurigana</p>";
            echo "<p>メールアドレス: $mail</p>";
            echo "<p>電話番号: $tell</p>";
            echo "<p>お問い合わせ項目: $item</p>";
            echo "<p>お問い合わせ内容: $comment</p>";

            echo '<button type="submit" id="submitButton">送信</button>';
            echo '</form>';
        }
    ?>
</body>
</html>
