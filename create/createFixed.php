<?php
    include "../connect/connect.php";
    
    $sql = "CREATE TABLE Fixedtable(";
    $sql .= "FixedID int(100) unsigned NOT NULL auto_increment,";
    $sql .= "FixedBrand varchar(10) NOT NULL,";
    $sql .= "FixedName varchar(30) NOT NULL,";
    $sql .= "FixedTitle varchar(100) NOT NULL,";
    $sql .= "FixedG_kcal varchar(20) NOT NULL,";
    $sql .= "FixedPrice varchar(20) NOT NULL,";
    $sql .= "FixedSalt varchar(20) NOT NULL,";
    $sql .= "FixedCarbohydrate varchar(20) NOT NULL,";
    $sql .= "FixedSugars varchar(20) NOT NULL,";
    $sql .= "FixedProvince varchar(20) NOT NULL,";
    $sql .= "FixedTrans_fat varchar(20) NOT NULL,";
    $sql .= "FixedSaturated_fat varchar(20) NOT NULL,";
    $sql .= "FixedCholesterol varchar(20) NOT NULL,";
    $sql .= "FixedProtien varchar(20) NOT NULL,";
    $sql .= "PRIMARY KEY(FixedID)";
    $sql .= ") charset=utf8;";
    
    $connect -> query($sql);
?>