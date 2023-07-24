<?php
    include "../connect/connect.php";
    include "../connect/session.php";
    $reviewType = $_POST['review'];
    $reviewationTitle = $_POST['reviewTitle'];
    $reviewationContents = $_POST['reviewContents'];
    $regTime = time();
    $memberID = $_SESSION['memberID'];
    
    $reviewType = $connect->real_escape_string($reviewType);
    $reviewationTitle = $connect->real_escape_string($reviewationTitle);
    $reviewationContents = $connect->real_escape_string($reviewationContents);
    
    $sql = "INSERT INTO reviewation (memberID, reviewationTitle, reviewationContents, regTime, reviewType) 
            VALUES ('$memberID', '$reviewationTitle', '$reviewationContents', '$regTime', '$reviewType')";

    if ($connect->query($sql)) {
        echo "<script>
            alert('상담이 등록되었습니다.');
            location.href = 'reviewation.php';
        </script>";
    } else {
        echo "<script>
            alert('상담 등록에 실패했습니다.');
            history.back();
        </script>";
    }
?>
