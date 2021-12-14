<?php session_start(); ?>
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
    <link rel="stylesheet" href="../css/buy-1.css">
</head>
<body>
<!--ここから上部ヘッダー-->
<header>
    <div class="header_boss">
        <!--ヘッダーの左寄せ部分-->
        <div class="header_left">
            <a href="ここはtopページリンク"><img src="../pic/logo.png"></a>
        </div>
        <!--ヘッダーの右寄せ部分-->
        <ul class="header_right">
            <!--検索ボックス-->
            <li class="header_right_item">
                <form method="post" action="#???" class="keyword"> <!--キーワード検索用form-->
                    <div class="header_items3">
                        <input type="text" id="search" placeholder="キーワード検索" class="keyword_box">
                        <input type="submit" value="&#xf002" class="keyword_submit">
                    </div>
                </form> <!--キーワード検索用form ここまで-->
            </li>
            <!--ログインボタン-->
            <li class="header_right_item">
                <div class="header_items">
                    <a href="login.html"><ion-icon name="person-outline" class="header_icon1"></ion-icon>
                        <span>Login</span></a>
                </div>
            </li>
            <!--カートボタン-->
            <li class="header_right_item">
                <div class="header_items2">
                    <a href="#???"><ion-icon name="cart-outline" class="header_icon2"></ion-icon>
                        <span>Cart</span></a>
                </div>
            </li>
        </ul>
    </div>
</header>
<!--上部ヘッダー終わり-->

<!--左サイドバー-->
<div id="sidebar">
    <div class="bg"></div>
    <div class="sidebar-button" tabindex="0">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
    </div>
    <div id="sidebar-menu" tabindex="0">
        <ul>
            <li><a href="#0">TOP</a></li>
            <li><a href="#0">##TAG1</a></li> <!---->
            <li><a href="#0">##TAG2</a></li>
            <li><a href="#0">##TAG3</a></li>
            <li><a href="#0">##TAG4...</a></li>
            <li class="small"><a href="#0">Contact</a></li>
        </ul>
    </div>
</div>
<!--サイドバー終わり-->

<!--ここからメインエリア--> <!--ここからした(mainの中)にコードお願いします！！！-->
<main>
    <div class="main_area">
        <h2>お届け先</h2>
        <!--
            説明
            各inputのvalue(規定値)にDB(会員TBL)から持ってきた値
            をあらかじめphpで入力す
        -->
        <form method="post" action="buy-2.php" class="buy1form">
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
            <?php
            echo $_SESSION['customer']['name'];
            if(empty($_SESSION['customer']['id'])){
                echo 'から';
            }
            ?>
        <input type="submit" value="入力情報確認" class="exbtn">
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