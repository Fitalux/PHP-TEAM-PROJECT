<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>회원가입 이용약관 동의</title>
    <?php include "../include/head.php" ?>
</head>
<body>
    <?php include "../include/header.php" ?>
    <div id="Termsupwrap">
        <div id="Termsupmodal">
            <div class="img1">
                <img src="../assets/img/Ximg.svg" alt="닫기">
            </div>
            <h2>이용약관 동의</h2>
            <div class="Termsup__form">
                <form action="join2.php" name="join2" method="post" onsubmit="return checkBoxFind()">
                    <fieldset>
                        <legend class="blind">이용약관 영역</legend>
                        <div class="Term__box">제 1 장 총 칙<br>
                            제 1 조 (목적)이 약관은 {영양많닭}(이하 "사이트"라 합니다)에서 제공하는 인터넷서비스(이하 "서비스"라 합니다)의 
                            이용 조건 및 절차에 관한 기본적인 사항을 규정함을 목적으로 합니다.
                            제 2 조 (약관의 효력 및 변경)① 이 약관은 서비스 화면이나 기타의 방법으로 이용고객에게 공지함으로써 효력을 발생합니다.
                            ② 사이트는 이 약관의 내용을 변경할 수 있으며, 변경된 약관은 제1항과 같은 방법으로 공지 또는 통지함으로써 효력을 발생합니다.
                            제 3 조 (용어의 정의)이 약관에서 사용하는 용어의 정의는 다음과 같습니다.
                            ① 회원 : 사이트와 서비스 이용계약을 체결하거나 이용자 아이디(ID)를 부여받은 개인 또는 단체를 말합니다.
                            ② 신청자 : 회원가입을 신청하는 개인 또는 단체를 말합니다.
                            ③ 아이디(ID) : 회원의 식별과 서비스 이용을 위하여 회원이 정하고 사이트가 승인하는 문자와 숫자의 조합을 말합니다.
                            ④ 비밀번호 : 회원이 부여 받은 아이디(ID)와 일치된 회원임을 확인하고, 회원 자신의 비밀을 보호하기 위하여 회원이 정한 문자와 숫자의 조합을 말합니다.
                            ⑤ 해지 : 사이트 또는 회원이 서비스 이용계약을 취소하는 것을 말합니다.
                            제 2 장 서비스 이용계약
                            제 4 조 (이용계약의 성립)① 이용약관 하단의 동의 버튼을 누르면 이 약관에 동의하는 것으로 간주됩니다.
                            ② 이용계약은 서비스 이용희망자의 이용약관 동의 후 이용 신청에 대하여 사이트가 승낙함으로써 성립합니다.
                            .....</div>
                            <div class="item">
                                <div class="check">
                                    <input type="checkbox" id="check1" name="check1">
                                    <label for="check1">이용약관에 동의합니다.</label>
                                </div>
                                <div class="check">
                                    <input type="checkbox" id="check2" name="check2">
                                    <label for="check2">개인정보수집 및 이용에 동의합니다.</label>
                                </div>
                            </div>
                        <button type="submit" class="button">다음</button>
                    </fieldset>
                </form>
            </div>
        </div>
    </div>

    <?php include "../include/footer.php" ?>
</body>
</html>