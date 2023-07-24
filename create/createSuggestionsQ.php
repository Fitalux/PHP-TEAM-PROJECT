<?php
    include "../connect/connect.php";

    $sql = "CREATE TABLE SuggestionsQ (";
    $sql .= "SuggestionsQID int(10) unsigned NOT NULL auto_increment,";
    $sql .= "memberID int(10) NOT NULL,";
    $sql .= "SuggestionsQTitle varchar(100) NOT NULL,";
    $sql .= "SuggestionsQContents longtext NOT NULL,";
    $sql .= "SuggestionsQType VARCHAR(50),";
    $sql .= "regTime int(20) NOT NULL,";
    $sql .= "PRIMARY KEY (SuggestionsQID)";
    $sql .= ") charset=utf8;";

    $result = $connect -> query($sql);
    if($result){
        echo "create tables complete";
    } else {
        echo "create tables false";
    }
?> 