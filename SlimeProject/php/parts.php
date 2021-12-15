<link rel="stylesheet" href="../css/sidebar_proto.css">
<header>
    <div class="header_boss">
        <!--ヘッダーの左寄せ部分-->
        <div class="header_left">
            <a href="toppage.php"><img src="../pic/logo.png"></a>
        </div>
        <!--ヘッダーの右寄せ部分-->
        <ul class="header_right">
            <!--検索ボックス-->
            <li class="header_right_item">
                <form method="post" action="searchresult.php" class="keyword"> <!--キーワード検索用form-->
                    <div class="header_items3">
                        <input type="text" name="search" id="search" placeholder="キーワード検索" class="keyword_box">
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
                    <a href="cart.php"><ion-icon name="cart-outline" class="header_icon2"></ion-icon>
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
            <li><a class="top" href="toppage.php">TOP</a></li>
            <li><a href="http://aso2001187.babymilk.jp/Slime/SlimeProject/php/searchresult.php?param=gender">性別</a>
                <ul>
                    <li><a href="http://aso2001187.babymilk.jp/Slime/SlimeProject/php/searchresult.php?param=men">男性</a></li>
                    <li><a href="http://aso2001187.babymilk.jp/Slime/SlimeProject/php/searchresult.php?param=women">女性</a></li>
                    <li><a href="http://aso2001187.babymilk.jp/Slime/SlimeProject/php/searchresult.php?param=other1">その他</a></li>
                </ul>
            </li>
            <li><a href="http://aso2001187.babymilk.jp/Slime/SlimeProject/php/searchresult.php?param=atmoth">雰囲気</a>
                <ul>
                    <li><a href="http://aso2001187.babymilk.jp/Slime/SlimeProject/php/searchresult.php?param=cool">かっこいい</a></li>
                    <li><a href="http://aso2001187.babymilk.jp/Slime/SlimeProject/php/searchresult.php?param=cute">かわいい</a></li>
                    <li><a href="http://aso2001187.babymilk.jp/Slime/SlimeProject/php/searchresult.php?param=other2">その他</a></li>
                </ul>
            </li>
            <li><a href="http://aso2001187.babymilk.jp/Slime/SlimeProject/php/searchresult.php?param=genre">ジャンル</a>
                <ul>
                    <li><a href="http://aso2001187.babymilk.jp/Slime/SlimeProject/php/searchresult.php?param=tops">トップス</a></li>
                    <li><a href="http://aso2001187.babymilk.jp/Slime/SlimeProject/php/searchresult.php?param=bottoms">ボトム</a></li>
                    <li><a href="http://aso2001187.babymilk.jp/Slime/SlimeProject/php/searchresult.php?param=other3">その他</a></li>
                </ul>
            </li>
            <li class="small"><a href="#0">Contact</a></li>
        </ul>
    </div>
</div>