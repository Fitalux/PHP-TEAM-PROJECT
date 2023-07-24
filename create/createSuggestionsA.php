<?php
    include "../connect/connect.php";
    $sql = "CREATE TABLE SuggestionsA (";
    $sql .= "SuggestionsAID int(10) unsigned NOT NULL auto_increment,";
    $sql .= "memberID int(10) NOT NULL,";
    $sql .= "SuggestionsATitle varchar(100) NOT NULL,";
    $sql .= "SuggestionsAContents longtext NOT NULL,";
    $sql .= "SuggestionsAType VARCHAR(50),";
    $sql .= "regTime int(20) NOT NULL,";
    $sql .= "PRIMARY KEY (SuggestionsAID)";
    $sql .= ") charset=utf8;";
    
    $result = $connect -> query($sql);
    if($result){
        echo "create tables complete";
    } else {
        echo "create tables false";
    }
?> 