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
    <link rel="stylesheet" href="../css/searchresult.css">
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
    /*先に表示件数ようの変数か配列を宣言しておいて検索する件数もそれを上限にして結果もそれぞれにいれておいてもいいかも*/
    $limit = 6;/*6件表示する*/
    if(isset($_POST['search'])) {/*キーワード検索の場合*/
        $sql = $pdo->prepare('SELECT g_itemid FROM goods WHERE g_name LIKE ? LIMIT 0,?');
        $sql->bindValue(1,'%'.$_POST['search'].'%');
        $sql->bindValue(2,(int)$limit,PDO::PARAM_INT);
        $sql->execute();
        foreach ($sql as $row){
            $itemidArray[] = $row['g_itemid'];
        }
    }elseif(isset($_GET['param'])){/*タグ検索の場合*/
        $sql = $pdo->prepare('SELECT tm_itemid FROM tagmanage WHERE tm_tagid = ? LIMIT 0,?');
        $sql->bindValue(1,$_GET['param']);
        $sql->bindValue(2,(int)$limit,PDO::PARAM_INT);
        $sql->execute();
        $itemidArray =[];
        foreach ($sql as $row) {
            $itemidArray[] = $row['tm_itemid'];

        }
    }
    ?>
    <div class="main">
        <div class="tags">
            <ul>
                <li><a href="http://aso2001187.babymilk.jp/Slime/SlimeProject/php/searchresult.php?param=999999">性別</a>
                    <ul>
                        <li><a href="http://aso2001187.babymilk.jp/Slime/SlimeProject/php/searchresult.php?param=1">男性</a></li>
                        <li><a href="http://aso2001187.babymilk.jp/Slime/SlimeProject/php/searchresult.php?param=2">女性</a></li>
                        <li><a href="http://aso2001187.babymilk.jp/Slime/SlimeProject/php/searchresult.php?param=3">その他</a></li>
                    </ul>
                </li>
                <li><a href="http://aso2001187.babymilk.jp/Slime/SlimeProject/php/searchresult.php?param=999998">雰囲気</a>
                    <ul>
                        <li><a href="http://aso2001187.babymilk.jp/Slime/SlimeProject/php/searchresult.php?param=4">かっこいい</a></li>
                        <li><a href="http://aso2001187.babymilk.jp/Slime/SlimeProject/php/searchresult.php?param=5">かわいい</a></li>
                        <li><a href="http://aso2001187.babymilk.jp/Slime/SlimeProject/php/searchresult.php?param=6">その他</a></li>
                    </ul>
                </li>
                <li><a href="http://aso2001187.babymilk.jp/Slime/SlimeProject/php/searchresult.php?param=999997">ジャンル</a>
                    <ul>
                        <li><a href="http://aso2001187.babymilk.jp/Slime/SlimeProject/php/searchresult.php?param=7">トップス</a></li>
                        <li><a href="http://aso2001187.babymilk.jp/Slime/SlimeProject/php/searchresult.php?param=8">ボトム</a></li>
                        <li><a href="http://aso2001187.babymilk.jp/Slime/SlimeProject/php/searchresult.php?param=9">その他</a></li>
                    </ul>
                </li>
            </ul>
        </div>
        <?php
        /*最大で6件商品表示で終わり*/
        echo '<div class="itemimg>';
        if (isset($itemidArray[0])){
            /*<?php $item1 = rand(1,$item)?><a href="<?=$item1 ?>.php"><?PHP echo '<img src="../pic/',$item1,'.png" alt="商品">';?></a>*/
            echo '<div class="item1"><a href="',$itemidArray[0],'.php"><img src="../pic/',$itemidArray[0],'.png" alt="商品"></a>';
        }else{
            echo '<p>該当する商品はありません</p>';
        }
        if (isset($itemidArray[1])){
            echo '<div class="item2"><a href="',$itemidArray[1],'.php"><img src="../pic/',$itemidArray[1],'.png" alt="商品"></a>';
            /*検索した条件に合う消費がなくなったら商品表示おわり 二個ずつひょうじ*/
        }
        echo '</div>';
        echo '<div class="itemimg>';
        if (isset($itemidArray[2])){
            echo '<div class="item1"><a href="',$itemidArray[2],'.php"><img src="../pic/',$itemidArray[2],'.png" alt="商品"></a>';
        }
        if (isset($itemidArray[3])){
            echo '<div class="item2"><a href="',$itemidArray[3],'.php"><img src="../pic/',$itemidArray[3],'.png" alt="商品"></a>';

        }
        echo '</div>';
        echo '<div class="itemimg>';
        if (isset($itemidArray[4])){
            echo '<div class="item1"><a href="',$itemidArray[4],'.php"><img src="../pic/',$itemidArray[4],'.png" alt="商品"></a>';
        }
        if (isset($itemidArray[5])) {
            echo '<div class="item2"><a href="', $itemidArray[5], '.php"><img src="../pic/', $itemidArray[5], '.png" alt="商品"></a>';
        }
        echo '</div>';
        ?>
    </div>

</main>

<!--使ってるアイコンのスクリプト-->
<script src="../js/main.js"></script>
<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>
</html>
