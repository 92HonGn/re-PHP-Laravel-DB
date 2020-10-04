<?php
    $dbHost = "localhost";
    $dbUser = "root";
    $dbPass = "";
    $dbName = "phptutorial";

    $conn = mysqli_connect($dbHost, $dbUser, $dbPass, $dbName);

    if ($conn) {

    }else{
        die("資料庫連線失敗");
    }
?>