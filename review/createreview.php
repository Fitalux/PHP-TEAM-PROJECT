<?php
    include "../connect/connect.php";
    
    $sql = "CREATE TABLE reivew(";
    $sql .= "reivewID int(10) unsigned NOT NULL auto_increment,";
    $sql .= "memberID int(10) NOT NULL,";
    $sql .= "reivewTitle varchar(100) NOT NULL,";
    $sql .= "reivewContents longtext NOT NULL,";
    $sql .= "reivewView int(10) NOT NULL,";
    $sql .= "regTime int(20) NOT NULL,";
    $sql .= "PRIMARY KEY(reivewID)";
    $sql .= ") charset=utf8;";
    
    $connect -> query($sql);
?>