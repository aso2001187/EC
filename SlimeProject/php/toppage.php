<?php if (!isset($_SESSION)){session_start();}/*cartinからtoppageに戻った時に多重にせしょんスタートしてしまうのを防ぐため*/?>
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
    <!--一押し商品バー-->
    <div class="main_area">
        <!--ドメイン未記入--><a href="EC/SlimeProject/pic/"><!--画像なし--></a>
        <form action="cgi-bin/abc.cgi" method="post">
            <!--画像なし-->
            <?php
            $pdo=new PDO('mysql:host=mysql152.phy.lolipop.lan;
            dbname=LAA1291072-team;charset=utf8',
                'LAA1291072',
                'asot6');
            $sql=$pdo->query('select Max(g_itemid) as nomura from goods');
            foreach ($sql as $row){
                $item=$row['nomura'];
            };
            ?>
            <div class="topitemimg">
                <div class="item1"><?php $item1 = rand(1,$item)?><a href="<?=$item1 ?>.php"><?PHP echo '<img src="../pic/',$item1,'.png" alt="商品">';?></a></div>
                <div class="item2"><?php $item2 = rand(1,$item)?><a href="<?=$item2 ?>.php"><?PHP echo '<img src="../pic/',$item2,'.png" alt="商品">';?></a></div>
                <div class="item3"><?php $item3 = rand(1,$item)?><a href="<?=$item3 ?>.php"><?PHP echo '<img src="../pic/',$item3,'.png" alt="商品">';?></a></div>
                <br><br>
            </div>
            <div class="topitemimg">
                <div class="item1"><?php $item1 = rand(1,$item)?><a href="<?=$item1 ?>.php"><?PHP echo '<img src="../pic/',$item1,'.png" alt="商品">';?></a></div>
                <div class="item2"><?php $item2 = rand(1,$item)?><a href="<?=$item2 ?>.php"><?PHP echo '<img src="../pic/',$item2,'.png" alt="商品">';?></a></div>
                <div class="item3"><?php $item3= rand(1,$item)?><a href="<?=$item3 ?>.php"><?PHP echo '<img src="../pic/',$item3,'.png" alt="商品">';?></a></div>
            </div>
        </form>
    </div>
</main>

<!--使ってるアイコンのスクリプト-->
<script src="../js/main.js"></script>
<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>
</html>
