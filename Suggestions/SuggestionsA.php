<?php
include "../connect/connect.php";
error_reporting(E_ALL);
ini_set('display_errors', 1);


$memberID = $_POST['memberID'];
$SuggestionsAID = $_POST['SuggestionsAID'];
$SuggestionsATitle = $_POST['SuggestionsATitle'];
$SuggestionsAContents = $_POST['SuggestionsAContents'];
$regTime = time();

$sql = "INSERT INTO SuggestionsA (memberID, SuggestionsAID, SuggestionsATitle, SuggestionsAContents, regTime) 
VALUES ('$memberID', '$SuggestionsAID', '$SuggestionsATitle', '$SuggestionsAContents', '$regTime')";
$result = $connect -> query($sql);

echo json_encode(array("info" => $SuggestionsAID));
?>
