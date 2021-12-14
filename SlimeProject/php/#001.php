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
    <link rel="stylesheet" href="../css/001.css">
</head>
<body>
<!--ここから上部ヘッダー-->
<header>
    <div class="header_boss">
        <!--ヘッダーの左寄せ部分-->
        <div class="header_left">
            <a href="0"><img src="../pic/logo.png"></a>
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
    <?php
    $pdo=new PDO('mysql:host=mysql152.phy.lolipop.lan;
            dbname=LAA1291072-team;charset=utf8',
        'LAA1291072',
        'asot6');

    $sql = $pdo->query('SELECT g_name,g_price FROM goods WHERE g_itemid = 1');

    foreach ($sql as $row){
        $row['g_name'];$row['g_price'];
    }

    $tm_itemid = 1;
    $sql = $pdo->prepare('SELECT tag.t_tagid,tag.t_tagname,tag.t_tagclass FROM tag inner join tagmanageon tagmanage.tm_tagid = tag.t_tagid WHERE tagmanage.tm_itemid=?');

    $sql->bindValue(1,$tm_itemid,PDO::PARAM_STR);
    $sql->execute();

    foreach ($sql as $row1){
        $row1['t_tagid'];$row1['t_tagname'];$row1['t_tagclass'];
    }

    $pdo = null;
    ?>
    <div class="in">
        <!--とりあえずdiv idでそれぞれ囲っているよ-->
        <!--商品画像 cssで回り込み処理-->
        <div class="itemimg">
            <!--画像アップロード前-->
            <img class="png" src="../pic/001.png">
            <!--商品詳細 改行はbrで-->
            <div id="itemedtail">
            <span>
                ここに商品説明を記述します。<br>
                改行はbrタグを使用して改行してください<br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br><br><br>
                商品説明下ギリはここらへん
            </span>
            </div>
        </div>
        <div class="mains">
            <div class="main_left">
                <!--商品名と値段をDBから持ってこれると最高-->
                <div id="itemname">
                    <h2><!--商品名--><input name="g_name" value=<?= $row['g_name'] ?>></h2>
                </div>
                <div id="itemprice">
                    <h2>￥<input name="g_price" value=<?= $row['g_price'] ?>></h2>
                </div>
                <div id="itemtags">
                    <ul class="itemdetailtags">
                        <li><a>#商品タグ1<?= $row1['t_tagname'] ?></a></li>
                        <li><a>#商品タグ2<?= $row1['t_tagname'] ?></a></li>
                    </ul>
                </div>
                <!--カートへボタンは値段の真下固定が楽ならそれがいいかも-->
                <!--ボタン押されたときにSQL動いてDBに追加とかできる？-->
                <button type="submit"><!--ここにSQLとカート①へのリンク書く-->カートへ</button>
                    </div>
                </form>
            </div>
            <div class="main_right">
                <!--関連商品-->
                <!--タグが最も近い商品を検索して表示-->
                <!--SQLで検索した商品の表示-->
                <p>関連商品</p>
                <button type="submit"><img src="../pic/004.png" alt="商品" /></button>
                <button type="submit"><img src="../pic/005.png" alt="商品" /></button>
            </div>
        </div>
    </div>
</main>

<!--使ってるアイコンのスクリプト-->
<script src="../js/main.js"></script>
<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>
</html>
