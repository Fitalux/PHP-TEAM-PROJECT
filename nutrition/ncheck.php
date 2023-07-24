<?php
    include "../connect/connect.php";
    session_start();

    $number = $_POST['picNumber'];

    $_SESSION['number'] = $number;


    echo json_encode(array("result" => $number));
?>