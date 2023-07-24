<?php
    include "../connect/connect.php";
    include "../connect/session.php";
    $sql = "SELECT count(communityID) FROM community";
    $result = $connect -> query($sql);
    
    $communityTotalCount = $result -> fetch_array(MYSQLI_ASSOC);
    $communityTotalCount = $communityTotalCount['count(communityID)'];
?>
<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>회원정보 수정</title>
    <?php include "../include/head.php"?>
</head>
<body class="gray">
    <?php include "../include/header.php"?>
    <!-- // header -->
    <main id="main">
        <div id="changeinfo">
            <div id="modal">
                <div class="img1">
                    <img src="../assets/img/Ximg.svg" alt="닫기">
                </div>
                <div class="img2">
                    <img src="../assets/img/logo.svg" alt="로고">
                </div>
                <div class="Termsup__form">
                    <form action="memberModifySave.php" name="memberModifySave" method="post">
                        <fieldset>
                            <div class="Termsup__change">
                                <div>
                                    <legend class="blind">회원정보 변경 영역</legend>
                                    <div class="item">
                                        <div>
                                            <label for="youPass" class="required">비밀번호</label><br>
                                            <input type="password" id="youPass" class="inputStyle"  name="youPass" placeholder="비밀번호를 적어주세요!" required>
                                        </div>
                                        <div>
                                            <label for="youPassC" class="required">비밀번호 확인</label><br>
                                            <input type="password" id="youPassC" class="inputStyle"  name="youPassC" placeholder="다시 비밀번호를 적어주세요!" required>
                                        </div>
                                        <div>
                                            <label for="youName" class="required">이름</label><br>
                                            <input type="text" id="youName" class="inputStyle" name="youName" placeholder="이름을 적어주세요!" required>
                                        </div>
                                        <div>
                                            <label for="youEmail" class="required">이메일</label><br>
                                            <input type="text" id="youEmail" class="inputStyle" name="youEmail" placeholder="이메일을 적어주세요!" required>
                                        </div>
                                        <div>
                                            <label for="youPhone" class="required">연락처</label><br>
                                            <input type="text" id="youPhone" class="inputStyle"  name="youPhone" placeholder="연락처를 적어주세요!" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="Termup__img">
                                    <legend class="blind">이미지 변경 영역</legend>
                                    <img src="../assets/img/websimg.svg" alt="프로필 이미지">
                                    <input type="file" id="myFile">
                                </div>
                            </div>
                            <a href="changeinfo.html"><button type="submit" class="button">수정하기</button></a>
                        </fieldset>
                    </form>
                </div>
            </div>
        </div>
    </main>
    <?php include "../include/footer.php" ?>
    <!-- // footer -->
</body>
</html>