<?php
    include "../connect/connect.php";

    $commentID = $_POST['commentID'];
    $memberID = $_POST['memberID'];
    $commentWrite = $_POST['commentWrite'];
    $regTime = time();

    $sql = "INSERT INTO reviewComment(reviewationID, memberID, commentMsg, regTime) VALUES('$commentID', '$memberID', '$commentWrite', '$regTime')";
    $result = $connect->query($sql);

    if ($result) {
        echo json_encode(array("info" => $commentID));
    } else {
        echo json_encode(array("error" => "Failed to save the comment."));
    }
?>
