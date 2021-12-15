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
    <link rel="stylesheet" href="../css/buy-2.css">
</head>
<body>
<!--ここから上部ヘッダー-->
<?php
require "parts.php";
?>
<!--ここからメインエリア-->
<main>
    <div id="main">
        <div id="client">
            <h1>お客様情報</h1>
            <ul>
                <li><?= $_POST['name'] ?></li>
                <li><?= $_POST['postcode'] ?></li>
                <li><?= $_POST['address1'] ?></li>
                <li><?= $_POST['address2'] ?></li>
                <li><?= $_POST['phone'] ?></li>
                <li><?= $_POST['email'] ?></li>
            </ul>
            <?php
            $pdo=new PDO('mysql:host=mysql152.phy.lolipop.lan;
            dbname=LAA1291072-team;charset=utf8',
                'LAA1291072',
                'asot6');
            $sql=$pdo->prepare('update costomer set C_name=?,C_postcode=?,C_address1=?,C_address2=?,C_phone=?,C_email=? where C_id=?');
            $sql->bindValue(1,$_POST['name']);
            $sql->bindValue(2,$_POST['postcode']);
            $sql->bindValue(3,$_POST['address1']);
            $sql->bindValue(4,$_POST['address2']);
            $sql->bindValue(5,$_POST['phone']);
            $sql->bindValue(6,$_POST['email']);
            $sql->bindValue(7,$_SESSION['customer']['id']);
            $sql->execute();
            ?>
            <!--前のページからお客様情報を持ってくる-->
        </div>
        <br>
        <div id="total">
            <h1>会計情報</h1>
        </div>
        <div class="container1">
            <div class="container2">
                <div class="item1">金額</div>
                <div class="item2"><?= $_SESSION['kingaku']?>円</div>
            </div>
            <div class="container2">
                <div class="item1">消費税</div>
                <div class="item2"><?php $tax=$_SESSION['kingaku']*0.1; echo $tax; ?>円</div>
            </div>
            <div class="container2 aaa">
                <div class="item1">小計</div>
                <div class="item2"><?= $_SESSION['kingaku']+$tax;?>円</div>
            </div>
        </div>
        <div id="order">
            <form method="post" action="buy-2-out.php">
            <input type="submit" class="order_btn" value="注文確定">
            </form>
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

