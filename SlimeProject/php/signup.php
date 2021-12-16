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
    <link rel="stylesheet" href="../css/signup.css">
</head>
<body>
<!--ここから上部ヘッダー-->
<?php
require 'parts.php';
?>
<!--サイドバー終わり-->

<!--ここからメインエリア-->
<main>
    <?php
    $pdo = new PDO('mysql152.phy.lolipop.lan ;
dbname=LAA1291072-team;charset=utf8',
        'LAA1291072',
        'asot6');
    ?>

    <div class="main_area">
        <h1>会員登録<span></span></h1>
        <form method="post" action="signup-out.php" class="login_cls">
            <ul>
                <li><p>メールアドレス</p></li>
                <li><input type="email" id="email" name="C_email"  placeholder="your@mail.address"></li>
                <li><p>メールアドレス(確認)</p></li>
                <li><input type="email" id="email_cfm" placeholder="your@mail.address"></li>
                <li><p>パスワード</p></li>
                <li><input type="password" id="password" name="p_pass" placeholder="your password"></li>
                <li><p>パスワード(確認)</p></li>
                <li><input type="password" id="password_cfm" placeholder="your password"></li>
            </ul>
            <div class="under">
                <a href="login.php" class="sign_up">ログインページへ戻る</a>
                <input type="submit" value="登録" class="login_btn">
            </div>
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
