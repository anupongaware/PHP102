<?php
$hostname = "localhost";
$username = "root";
$password = "passw0rd";
$port = "3306";
$database = "php_colorfull09af_2";

mysqli_report(MYSQLI_REPORT_OFF);
$connection = mysqli_connect($hostname, $username, $password, $database, $port);

    if(!$connection){
        die("ทดอสะพานไม่ได้ ".mysqli_connect_error());
    }


