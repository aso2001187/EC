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
    <link rel="stylesheet" href="../css/toppage.css">
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
            <li><a href="#0">##TAG1</a></li>
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
    <!--一押し商品バー-->
    <!--ドメイン未記入--><a href="EC/SlimeProject/pic/"><!--画像なし--><img src="../pic/"></a>
    <form action="cgi-bin/abc.cgi" method="post">
        <!--画像なし-->
        <div class="topitemimg">
            <div class="item1"><button type="submit"><img id="gazou1" src="../pic/" alt="商品" /></button></div>
            <div class="item2"><button type="submit"><img src="../pic/" alt="商品" /></button></div>
            <div class="item3"><button type="submit"><img src="../pic/" alt="商品" /></button></div>
            <br><br>
        </div>
        <div class="topitemimg">
            <div class="item1"><button type="submit"><img src="../pic/" alt="商品" /></button></div>
            <div class="item2"><button type="submit"><img src="../pic/" alt="商品" /></button></div>
            <div class="item3"><button type="submit"><img src="../pic/" alt="商品" /></button></div>
        </div>
    </form>
    <script type="text/javascript">
        var randomList = new Array(
            "../pic/001.png",
            "../pic/002.png"
            );
        var num = Math.floor(Math.random() * randomList.length);
        var img=document.getElementById("gazou1");
        img.src=randomList[num];
    </script>

</main>

<!--使ってるアイコンのスクリプト-->
<script src="../js/main.js"></script>
<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>
</html>
