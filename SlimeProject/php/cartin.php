<?php
session_start();
if(isset($_SESSION['customer'])) {
    /*ログインしているときの処理*/
    $pdo = new PDO('mysql:host=mysql152.phy.lolipop.lan;
            dbname=LAA1291072-team;charset=utf8',
        'LAA1291072',
        'asot6');
    $number = null;
    $sql = $pdo->prepare('SELECT ca_itemid,ca_id,ca_number FROM carton WHERE ca_id = ? AND ca_itemid = ?');
    $sql->execute([$_SESSION['customer']['id'],$_SESSION['item_id']]);
    foreach ($sql as $row) {
        $number = $row['ca_number'];
    }
    if (isset($number)) {
        $sql = $pdo->prepare('UPDATE carton SET ca_number = ? WHERE ca_id = ? and ca_itemid = ?');
        $sql->bindValue(1, $number + 1);
        $sql->bindValue(2, $_SESSION['customer']['id']);
        $sql->bindValue(3, $_SESSION['item_id']);
    }else{
        $sql = $pdo->prepare('insert into carton(ca_itemid,ca_id,ca_number) values (?,?,?)');
        $sql->bindValue(1, $_SESSION['item_id']);
        $sql->bindValue(2, $_SESSION['customer']['id']);
        $sql->bindValue(3, 1);
    }
    $sql->execute();
    $sql = null;
    $pdo = null;
    require_once '../php/toppage.php';
}else{
    //ログインしていなければcart-login.phpに飛ばす
    header('Location:cart-login.php');
}
?>
