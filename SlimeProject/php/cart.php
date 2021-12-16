<?php  if (!isset($_SESSION)){session_start();};?>
<?php
if(!isset($_SESSION['customer'])) {/*ログインされていないならログインに遷移*/
    header('Location:cart-login.php');
}
$pdo=new PDO('mysql:host=mysql152.phy.lolipop.lan;
            dbname=LAA1291072-team;charset=utf8',
    'LAA1291072',
    'asot6');
/*削除ボタンのリダイレクト(一端実装停止)*/
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
<?php
require 'parts.php';
?>
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
                    echo '<p>個数：',$number,'</p>';
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
            <button class="cart_btn" onclick="location.href='buy-1.php'">会計へ進む</button>
        </div>
    </div>
</main>
<?php
unset($_SESSION['itemid']);
?>

<!--使ってるアイコンのスクリプト-->
<script src="../js/main.js"></script>
<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>
</html>
