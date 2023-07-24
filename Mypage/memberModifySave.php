<?php
    include "../connect/connect.php";
    include "../connect/session.php";
    
    // 회원이 입력한 데이터 가져오기
    $youPass = $_POST['youPass'];
    $youPassC = $_POST['youPassC'];
    $youName = $_POST['youName'];
    $youEmail = $_POST['youEmail'];
    $youPhone = $_POST['youPhone'];

    // 유효성 검사 등 필요한 로직 수행

    // 비밀번호와 비밀번호 확인 일치 여부 확인
    if ($youPass !== $youPassC) {
        echo "<script>alert('비밀번호와 비밀번호 확인이 일치하지 않습니다.'); history.go(-1);</script>";
        exit;
    }

    // 회원 정보 업데이트
    $sql = "UPDATE yungyangMember SET youPass='$youPass', youName='$youName', youEmail='$youEmail', youPhone='$youPhone' WHERE memberID='{$_SESSION['memberID']}'";
    $result = $connect->query($sql);

    if ($result) {
        // 세션에 새로운 정보 업데이트
        $_SESSION['youName'] = $youName;

        echo "<script>alert('회원정보가 수정되었습니다.'); location.href='myPage.php';</script>";
    } else {
        echo "<script>alert('회원정보 수정에 실패했습니다. 잠시 후 다시 시도해주세요.'); history.go(-1);</script>";
    }
?>
