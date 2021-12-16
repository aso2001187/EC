<?php session_start();?>
<?php unset($_SESSION['customer']) ?>
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
    <link rel="stylesheet" href="../css/login.css">
</head>
<body>
<!--ここから上部ヘッダー-->
<?php
require 'parts.php';
?>
<!--サイドバー終わり-->

<!--ここからメインエリア-->
<main>

    <div class="main_area">
        <h1>ログイン</h1>
        <?php
        $mail=$_POST['email'];
        $pw=$_POST['password'];
        if (empty($_POST["email"])) {
            echo'attention';
        }
        $pdo=new PDO('mysql:host=mysql152.phy.lolipop.lan;
            dbname=LAA1291072-team;charset=utf8',
            'LAA1291072',
            'asot6');
        $sql=$pdo->prepare('select * from customer where customer.C_email = ? and customer.C_id and (select password.p_id from password where password.p_pass = ?)');
        $sql->execute([$mail,$pw]);
        foreach ($sql as $row){
            $_SESSION['customer'] = [
                'id' => $row['C_id'],
                'name' => $row['C_name'],
                'postcode' => $row['C_postcode'],
                'address1' => $row['C_address1'],
                'address2' => $row['C_address2'],
                'phone' => $row['C_phone'],
                'email' => $row['C_email']
            ];
        }
        if(isset($_SESSION['customer'])){
            echo $_SESSION['customer']['name'],'さん ようこそ';
            echo '<p>ウィンドウを閉じるかログイン画面を開くことでログアウトできます</p>';
            echo '<br><a href="toppage.php">トップページに戻る</a>';
            echo '<br><a href=prof.php>会員情報編集</a>';
        }else{
            echo 'ログイン失敗';
        }
        ?>                                          <!--ログインフォームここまで-->
    </div>
</main>

<!--使ってるアイコンのスクリプト-->
<script src="../js/main.js"></script>
<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>
</html>
