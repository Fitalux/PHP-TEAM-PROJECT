<?php
    include "../connect/connect.php";
    $sql = "CREATE TABLE consultation (";
    $sql .= "consultationID int(10) unsigned NOT NULL auto_increment,";
    $sql .= "memberID int(10) NOT NULL,";
    $sql .= "consultationTitle varchar(100) NOT NULL,";
    $sql .= "consultationContents longtext NOT NULL,";
    $sql .= "consultType VARCHAR(50),";
    $sql .= "regTime int(20) NOT NULL,";
    $sql .= "PRIMARY KEY (consultationID)";
    $sql .= ") charset=utf8;";
    $connect->query($sql);
?>