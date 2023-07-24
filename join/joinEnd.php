<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>회원가입 완료페이지</title>
    <?php include "../include/head.php" ?>
</head>
<body>
    <?php include "../include/header.php" ?>
    <!-- //header -->
    <main id="Completewrap">
        <div id="Completemodal">
            <div id="joinEnd">
                <div class="img1">
                    <img src="../assets/img/Ximg.svg" alt="닫기">
                </div>
                <div class="logo">
                    <img src="../assets/img/complete_logo2.svg" alt="로고">
                </div>
                <div class="guide">
                <h3>축하합니다.<br>회원가입이 <span style="color: #FFA96B;">완료</span> 되었습니다.</h3>
                <p><span style="color: #FFA96B;">영양많닭</span> 회원에게 드리는<br>
                혜택을 누릴수있게 되었어요!</p>
                </div>
                <div class="login__form">
                    <form action="loginSave.php" name="loginSave" method="post">
                        <fieldset class="login__form1">
                        <a href="../login/login.php"><button type="submit" class="button">로그인</button></a>
                        </fieldset>
                    </form>
                </div>
            </div>
        </div>
    </main>
    <!-- //main -->
    <?php include "../include/footer.php" ?>
</body>
</html>