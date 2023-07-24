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
    <div id="Loginwrap">
        <div id="Loginmodal">
            <div class="img1">
                <img src="../assets/img/Ximg.svg" alt="닫기">
            </div>
            <h2>LOGIN</h2>
            <div id="logo">
                <img src="../assets/img/logo.svg" alt="로고">
            </div>
            <div class="login__form">
                <form action="loginsave.php" name="loginSave" method="post">
                    <fieldset>
                        <legend class="blind">로그인 영역</legend>
                        <div class="user-box">
                            <label for="youID">아이디</label>
                            <input type="youID" id="youID" name="youID" placeholder="아이디" required>
                        </div>
                        <div  class="user-box">
                            <label for="youPass">비밀번호</label>
                            <input type="password" id="youPass" name="youPass" placeholder="비밀번호" required>
                        </div>
                        <div class="option">
                            <li><a href="../search/searchID.php">아이디 찾기</a></li>
                            <li><a href="../search/searchPW.php">비밀번호 변경</a></li>
                            <li><a href="../join/join.php">회원가입</a></li>
                        </div>
                        <button type="submit" class="button">로그인</button>
                    </fieldset>
                </form>
            </div>
        </div>
    </div>
    <!-- //main -->
    <?php include "../include/footer.php" ?>
    <!-- // footer -->
</body>
</html>