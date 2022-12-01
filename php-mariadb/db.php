<?php
$servername = 'localhost';
$username = 'root';
$password = 'passw0rd';
$tablename = 'testdb';


$conn = mysqli_connect($servername, $username, $password, $tablename);

if (!$conn) {
    die("Could not connect: " . mysqli_connect_error());
}
