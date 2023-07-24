<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP 영양많닭 로그인 실패</title>
    <?php include "../include/head.php" ?>
</head>
<body>
    <?php include "../include/header.php" ?>
    <!-- //header -->
    <div id="outoutwrap">
        <div id="outmodal">
            <div class="img1">
                <img src="../assets/img/Ximg.svg" alt="닫기">
            </div>
            <div class="logo">
                <img src="../assets/img/loginfailed.svg" alt="로고">
            </div>
            <div class="guide">
            <h3>아이디 또는 이메일이 일치하지 않습니다.</h3>
            </div>
            <div class="login__form">
                <form action="loginSave.php" name="loginSave" method="post">
                    <fieldset>
                        <button class="button"><a href="login.php">로그인</a></button>
                    </fieldset>
                </form>
            </div>
        </div>
    </div>
    <?php include "../include/footer.php" ?>
    <!-- // footer -->
</body>
</html>