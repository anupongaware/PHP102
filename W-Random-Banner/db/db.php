<?php
$servername = 'localhost';
$username = "root";
$password = "passw0rd";
$databasename = "banner";

$conn = mysqli_connect($servername, $username, $password, $databasename);

if (!$conn) {
    die("Connected failed : " . mysqli_connect_error());
}
