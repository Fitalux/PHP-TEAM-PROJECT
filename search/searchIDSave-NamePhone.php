<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>search ID Save(Name,Phone)</title>
    <?php include "../include/head.php"?>
    <!-- // head(CSS) -->
</head>
<body>
    <?php include "../include/header.php" ?>
    <!-- //header -->
<?php
        include "../connect/connect.php";
        $searchName = $_POST['youName'];
        $searchPhone = $_POST['youPhone'];
        // echo $searchName;
        // echo $searchPhone;
        // ID 조회 쿼리
        $sql = "SELECT youID FROM yungyangMember WHERE youName = '$searchName' AND youPhone = '$searchPhone'";
        $result = $connect -> query($sql);
?>
    <main id="main">
        <div id="wrap">
                <div id="modal__searchComplete">
                    <div class="img1">
                        <img src="../assets/img/Ximg.svg" alt="닫기">
                    </div>
                    <div class="guide">
                    <h3>아이디 찾기 완료</h3>
                    <?php
                        if ($result) {
                            $count = $result->num_rows;
                            $memberInfo = $result -> fetch_array(MYSQLI_ASSOC);
                            if ($count > 0) {
                                // ID가 존재하는 경우
                                ?>
                                <p class="sub_text">짜자잔! 회원님의 아이디를 찾았습니다.</p>
                                <p class="main_text">회원님의 아이디는<br>
                                <span><?= $memberInfo['youID'] ?></span> 입니다.<br>
                                        로그인 화면으로 돌아가서<br>
                                        로그인 해주세요.</p>
                                <form action="../login/login.php" name="login" method="post">
                                <fieldset>
                                    <button type="submit" class="login__button btnStyle2">로그인 화면 가기</button>
                                </fieldset>
                                </form>
                                <?php
                            } else {
                                // ID가 존재하지 않는 경우
                                ?>
                                <p class="sub_text">으헝헝ㅜㅜ<br> 회원님의 아이디를 찾지 못했습니다.</p>
                                <p class="main_text">입력하신 회원정보와 일치하는 ID를 찾을 수 없습니다.<br>
                                        먼저 회원가입 절차를 진행해주세요.</p>
                                <form action="../join/join.php" name="join" method="post">
                                <fieldset>
                                    <button type="submit" class="login__button btnStyle2">회원가입하러 가기</button>
                                </fieldset>
                                </form>
                                <?php
                            }
                        }
                    ?>
    </main>
    <!-- //main -->
    <?php include "../include/footer.php" ?>
    <!-- // footer -->
</body>
</html>