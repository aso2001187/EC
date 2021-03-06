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
    <link rel="stylesheet" href="../css/###pagename.css">
</head>
<body>
<!--ここから上部ヘッダー-->
<header>
    <div class="header_boss">
        <!--ヘッダーの左寄せ部分-->
        <div class="header_left">
            <a href="0">logo<img src="0#"></a>
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

<!--ここからメインエリア-->
<main>
    <!--とりあえずdiv idでそれぞれ囲っているよ-->
    <!--商品画像 cssで回り込み処理-->
    <div id="itemimg">
        <!--画像アップロード前-->
        <img src="../pic/#000.png">
    </div>
    <!--商品詳細-->
    <div id="itemedtail">
        <p>商品詳細</p>
    </div>
    <!--商品名と値段をDBから持ってこれると最高-->
    <div id="itemname">
        <h2>商品名</h2>
    </div>
    <div id="itemprice">
        <h2>￥XXXX-</h2>
    </div>
    <div id="itemtags">
        <ul class="itemdetailtags">
            <li>#商品タグ1</li>
            <li>#商品タグ2</li>
        </ul>
    </div>
    <!--カートへボタンは値段の真下固定が楽ならそれがいいかも-->
   <!--ボタン押されたときにSQL動いてDBに追加とかできる？-->
    <button type="submit" value="カートへ"><!--ここにSQLとカート①へのリンク書く-->カートへ</button>
    <!--関連商品-->
    <!--タグが最も近い商品を検索して表示-->
    <!--SQLで検索した商品の表示-->
    <button type="submit"><img src="../pic/" alt="商品" /></button>
    <button type="submit"><img src="../pic/" alt="商品" /></button>
</main>

<!--使ってるアイコンのスクリプト-->
<script src="../js/main.js"></script>
<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>
</html>
