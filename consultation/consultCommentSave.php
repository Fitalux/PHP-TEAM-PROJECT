<?php
include "../connect/connect.php";
error_reporting(E_ALL);
ini_set('display_errors', 1);


$memberID = $_POST['memberID'];
$consultationID = $_POST['consultationID'];
$commentMsg = $_POST['commentWrite'];
$regTime = time();

// 이하 코드 생략


$sql = "INSERT INTO consultComment (memberID, consultationID, commentMsg, regTime) VALUES ('$memberID', '$consultationID', '$commentMsg', '$regTime')";
$result = $connect -> query($sql);

echo json_encode(array("info" => $consultationID));
?>
