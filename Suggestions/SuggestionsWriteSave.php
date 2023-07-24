<?php
    include "../connect/connect.php";
    include "../connect/session.php";

    $memberID = $_SESSION['memberID'];
    $SuggestionsQTitle = $_POST['SuggestionsQTitle'];
    $SuggestionsQContents = $_POST['SuggestionsQContents'];
    $SuggestionsQType = $_POST['SuggestionsQType'];
    $regTime = time();
    
    $SuggestionsQTitle = $connect->real_escape_string($SuggestionsQTitle);
    $SuggestionsQContents = $connect->real_escape_string($SuggestionsQContents);
    $SuggestionsQType = $connect->real_escape_string($SuggestionsQType);
    
    $sql = "INSERT INTO SuggestionsQ (memberID, SuggestionsQTitle, SuggestionsQContents, SuggestionsQType, regTime) 
            VALUES ('$memberID', '$SuggestionsQTitle', '$SuggestionsQContents', '$SuggestionsQType', '$regTime')";

    if ($connect->query($sql)) {
        echo "<script>
            alert('건의사항이 성공적으로 등록되었습니다.');
            location.href = '../Suggestions/Suggestions.php';
        </script>";
    } else {
        echo "<script>
            alert('건의사항 등록에 실패했습니다. 오류: " . mysqli_error($connect) . "');
            history.back();
        </script>";
    }
?>
