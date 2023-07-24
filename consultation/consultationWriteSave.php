<?php
    include "../connect/connect.php";
    include "../connect/session.php";
    $consultType = $_POST['consult'];
    $consultationTitle = $_POST['consultTitle'];
    $consultationContents = $_POST['consultContents'];
    $regTime = time();
    $memberID = $_SESSION['memberID'];
    
    $consultType = $connect->real_escape_string($consultType);
    $consultationTitle = $connect->real_escape_string($consultationTitle);
    $consultationContents = $connect->real_escape_string($consultationContents);
    
    $sql = "INSERT INTO consultation (memberID, consultationTitle, consultationContents, regTime, consultType) 
            VALUES ('$memberID', '$consultationTitle', '$consultationContents', '$regTime', '$consultType')";

    if ($connect->query($sql)) {
        echo "<script>
            alert('상담이 등록되었습니다.');
            location.href = 'consultation.php';
        </script>";
    } else {
        echo "<script>
            alert('상담 등록에 실패했습니다.');
            history.back();
        </script>";
    }
?>
