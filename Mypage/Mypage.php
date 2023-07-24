<?php 
    include "../connect/connect.php";
    include "../connect/session.php";
?>
<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP 영양많닭 로그인</title>
    <?php include "../include/head.php" ?>
</head>
<body>
    <?php include "../include/header.php" ?>
    <!-- //header -->
    <div id="Mypage">
        <div class="Mypageimg">
            <div class="Mypageimg__min">
                <img class="Mypageimg1" src="../assets/img/complete_logo2.svg" alt="폭죽 이미지">
                <img class="profile" src="../assets/img/websimg.svg" alt="프로필 이미지">
                <img class="Mypageimg2" src="../assets/img/complete_logo2.svg" alt="폭죽 이미지">
            </div>
        </div>
        <div class="Mypagetext">
            <h1><?=$_SESSION['youName'] ?>님의 마이페이지</h1>
            <p>영양많닭에서 제공하는 개성 넘치는 마이페이지입니다.</p>
        </div>
        <div class="Mypagebox">
            <div class="Mypagebox1">
                <div class="Mypagebox2">
                    <a href="../serviceCenter/serviceCenter.php">
                        <img src="../assets/img/customer-service.svg" alt="고객센터 이미지">
                        <div class="Minline"></div>
                        <div class="boxname">고객 센터</div>
                    </a>
                </div>
            </div>
            <div class="Mypagebox1">
                <div class="Mypagebox2">
                    <a href="../MyPick/MyPick.php">
                        <img src="../assets/img/sungboon.svg" alt="성분비교 이미지">
                        <div class="Minline"></div>
                        <div class="boxname">성분 비교</div>
                    </a>
                </div>
            </div>
            <div class="Mypagebox1">
                <div class="Mypagebox2">
                    <a href="#">
                        <img src="../assets/img/active.svg" alt="활동 관리 이미지">
                        <div class="Minline"></div>
                        <div class="boxname">활동 관리</div>
                    </a>   
                </div>
            </div>
            <div class="Mypagebox1">
                <div class="Mypagebox2">
                    <a href="#">
                        <img src="../assets/img/settings.svg" alt="회원정보 이미지">
                        <div class="Minline"></div>
                        <div class="boxname">회원정보 수정</div>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!-- //Mypage -->
    <?php include "../include/footer.php" ?>
    <!-- // footer -->
</body>
</html>