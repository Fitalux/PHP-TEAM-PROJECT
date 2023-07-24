<header id="header">
    <div class="header__inner">
        <div class="util">
            <h1><a href="../main/main.php">영양많닭</a></h1>
            <ul>
            <?php if(isset($_SESSION['memberID'])){ ?>
                    <li><?=$_SESSION['youName'] ?>님</li>
                    <li><a href="../login/logout.php">로그아웃</a></li>
            <?php } else { ?>
                    <li><a href="../join/join.php">회원가입</a></li>
                    <li><a href="../login/login.php">로그인</a></li>
            <?php } ?>
            <?php
                if(isset($_SESSION['memberID'])) {
                    // 로그인된 경우
                    echo '<li><a href="../Mypage/Mypage.php">마이페이지</a></li>';
                } else {
                    // 로그인되지 않은 경우
                    echo '<li><a href="../login/login.php" onclick="alert(\'마이페이지는 회원만 이용할 수 있습니다. 로그인을 해주세요.\')">마이페이지</a></li>';
                }
            ?>
                <li><a href="../serviceCenter/serviceCenter.php">고객센터</a></li>
            </ul>
        </div>
    </div>
</header>
<!-- header -->
<nav id="nav">
    <ul>
        <li class="nav__link"><a id="menu1" href="../new-product/new-product.php">신제품</a></li>
        <?php
            if(isset($_SESSION['memberID'])) {
                // 로그인된 경우
                echo '<li class="nav__link"><a id="menu2" href="../ranking/ranking.php">랭킹</a></li>';
            } else {
                // 로그인되지 않은 경우
                echo '<li class="nav__link"><a id="menu2" href="../login/login.php" onclick="alert(\'랭킹은 회원만 이용할 수 있습니다. 로그인을 해주세요.\')">랭킹</a></li>';
            }
        ?>
        <?php
            if(isset($_SESSION['memberID'])) {
                // 로그인된 경우
                echo '<li class="nav__link"><a id="menu3" href="../MyPick/MyPick.php">MyPick</a></li>';
            } else {
                // 로그인되지 않은 경우
                echo '<li class="nav__link"><a id="menu3" href="../login/login.php" onclick="alert(\'MyPick은 회원만 이용할 수 있습니다. 로그인을 해주세요.\')">MyPick</a></li>';
            }
        ?>
        <li class="nav__link"><a id="menu4" href="../brand/brand.php">브랜드관</a></li>
        <li class="nav__link"><a id="menu5" href="../community/community.php">커뮤니티</a></li>
    </ul>
</nav>
<!-- nav -->