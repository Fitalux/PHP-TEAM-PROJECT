<?php 
    include "../connect/connect.php";
    //include "../connect/session.php";
    //include "../connect/sessionCheck.php";

    // echo "<pre>";
    // var_dump($_SESSION);
    // echo "</pre>";
?>
<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search Password</title>

    <?php include "../include/head.php"?>
    <!-- // head(CSS) -->
</head>
<body>    
    <?php include "../include/header.php" ?>
    <!-- //header -->
    
        <div id="searchPasswrap">
            <div id="searchPassmodal">
                <div class="img1">
                    <img src="../assets/img/Ximg.svg" alt="닫기">
                </div>
                <div class="search__info">
                    <h2>비밀번호 변경</h2>
                    <p>비밀번호를 변경해주세요</p>
                </div>
                <div class="search__form">
                    <form action="searchPWSave.php" name="searchPWSave" method="post" onsubmit="return PassChecks()">
                        <fieldset>
                            <legend class="blind">회원정보 입력</legend>
                            <div class="new__info">
                                <span>회원정보 입력</span><br>
                                <p>회원정보를 입력해주세요</p>
                            </div>
                            <div class="user-box">
                                <label for="youID" class="required">아이디</label>
                                <input type="text" id="youID" name="youID" class="inputStyle" placeholder="아이디" required>
                            </div>
                            <div class="user-box">
                                <label for="youEmail" class="required">이메일</label>
                                <input type="email" id="youEmail" name="youEmail" class="inputStyle" placeholder="이메일">
                            </div>
                        </fieldset>
                        <fieldset>
                            <legend class="blind">새비밀번호 입력</legend>
                            <div class="new__info">
                                <span>새비밀번호 입력</span>
                                <p>새로운 비밀번호를 입력해주세요</p>
                            </div>
                            <div class="user-box">
                                <label for="youPass"  class="required">새비밀번호</label>
                                <input type="password" id="youPass" name="youPass" class="inputStyle" placeholder="새로운 비밀번호를 입력하세요." required>
                            </div>
                            <div class="user-box">
                                <label for="youPassC"  class="required">비밀번호 확인</label>
                                <input type="password" id="youPassC" name="youPassC" class="inputStyle"placeholder="다시 한번 비밀번호를 적어주세요." required>
                            </div>
                        </fieldset>
                        <button type="submit" class="button">비밀번호 변경</button>
                    </form>
                </div>
            </div>
        </div>

    <?php
        if(empty($_POST["youID"] == "" || $_POST["youEmail"] == "")) {
            if(isset($_POST['youID']) || isset($_POST['youEmail']))
                echo '<script> alert("입력란에 입력된 내용이 없습니다. 다시 확인해주세요.")</script>';
           } else {
            $youEmail = $_POST['youEmail'];
            $youID = $_POST['youID'];

            //$_SESSION['youEmail'] = $youEmail;

            $sql = "SELECT * FROM yungyangMember WHERE youEmail = '$youEmail' AND youID = '$youID'";
            
            $result = $connect -> query($sql);
            $row = $result -> fetch_array(MYSQLI_ASSOC);            

            if($row && $row['youEmail'] == $youEmail && $row['youID'] == $youID) { 
                //echo "<script> alert('비밀번호 변경 가능') </script>";
            } else {
                //echo "<script> alert('비밀번호 변경 불가') </script>";
            }  
        }
    ?>

    <?php include "../include/footer.php" ?>
    <!-- // footer -->

    <script>
        function PassChecks() {
            // 비밀번호 공백 체크
            if (document.getElementById("youPass").value.trim() === '') {
                alert('사용하실 비밀번호를 입력하세요.');
                return false;
            }

            // 비밀번호 유효성 테스트
            let userPass = document.getElementById("youPass").value;
            let userPassNum = /[0-9]/g.test(userPass);
            // let userPassEng = /[a-z]/ig.test(userPass);
            // let userPassSpe = /[`~!@@#$%^&*|₩₩₩'₩";:₩/?]/gi.test(userPass);

            if (userPass.length < 8 || userPass.length > 20) {
                alert('비밀번호는 8자 이상 20자 이하로 작성해주세요');
                return false;
            } else if (/\s/.test(userPass)) {
                alert('비밀번호에는 공백 사용이 불가능합니다');
                return false;
            } 
                 // 비밀번호 확인 체크
            let userPassC = document.getElementById("youPassC").value;

            if (userPass !== userPassC) {
                alert('비밀번호와 비밀번호 확인 값이 일치하지 않습니다.');
                return false;
            }
             // 모든 유효성 검사 통과 시 폼 제출
            return true;
        }
    </script>
</body>
</html>