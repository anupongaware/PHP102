<?php
$servername  = 'localhost';
$username = 'root';
$password = 'passw0rd';
$databasename = 'counterdb';


$conn = mysqli_connect($servername, $username, $password, $databasename);

if (!$conn) {
    die("Connected Fail : " . mysqli_connect_error());
}
