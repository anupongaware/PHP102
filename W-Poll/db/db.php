<?php
$servername = "localhost";
$username = 'root';
$password = 'passw0rd';
$databasename = 'poll';

$conn = mysqli_connect($servername, $username, $password, $databasename);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
