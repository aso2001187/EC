<?php session_start();?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>Slime</title>
    <!--左サイドバーのcss-->
    <link rel="stylesheet" href="../css/sidebar.css">
    <!--上部ヘッダーのcss-->
    <link rel="stylesheet" href="../css/header.css">
    <!--ページ全体の設定-->
    <link rel="stylesheet" href="../css/setting.css">
    <!--メインエリアのcss-->
    <link rel="stylesheet" href="../css/prof.css">
</head>
<body>
<!--ここから上部ヘッダー-->
<?php
require 'parts.php';
?>
<!--サイドバー終わり-->

<!--ここからメインエリア--> <!--ここからした(mainの中)にコードお願いします！！！-->
<main>
    <div class="main_area">
        <form action="prof-output.php" method="post">
            <h1>お客様情報 <button type="submit">更新</button></h1>
            <!--
                説明
                各inputのvalue(規定値)にDB(会員TBL)から持ってきた値
                をあらかじめphpで入力する。
                formタグを使用し、画面上部の更新ボタンで、valueの
                中の値をDBに登録(上書き)する。
            -->
            <ul>
                <li>
                    <p>お名前</p>
                    <input type="text" name="name" value="<?php echo $_SESSION['customer']['name']; ?>" maxlength="50" class="box" required>
                </li>
                <li>
                    <p>郵便番号</p>
                    <input type="number" name="postcode" value="<?php echo $_SESSION['customer']['postcode']; ?>" maxlength="7" class="box" required>
                </li>
                <li>
                    <p>住所１</p>
                    <input type="text" name="address1" value="<?= $_SESSION['customer']['address1']; ?>" maxlength="80" class="box" required>
                </li>
                <li>
                    <p>住所２</p>
                    <input type="text" name="address2" value="<?= $_SESSION['customer']['address2']; ?>" maxlength="20" class="box" required>
                </li>
                <li>
                    <p>電話番号</p>
                    <input type="number" name="phone" value="<?= $_SESSION['customer']['phone']; ?>" maxlength="12" class="box" required>
                </li>
                <li>
                    <p>メールアドレス</p>
                    <input type="email" name="email" value="<?= $_SESSION['customer']['email']; ?>" maxlength="80" class="box" required>
                </li>
            </ul>
        </form>
    </div>
</main>

<!--使ってるアイコンのスクリプト-->
<script src="../js/main.js"></script>
<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>
</html>
