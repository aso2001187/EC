<?php
$pdo=new PDO('mysql:host=mysql152.phy.lolipop.lan;
            dbname=LAA1291072-team;charset=utf8',
    'LAA1291072',
    'asot6');


if(isset($_POST['item_id'])){
    $sql=$pdo->prepare('insert into carton(ca_itemid,ca_id,ca_number) values (?,?,?)');
    $sql->bindValue(1,$_SESSION['customer']['id']);
    $sql->bindValue(2,$_POST['item_id']);
    $sql->bindValue(3,$_SESSION['']);
    $sql->execute();
    $sql = null;
    $pdo=null;
    require_once '../php/toppage.php';
}
?>
