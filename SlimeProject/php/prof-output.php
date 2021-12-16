<?php session_start();?>
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
<?php
require 'parts.php';
?>
<!--サイドバー終わり-->

<!--ここからメインエリア-->
<main>
    <?php

    $pdo = new PDO('mysql:host=mysql152.phy.lolipop.lan;
            dbname=LAA1291072-team;charset=utf8',
        'LAA1291072',
        'asot6');

    $sql = $pdo->prepare('update customer set C_name = ?, C_postcode = ?, C_address1 = ?, C_address2 = ?, C_phone = ?, C_email = ? where C_id = ?');

    $sql->bindValue(1,$_POST['name'], PDO::PARAM_STR);
    $sql->bindValue(2,$_POST['postcode'], PDO::PARAM_STR);
    $sql->bindValue(3,$_POST['address1'], PDO::PARAM_STR);
    $sql->bindValue(4,$_POST['address2'], PDO::PARAM_STR);
    $sql->bindValue(5,$_POST['phone'], PDO::PARAM_STR);
    $sql->bindValue(6,$_POST['email'], PDO::PARAM_STR);
    $sql->bindValue(7,$_SESSION['customer']['id'], PDO::PARAM_STR);
    $sql->execute();

        echo '<p>更新完了しました</p>';
        echo '<br><a href="toppage.php">トップページに戻る</a>';
    ?>

</main>

<!--使ってるアイコンのスクリプト-->
<script src="../js/main.js"></script>
<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>
</html>
