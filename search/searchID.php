<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search ID</title>
    <?php include "../include/head.php"?>
    <!-- // head(CSS) -->
</head>
<body>
    <?php include "../include/header.php" ?>
    <!-- //header -->
    <div id="searchIDwrap">
        <div id="searchIDmodal">
            <div class="img1">
                <img src="../assets/img/Ximg.svg" alt="닫기">
            </div>
            <div class="search__info">
                <h2>아이디 찾기</h2>
                <p>아이디 찾는 방법을 선택해주세요</p>
            </div>
            <div class="search__form">
                <form action="searchIDSave-NamePhone.php" id="searchID" name="searchIDSave" method="post">
                    <fieldset>
                        <legend class="blind">아이디 찾기 영역</legend>
                        <label for="choice1">
                            <input type="radio" id="choice1" name="choice" class="select" value="1" checked>
                            <span>휴대폰 번호로 찾기</span>
                            <p>회원정보에 등록한 휴대폰 번호를 입력해주세요.</p>
                        </label>
                        <div class="user-box">
                            <label for="youName" class="required">이름</label>
                            <input type="text" id="youName" name="youName" class="inputStyle" placeholder="이름을 적어주세요!">
                        </div>
                        <div class="user-box">
                            <label for="youPhone">휴대전화</label>
                            <input type="text" id="youPhone" name="youPhone" class="inputStyle" placeholder="010-0000-0000">
                        </div>
                    </fieldset>
                    <fieldset>
                        <legend class="blind">이메일로 찾기</legend>
                        <label for="choice2">
                            <input type="radio" id="choice2" name="choice" class="select" value="2">
                            <span>이메일로 찾기</span>
                            <p>회원정보에 등록한 이메일을 입력해주세요.</p>
                        </label>
                        <div class="user-box">
                            <label for="youEmail" class="required">이메일</label>
                            <input type="email" id="youEmail" name="youEmail" class="inputStyle" placeholder="이메일">
                        </div>
                    </fieldset>
                    <button type="submit" class="btnStyle3">아이디 찾기</button>
                </form>
            </div>
        </div>
    </div>
    <!-- //main -->
    <?php include "../include/footer.php" ?>
    <!-- // footer -->
    <script>
        let searchForm = document.querySelector('.search__form');
        let radioInputs = searchForm.querySelectorAll('input[name="choice"]');
        for (let i = 0; i < radioInputs.length; i++) {
            radioInputs[i].addEventListener('change', function() {
                let formAction = '';
                if (this.value === '1') {
                    formAction = 'searchIDSave-NamePhone.php';
                } else if (this.value === '2') {
                    formAction = 'searchIDSave-Email.php';
                }
                document.getElementById('searchID').action = formAction;
            });
        }
</script>
</body>
</html>