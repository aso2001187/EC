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
<?php
require "parts.php";
?>
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
        $sql=$pdo->prepare('insert into orders values(?,?,?,?)');
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
        <?= $time ?>
        <?= $dae ?>
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