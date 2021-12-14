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
    <link rel="stylesheet" href="../css/buy-1.css">
</head>
<body>
<!--ここから上部ヘッダー-->
<header>
    <div class="header_boss">
        <!--ヘッダーの左寄せ部分-->
        <div class="header_left">
            <a href="ここはtopページリンク"><img src="../pic/logo.png"></a>
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
    <div class="main_area">
        <?php
        $pdo=new PDO('mysql:host=mysql152.phy.lolipop.lan;
            dbname=LAA1291072-team;charset=utf8',
            'LAA1291072',
            'asot6');
        $time=time();
        $dae=date('Y-m-d');
        //$sql=$pdo->prepare('insert into order(o_id,o_order,o_date,o_send) values(:id,:order,:date,1)');
        $sql=$pdo->prepare('insert into order(o_id,o_orderid,o_date,o_send) values(?,?,?,?)');
        $sql->bindValue(1,$_SESSION['customer']['id']);
        $sql->bindValue(2,$time);
        $sql->bindValue(3,$dae);
        $sql->bindValue(4,1);
        //$params=array(':id'=>$_SESSION['customer']['id'],':order'=>$time,':date'=>$dae);
        $sql->execute();

        $sql2=$pdo->prepare('insert into orderdetail(od_orderid,od_itemid,od_quantity) values(:odid,:itemid,:itemqua)');

        $sql3=$pdo->prepare('select * from carton where ca_id=?');
        $sql3->bindValue(1,$_SESSION['customer']['id']);
        $sql3->execute();

        $itemid=null;
        $itemqua=null;
        $meow=null;
        foreach($sql3 as $row){
            $itemid=$row['ca_itemid'];
            $itemqua=$row['ca_number'];
            $params2=array(':odid'=>$time,':itemid'=>$itemid,':itemqua'=>$itemqua);
            $sql2->execute($params2);
            $meow=1;
        }
        if($meow===1){
            $sql4=$pdo->prepare('delete from carton where ca_id=?');
            $sql4->bindValue(1,$_SESSION['customer']['id']);
            $sql4->execute();
        }

        

        ?>
        注文完了しました。
        <a href="toppage.php"><p>TOPへ戻る</p></a>
    </div>
</main>

<!--使ってるアイコンのスクリプト-->
<script src="../js/main.js"></script>
<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>
</html>