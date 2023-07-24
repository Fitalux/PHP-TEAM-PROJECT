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
    <title>search PW Save</title>

    <?php include "../include/head.php"?>
    <!-- // head(CSS) -->
</head>
<body>
    <?php include "../include/header.php" ?>
    <!-- //header -->

    <?php
    if(isset($_POST['youEmail']) && isset($_POST['youID']) && isset($_POST['youPass']) && isset($_POST['youPassC'])) {
        $youEmail = $_POST['youEmail'];
        $youID = $_POST['youID'];
        $youPass = $_POST['youPass'];
        $youPassC = $_POST['youPassC'];

        // echo $youEmail;
        // echo $youID;
        // echo $youPass;
        // echo $youPassC;

        //$youPass = sha1("web".$youPass);
        //$youEmail =$_SESSION['youEmail'];

        //입력된 값과 DB의 값 비교
        $sql = "SELECT youID, youEmail FROM yungyangMember WHERE youEmail = '{$youEmail}' AND youID = '{$youID}'";
        $selectResult = $connect->query($sql);
        
        //  echo "<pre>";
        //  var_dump($selectResult);
        //  echo "</pre>";
        
        //일치하는 회원 정보의 여부 확인
         if($selectResult->num_rows > 0 && $youPass == $youPassC) {

            // 그 후 일치하는 회원 정보의 youPass 값을 비우고 사용자가 입력한 비밀번호로 업데이트
            $sql = "UPDATE yungyangMember SET youPass = '$youPass' WHERE youID = '{$youID}' AND youEmail = '{$youEmail}'";
            $updateResult = $connect -> query($sql);
         }

        //  echo "<pre>";
        //  var_dump($updateResult);
        //  echo "</pre>";
        }
?>
    <main id="main">
        <div id="findpasswrap">
            <div id="findpassmodal">
                <div class="img1">
                    <img src="../assets/img/Ximg.svg" alt="닫기">
                </div>
                <?php if ($updateResult) { ?>
                    <div class="guide">
                        <h3>비밀번호 찾기 완료</h3>
                        <p class="sub_text">🎉 회원님의 비밀번호가 성공적으로 변경되었습니다</p>
                        <p class="main_text">로그인 화면으로 돌아가서 로그인 해주세요.</p>
                    </div>
                    <form action="../login/login.php" name="login" method="post">
                        <fieldset>
                            <button type="submit" class="login__button btnStyle2">로그인 화면 가기</button>
                        </fieldset>
                    </form>
                <?php } else { ?>
                    <div class="guide">
                        <h3>비밀번호 변경 실패</h3>
                        <p class="sub_text">😢<br> 회원님의 비밀번호를 변경하지 못했습니다.</p>
                        <p class="main_text">입력하신 회원정보와 일치하는 회원님이 없습니다.<br>
                            아이디와 이메일을 다시 확인해주시거나, 회원가입부터 진행해주세요.</p>
                    </div>
                    <form action="../join/join.php" name="join" method="post">
                        <fieldset>
                            <button type="submit" class="btnStyle2 mb20">회원가입하러 가기</button>
                        </fieldset>
                    </form>
                    <form action="../search/searchPW.php" name="searchPW" method="post">
                        <fieldset>
                            <button type="submit" class="btnStyle2">다시 찾아보기</button>
                        </fieldset>
                    </form>
                <?php } ?>
            </div>
        </div>
    </main>
    <!-- //main -->

    <?php include "../include/footer.php" ?>
    <!-- // footer -->
</body>
</html>