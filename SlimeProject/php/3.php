<?php session_start()?>
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
<?php require 'parts.php';?>
<!--サイドバー終わり-->

<!--ここからメインエリア-->
<main>
    <?php
    $pdo=new PDO('mysql:host=mysql152.phy.lolipop.lan;
            dbname=LAA1291072-team;charset=utf8',
        'LAA1291072',
        'asot6');

    unset($_SESSION['itemid']);
    $_SESSION['item_id'] =3;

    $sql = $pdo->prepare('SELECT g_name,g_price FROM goods WHERE g_itemid = ?');
    $sql->execute([$_SESSION['item_id']]);
    foreach ($sql as $row){
        $row['g_name'];$row['g_price'];


    }

    $sql2 = $pdo->prepare('SELECT tag.t_tagid as t_tagid,tag.t_tagname as t_tagname,tag.t_tagclass as t_tagclass FROM tag inner join tagmanage on tagmanage.tm_tagid = tag.t_tagid WHERE tagmanage.tm_itemid=?');

    $sql2->bindValue(1,$_SESSION['item_id']);
    $sql2->execute();

    ?>
    <div class="in">
        <!--とりあえずdiv idでそれぞれ囲っているよ-->
        <!--商品画像 cssで回り込み処理-->
        <div class="itemimg">
            <!--画像アップロード前-->
            <img class="png" src="../pic/<?= $_SESSION['item_id']?>.png">
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
                        <br>
                        <br>
                        <br>
                        商品説明下ギリはここらへん
                    </span>
            </div>
        </div>
        <div class="mains">
            <div class="main_left">
                <!--商品名と値段をDBから持ってこれると最高-->
                <div id="itemname">
                    <h2><!--商品名--><?= $row['g_name'] ?></h2>
                </div>
                <div id="itemprice">
                    <h2>￥<?= $row['g_price'] ?></h2>
                </div>
                <div id="itemtags">
                    <ul class="itemdetailtags">
                        <?php
                        foreach ($sql2 as $row1){
                            $row1['t_tagid'];$row1['t_tagname'];$row1['t_tagclass'];
                            echo '<li><a href="http://aso2001187.babymilk.jp/Slime/SlimeProject/php/searchresult.php?param=',$row1['t_tagid'],'">',$row1['t_tagname'],'</a></li>';
                        };
                        ?>
                    </ul>
                </div>
                <!--カートへボタンは値段の真下固定が楽ならそれがいいかも-->
                <!--ボタン押されたときにSQL動いてDBに追加とかできる？-->
                <!--<input type="hidden" name="redirect">
                    <input type="hidden" name="item_id" value="<? /*$_SESSION['item_id']*/?>">
                    <input type="hidden" name="number">-->
                <a href="cartin.php"><!--ここにSQLとカート①へのリンク書く-->カートに入れてトップページに戻る</a>
            </div>
            <div class="main_right">
                <!--関連商品-->
                <!--タグが最も近い商品を検索して表示-->
                <!--SQLで検索した商品の表示-->
                <p>関連商品</p>
                <div>
                    <div class="otheritem1"><a href="4.php"><img src="../pic/4.png" alt="関連商品" /></a></div>
                    <div class="otheritem2"><a href="5.php"><img src="../pic/5.png" alt="関連商品" /></a></div>
                </div>
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

