<?php session_start(); ?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>Slime</title>
    <!--左サイドバーのcss-->
    <link rel="stylesheet" href="../css/sidebar.css">
    <link rel="stylesheet" href="../css/sidebar_proto.css">
    <!--上部ヘッダーのcss-->
    <link rel="stylesheet" href="../css/header.css">
    <!--ページ全体の設定-->
    <link rel="stylesheet" href="../css/setting.css">
    <!--メインエリアのcss-->
    <link rel="stylesheet" href="../css/###pagename.css">
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
                <form method="post" action="searchresult.php" class="keyword"> <!--キーワード検索用form-->
                    <div class="header_items3">
                        <input type="text" name="search" id="search" placeholder="キーワード検索" class="keyword_box">
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
            <li><a class="top" href="#0">TOP</a></li>
            <li><a href="#0">##TAG1</a>
                <ul>
                    <li><a href="小分類">001</a></li>
                    <li><a href="小分類">002</a></li>
                    <li><a href="小分類">003</a></li>
                </ul>
            </li>
            <li><a href="#0">##TAG2</a>
                <ul>
                    <li><a href="小分類">004</a></li>
                    <li><a href="小分類">005</a></li>
                    <li><a href="小分類">006</a></li>
                </ul>
            </li>
            <li><a href="#0">##TAG3</a>
                <ul>
                    <li><a href="小分類">007</a></li>
                    <li><a href="小分類">008</a></li>
                    <li><a href="小分類">009</a></li>
                </ul>
            </li>
            <li class="small"><a href="#0">Contact</a></li>
        </ul>
    </div>
</div>
<!--サイドバー終わり-->

<!--ここからメインエリア--> <!--ここからした(mainの中)にコードお願いします！！！-->
<main>
    <?php
        $_SESSION['customer']['id']=1;
    $_SESSION['customer']['name']="吉鶴";
    $_SESSION['customer']['postcode']=8120016;
    $_SESSION['customer']['address1']="福岡県福岡市博多区博多南";
    $_SESSION['customer']['address2']="2丁目12-3";
    $_SESSION['customer']['phone']=120371007;
    $_SESSION['customer']['email']="aso@s.asojuku.ac.jp";
    $_SESSION['kingaku']=5000;

    ?>
    <a href="buy-1.php">
        test link
    </a>
</main>

<!--使ってるアイコンのスクリプト-->
<script src="../js/main.js"></script>
<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>
</html>