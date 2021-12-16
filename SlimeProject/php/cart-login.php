<?php session_start();?>
<?php
if (isset($_SESSION["customer"])) {
    header("Location:cart.php");
}
?>
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
    <link rel="stylesheet" href="../css/login.css">
</head>
<body>
<!--ここから上部ヘッダー-->
<?php
    require 'parts.php';
?>
<!--サイドバー終わり-->

<!--ここからメインエリア-->
<main>
    <div class="main_area">
        <h1>ログイン</h1>
        <form method="post" action="cart-login-out.php" class="login_cls"> <!--ログイン用form-->
            <ul>
                <li><p>メールアドレス</p>
                    <input type="email" id="email" name="email" placeholder="your@mail.address" required>
                </li>
                <li><p>パスワード</p>
                    <input type="password" id="password" name="password" placeholder="your password" required>
                </li>
            </ul>
            <div class="under">
                <a href="signup.php" class="sign_up">会員登録はこちら</a>
                <input type="submit" value="ログイン" class="login_btn">
            </div>
        </form>                                                 <!--ログインフォームここまで-->
    </div>
</main>

<!--使ってるアイコンのスクリプト-->
<script src="../js/main.js"></script>
<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>
</html>
