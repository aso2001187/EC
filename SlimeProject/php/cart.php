<?php session_start();?>
<?php
$pdo=new PDO('mysql:host=mysql152.phy.lolipop.lan;
            dbname=LAA1291072-team;charset=utf8',
    'LAA1291072',
    'asot6');
/*削除ボタンのリダイレクト*/
if(!empty($_POST['delete'])) {
    $sql = $pdo->prepare('DELETE FROM carton WHERE ca_itemid = ? and ca_id = ?');
    $sql->bindValue(1, $_SESSION['itemid'], PDO::PARAM_STR);
    $sql->bindValue(2, $_SESSION['customer']['id'], PDO::PARAM_STR);
    $sql->execute();
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
    <link rel="stylesheet" href="../css/cart.css">
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

<!--ここからメインエリア--> <!--ここからした(mainの中)にコードお願いします！！！-->
<main>
    <div id="cart">
        <?php
        unset($_SESSION['kingaku']);
        $_SESSION['kingaku']=0;
        ?>
    <?php
    $id = $_SESSION['customer']['id'];
    $sql = $pdo->prepare('SELECT carton.ca_itemid,carton.ca_number,goods.g_price FROM carton LEFT JOIN goods ON carton.ca_itemid = goods.g_itemid WHERE ca_id = ?');
    $sql->bindValue(1,$id);
    $sql->execute();
    foreach ($sql as $row){
        $tanka=null;
echo <<<EOD
                <div id="goods"><!--DBのデータの数分増やす-->
                    <div id="itemimg">
                        <!--画像アップロード前-->
EOD;
                        $itemid = $row['ca_itemid'];
                        echo '<img src="../pic/',$itemid,'.png">';
                    echo '</div>';
                    $number = $row['ca_number'];
                    echo '<p>',$number,'</p>';
echo <<<EOD
                    <div id="itemdelete">
                        <form action="" method="post">
                            <input type="hidden" name="delete">
                            <!--削除ボタンの実装一旦停止・作るならリダイレクトかな？<button type="submit">削除</button>-->
                        </form>
                    </div>
                    <div id="itemprice">
EOD;
                        $tanka = $row['g_price'];
                        $syoukei= $number*$tanka;
                        echo '<p>単価：',$tanka,'</p>';
                        echo '<p>小計：',$syoukei,'</p>';
                        $_SESSION['kingaku']=$_SESSION['kingaku']+$syoukei;
                    echo '</div>';
                echo '</div>';
            }
        ?>
        <div id="itemsum">
            <p>値段合計<?=$_SESSION['kingaku']?></p>
        </div>
        <div id="total">
            <button class="cart_btn" onclick="location.href='buy-1.html'">会計へ進む</button>
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