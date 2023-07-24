<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>로그인 세이브</title>
    <?php include "../include/head.php" ?>
</head>
<body class="gray">
    <!-- //skip -->
    <?php include "../include/header.php" ?>
    <!-- //header -->
    <main id="main">
<?php
    include "../connect/connect.php";
    include "../connect/session.php";

    $youID = $_POST['youID'];
    $youPass = $_POST['youPass'];

    // echo $youEmail, $youPass;
    //데이터 출력
    function msg($alert){
        echo "<p class = 'intro__text'>$alert</p>";
    }
    // 데이터 조회
    $sql = "SELECT memberID, youID, youName, youPass FROM yungyangMember WHERE youPass = '$youPass' AND youID = '$youID'";
    $result = $connect -> query($sql);
    if($result){
        $count = $result -> num_rows;
        if($count == 0){
            msg("이메일 또는 비밀번호가 틀렸습니다. 다시 한번 확인해주세요!<br><div class='intro__btn'><a href='../login/login.php'>로그인</a></div>");
        } else {
            //로그인 성공
            $memberInfo = $result -> fetch_array(MYSQLI_ASSOC);
            echo "<pre>";
            var_dump($memberInfo);
            echo "</pre>";
            // 세션 생성
            $_SESSION['memberID'] = $memberInfo['memberID'];
            $_SESSION['youID'] = $memberInfo['youID'];  
            $_SESSION['youName'] = $memberInfo['youName'];
            Header("Location: ../main/main.php");
        }
    }
?>
        </div>
        <!-- //intro__inner  -->
    </main>
    <!-- //main -->
    <?php include "../include/footer.php" ?>
    <!-- // footer -->
</body>
</html>