<?php
try {
    $pdo = new PDO(
        'mysql:host=localhost;dbname=consumer;charset=utf8mb4',
        'root',
        'root',
        [
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_EMULATE_PREPARES => false
        ]
    );

    // $pdo->query("DROP TABLE IF EXISTS contact");
    // $pdo->query(
    //     "CREATE TABLE contact(
    //         id INT AUTO_INCREMENT PRIMARY KEY,
    //         name VARCHAR(128),
    //         hurigana VARCHAR(128),
    //         mail VARCHAR(128),
    //         tell INT,
    //         item VARCHAR(64),
    //         comment VARCHAR(1000)
    //     )"
    // );

    $yourname = $_POST['yourname'];
    $hurigana = $_POST['hurigana'];
    $mail = $_POST['mail'];
    $tell = $_POST['tell'];
    $item = $_POST['item'];
    $comment = $_POST['comment'];
    
      // サニタイズ後の値を確認（デバッグ用）
      echo "名前: $yourname<br>";
      echo "ふりがな: $hurigana<br>";
      echo "メール: $mail<br>";
      echo "電話番号: $tell<br>";
      echo "項目: $item<br>";
      echo "コメント: $comment<br>";

    $stmt = $pdo->prepare("INSERT INTO contact (name, hurigana, mail, tell, item, comment) VALUES (?, ?, ?, ?, ?, ?);");
    $stmt->bindParam(1, $yourname, PDO::PARAM_STR);
    $stmt->bindParam(2, $hurigana, PDO::PARAM_STR);
    $stmt->bindParam(3, $mail, PDO::PARAM_STR);
    $stmt->bindParam(4, $tell, PDO::PARAM_INT);
    $stmt->bindParam(5, $item, PDO::PARAM_STR);
    $stmt->bindParam(6, $comment, PDO::PARAM_STR);
    $res = $stmt->execute();

    // if ($res) {
    //     echo "データが正常に挿入されました。";
    // } else {
    //     $errorInfo = $stmt->errorInfo();
    //     echo "データの挿入に失敗しました: " . htmlspecialchars($errorInfo[2]);
    // }

} catch(PDOException $e) {
    echo "PDOException: " . $e->getMessage() . '<br>';
    exit;
}
?>



<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>お問い合わせフォーム</title>
    <link rel="stylesheet" href="comp-page.css">
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
        <section class="comp">
            <div class="wrapper">
                <h1>お問い合わせ</h1>
                <p>送信完了しました<p>
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
