<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php include "../include/head.php"?>
</head>
<body>
    <?php include "../include/header.php"?>
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
                <form action="login.php" name="login" method="post">
                    <fieldset>
                        <button class="button">로그인</button>
                    </fieldset>
                </form>
            </div>
        </div>
    </div>
    <?php include "../include/footer.php" ?>
    <!-- // footer -->
</body>
</html>