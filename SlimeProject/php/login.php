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
<header>
    <div class="header_boss">
        <!--ヘッダーの左寄せ部分-->
        <div class="header_left">
            <a href="#???"><img src="../pic/logo.png"></a>
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
                </form><!--キーワード検索フォームここまで-->
            </li>
            <!--ログインボタン-->
            <li class="header_right_item">
                <div class="header_items">
                    <a href="#???"><ion-icon name="person-outline" class="header_icon1"></ion-icon>
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
    <div class="main_area">
        <h1>ログイン</h1>
        <form method="post" action="login-out.php" class="login_cls"> <!--ログイン用form-->
            <ul>
                <li><p>メールアドレス</p>
                    <input type="email" id="email" name="email" placeholder="your@mail.address" required>
                </li>
                <li><p>パスワード</p>
                    <input type="password" id="password" name="password" placeholder="your password" required>
                </li>
            </ul>
            <div class="under">
                <a href="signup.html" class="sign_up">会員登録はこちら</a>
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
