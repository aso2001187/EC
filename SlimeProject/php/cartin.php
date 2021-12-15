<?php
session_start();
$pdo=new PDO('mysql:host=mysql152.phy.lolipop.lan;
            dbname=LAA1291072-team;charset=utf8',
    'LAA1291072',
    'asot6');
    $number = null;
    $sql = $pdo->prepare('SELECT ca_itemid,ca_id,ca_number FROM carton WHERE ca_itemid = ?');
    $sql->execute([$_POST['item_id']]);
    foreach ($sql as $row){
        $number = $row['ca_number'];
    }
    if(isset($number)){
        $sql=$pdo->prepare('insert into carton(ca_itemid,ca_id,ca_number) values (?,?,?)');
        $sql->bindValue(1,$_SESSION['customer']['id']);
        $sql->bindValue(2,$_POST['item_id']);
        $sql->bindValue(3,1);
    }else{
        $sql=$pdo->prepare('UPDATE carton SET ca_number = ? WHERE ca_id = ? and ca_itemid = ?');
        $sql->bindValue(1,$number+1);
        $sql->bindValue(2,$_SESSION['customer']['id']);
        $sql->bindValue(3,$_POST['item_id']);
    }
    $sql->execute();
    $sql = null;
    $pdo=null;
    require_once '../php/toppage.php';
?>
