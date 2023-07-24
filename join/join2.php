<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>회원가입</title>
    <?php include "../include/head.php" ?>
</head>
<body>
    <?php include "../include/header.php" ?>
    <div id="Wrapjoinup">
        <div id="joinupmodal">
            <div class="img1">
                <img src="../assets/img/Ximg.svg" alt="닫기">
            </div>
            <div class="img2">
                <img src="../assets/img/logo.svg" alt="로고">
            </div>
            <div class="Termsup__form">
                <form action="joinsave.php" name="join" method="post">
                    <fieldset>
                        <legend class="blind">회원가입 영역</legend>
                        <div class="item">
                            <div>
                                <label for="youEmail" class="required">이메일</label><br>
                                <input type="text" id="youEmail" name="youEmail" placeholder="이메일을 적어주세요!" required>
                            </div>
                            <div>
                                <label for="youID" class="required">아이디</label><br>
                                <input type="text" id="youID" name="youID" placeholder="아이디를 적어주세요!" required>
                            </div>
                            <div>
                                <label for="youPass" class="required">비밀번호</label><br>
                                <input type="password" id="youPass"  name="youPass" placeholder="비밀번호를 적어주세요!" required>
                            </div>
                            <div>
                                <label for="youPassC" class="required">비밀번호 확인</label><br>
                                <input type="password" id="youPassC"  name="youPassC" placeholder="다시 비밀번호를 적어주세요!" required>
                            </div>
                            <div>
                                <label for="youName" class="required">이름</label><br>
                                <input type="text" id="youName" name="youName" placeholder="이름을 적어주세요!" required>
                            </div>
                            <div>
                                <label for="youPhone" class="required">연락처</label><br>
                                <input type="text" id="youPhone"  name="youPhone" placeholder="연락처를 적어주세요!" required>
                            </div>
                        </div>
                        <button type="submit" class="button">가입하기</button>
                    </fieldset>
                </form>
            </div>
        </div>
    </div>
    <?php include "../include/footer.php" ?>
</body>
</html>