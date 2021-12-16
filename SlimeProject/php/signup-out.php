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
    <link rel="stylesheet" href="../css/signup.css">
</head>
<body>
<!--ここから上部ヘッダー-->
<?php
require 'parts.php';
?>
<!--サイドバー終わり-->
<!--ここからメインエリア--> <!--ここからした(mainの中)にコードお願いします！！！-->
<main>
    <?php
    $pdo=new PDO('mysql:host=mysql152.phy.lolipop.lan;
            dbname=LAA1291072-team;charset=utf8',
        'LAA1291072',
        'asot6');

    $C_email = $_POST['C_email'];
    $sql = $pdo->prepare('insert into customer(C_email) values (?) ');

    $sql->bindValue(1,$C_email,PDO::PARAM_STR);
    $sql->execute();
    $sql = $pdo->prepare('SELECT C_id FROM customer WHERE C_email = ?');
    $sql ->bindValue(1,$C_email);
    $sql->execute();
    foreach ($sql as $row){
        $C_id = $row['C_id'];
    }
    $p_pass = $_POST['p_pass'];
    $sql = $pdo->prepare('insert into password(p_id,p_pass) values (?,?)');
    $sql->bindValue(1,$C_id,PDO::PARAM_STR);
    $sql->bindValue(2,$p_pass,PDO::PARAM_STR);
    $sql->execute();
    ?>
    <div class="main_area">
        <p>登録完了しました</p>
    </div>
</main>
<!--使ってるアイコンのスクリプト-->
<script src="../js/main.js"></script>
<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>
</html>
