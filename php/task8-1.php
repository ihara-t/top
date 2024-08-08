<?php
        $yourname = $_POST['yourname'];
        $hurigana = $_POST['hurigana'];
        $mail = $_POST['mail'];
        $tell = $_POST['tell'];
        $item = $_POST['item'];
        $comment = $_POST['comment'];

        $errors = [];

    if ($_SERVER['REQUEST_METHOD'] ==='POST'){
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

        if (empty($errors)){
            header('Location: task9-1.php');
            exit();
        }
    }
        
        

        // if (!empty($errors)) {
        //     echo '<div class="error">';
        //     foreach ($errors as $error) {
        //         echo '<p>' . $error . '</p>';
        //     }
        //     echo '</div>';
        //     echo '<form action="indextest.html" method="post">';
        //     echo "<p>お名前: $yourname</p>";
        //     echo "<p>フリガナ: $hurigana</p>";
        //     echo "<p>メールアドレス: $mail</p>";
        //     echo "<p>電話番号: $tell</p>";
        //     echo "<p>お問い合わせ項目: $item</p>";
        //     echo "<p>お問い合わせ内容: $comment</p>";
        //     echo '<button type="submit">確認</button>';
        //     echo '</form>';
        // } else {
        //     echo '<form id="confirmForm" action="task8-2.php" method="post">';
        //     echo "<p>お名前: $yourname</p>";
        //     echo "<p>フリガナ: $hurigana</p>";
        //     echo "<p>メールアドレス: $mail</p>";
        //     echo "<p>電話番号: $tell</p>";
        //     echo "<p>お問い合わせ項目: $item</p>";
        //     echo "<p>お問い合わせ内容: $comment</p>";

        //     echo '<button type="submit" id="submitButton">送信</button>';
        //     echo '</form>';
        // }

        // try{
        //     $pdo = new PDO(
        //     //DSN(Data Source Name)
        //     'mysql:host=localhost;dbname=consumer;charset=utf8mb4',
        //     //user
        //     'root',
        //     //pass
        //     'root'
        //     );

        //     $PDO ->quary("DROP TABLE IF EXISTS contact");
        //     $PDO->quary("
        //         "CREATE TABLE contact(
        //             id      INT PRIMARY KEY,
        //             name    VARCHAR(128),
        //             hurigana    VARCHAR(128),
        //             mail    VARCHAR(128),
        //             tell    INT,
        //             item    VARCHAR(64),
        //             comment VARCHAR(1000),
        //         )
        //     )
        // }
    ?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>お問い合わせフォーム</title>
    <link rel="stylesheet" href="stylesheet.css">
    <link rel="stylesheet" href="reset.css">
</head>
<body>
    <header>
        <div class="header">
            <h1>ここには会社名が入ります</h1>
            <div class="header_button_box">
                <a href="#" class="header_button_1">ボタン01</a>
                <a href="#" class="header_button_2">ボタン02</a>
            </div>
        </div>
        <div class="header_menu_tab">
            <a href="#" class="menu_1">メニュー01</a>
            <a href="#" class="menu_2">メニュー02</a>
            <a href="#" class="menu_3">メニュー03</a>
        </div>
    </header>
    <div class="pic">
        <img src="mv.png" alt="">
    </div>
    <main>
        <section class="contact">
            <div class="wrapper">
                <form action="task8-1.php" method="post">
                    <?php if (!empty($errors)): ?>
                        <div class="error">
                            <?php foreach ($errors as $error): ?>
                                <p><?= $error ?></p>
                            <?php endforeach; ?>
                        </div>
                    <?php endif; ?>

                    <div class="contact_01">
                        <div class="contact_left">
                            <h3>お名前</h3>
                        </div>
                        <div class="Required">
                            <h3>必須</h3>
                        </div>
                        <div class="contact_input">
                            <input type="text" placeholder="山田太郎" name="yourname" class="textform" value="<?= htmlspecialchars($yourname, ENT_QUOTES, 'UTF-8'); ?>">
                        </div>
                    </div>
                    <div class="contact_01">
                        <div class="contact_left">
                            <h3>フリガナ</h3>
                        </div>
                        <div class="Required">
                            <h3>必須</h3>
                        </div>
                        <div class="contact_input">
                            <input type="text" placeholder="ヤマダタロウ" name="hurigana" class="textform" value="<?= htmlspecialchars($hurigana, ENT_QUOTES, 'UTF-8'); ?>">
                        </div>
                    </div>
                    <div class="contact_01">
                        <div class="contact_left">
                            <h3>メールアドレス</h3>
                        </div>
                        <div class="Required">
                            <h3>必須</h3>
                        </div>
                        <div class="contact_input">
                            <input type="text" placeholder="info@fast-creademy.jp" name="mail" class="textform" value="<?= htmlspecialchars($mail, ENT_QUOTES, 'UTF-8'); ?>">
                        </div>
                    </div>
                    <div class="contact_01">
                        <div class="contact_left">
                            <h3>電話番号</h3>
                        </div>
                        <div class="Required">
                            <h3>必須</h3>
                        </div>
                        <div class="contact_input">
                            <input type="text" placeholder="0000000000" name="tell" class="textform" value="<?= htmlspecialchars($tell, ENT_QUOTES, 'UTF-8'); ?>">
                        </div>
                    </div>
                    <div class="contact_01">
                        <div class="contact_left">
                            <h3>お問い合わせ項目</h3>
                        </div>
                        <div class="Required">
                            <h3>必須</h3>
                        </div>
                        <div class="contact_input">
                            <select name="item">
                                <option value="a" <?= $item === 'a' ? 'selected' : '' ?>>選択してください</option>
                                <option value="b" <?= $item === 'b' ? 'selected' : '' ?>>b</option>
                                <option value="c" <?= $item === 'c' ? 'selected' : '' ?>>c</option>
                            </select>
                        </div>
                    </div>
                    <div class="contact_01">
                        <div class="contact_left">
                            <h3>お問い合わせ内容</h3>
                        </div>
                        <div class="Required">
                            <h3>必須</h3>
                        </div>
                        <div class="contact_area">
                            <textarea id="comment" name="comment" placeholder="こちらにお問いあわせ内容をご記入ください" class="textarea_form"><?= htmlspecialchars($comment, ENT_QUOTES, 'UTF-8'); ?></textarea>
                        </div>
                    </div>
                    <div class="contact_01">
                        <div class="contact_left">
                            <h3>個人情報保護方針</h3>
                        </div>
                        <div class="Required">
                            <h3>必須</h3>
                        </div>
                        <div class="personal_check">
                            <input id="personal_information" type="checkbox" name="personal" value="個人情報保護方針" required><label for="personal_information"><a href="#" class="personal_link">個人情報保護方針</a>に同意します。</label>
                        </div>
                    </div>
                    <div class="send_btn">
                        <div class="btn_02">
                            <button type="submit" class="btn_green">確認</button>
                        </div>
                    </div>
                </form>
            </div>
        </section>
        <section class="element_btn">
            <div class="btn_01">
                <h3>こちらからご購入ください</h3>
                <a href="#" class="btn_pink"> ネットショップ</a>
            </div>
            <div class="btn_02">
                <h3>お気軽にお問い合せください</h3>
                <a href="#" class="btn_green"> お問い合わせ</a>
            </div>
        </section>
        <section class="element_05"> 
            <div class="wrapper">
                <h3 class="ele_05_h3">ここには会社名が入ります</h3>
                <p class="ele_05_p">住所が入ります<br>03-1234-5678<br>営業時間：9:00～18:00</p>
            </div>
        </section>
        <section class="element_06">
            <div class="element_link">
                <a href="#" class="link">リンク01</a>
                <a href="#" class="link">リンク02</a>
                <a href="#" class="link">リンク03</a>
                <a href="#" class="link">リンク04</a>
                <a href="#" class="link">リンク05</a>
                <a href="#" class="link">リンク06</a>
                <a href="#" class="link">リンク07</a>
            </div>
        </section>
    </main>
    <footer>
        <p>ここには会社名が入ります@copyright</p>
    </footer>
</body>
</html>
