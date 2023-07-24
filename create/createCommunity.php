<?php
    include "../connect/connect.php";
    
    $sql = "CREATE TABLE community(";
    $sql .= "communityID int(10) unsigned NOT NULL auto_increment,";
    $sql .= "memberID int(10) NOT NULL,";
    $sql .= "communityTitle varchar(100) NOT NULL,";
    $sql .= "communityContents longtext NOT NULL,";
    $sql .= "communityView int(10) NOT NULL,";
    $sql .= "regTime int(20) NOT NULL,";
    $sql .= "PRIMARY KEY(communityID)";
    $sql .= ") charset=utf8;";
    
    $connect -> query($sql);
?>