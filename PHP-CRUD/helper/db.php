<?php 
    $servername = "localhost";
    $username = "root";
    $password = "passw0rd";
    $dbname = "test_x";

    $conn = new mysqli($servername, $username, $password, $dbname);
    

    mysqli_report(MYSQLI_REPORT_OFF);
    if($conn->connect_error)
    {
        die("Connection failed : ".$conn->connect_error);
    }
