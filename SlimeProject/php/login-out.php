<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>Slime</title>
    <link rel="stylesheet" href="../css/css">
</head>
<body>
<?php
$pdo=new PDO('mysql:host=mysql152.phy.lolipop.lan;
            dbname=LAA1291072-team;charset=utf8',
    'LAA1291072',
    'asot6');

$sql=$pdo->prepare('select * from user where mail=? and password=?');
$sql->execute([$_POST['email'],$_POST['password']]);

foreach ($sql as $row) {
    $name= $row['user_name'];
}
if(isset($name)){
    echo $name,'さん、ようこそ！';
}else{
    echo 'ID or Pass err';
}
$pdo = null;
?>
</body>
</html>

