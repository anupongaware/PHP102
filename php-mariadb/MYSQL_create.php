<?php
require("db.php");

//create database
mysqli_set_charset($conn, 'utf8');

$sql = "CREATE DATABASE testdb " . "Character Set utf8 " . "Collate utf8_unicode_ci;";
$result = mysqli_query($conn, $sql);

if ($result) {
    echo "Database created successfully <br/>";
} else {
    echo "Error creating database: " . mysqli_error($conn);
}

// use lasted database
$sql = "USE testdb;";
$result = mysqli_query($conn, $sql);


//create table
$sql = "CREATE Table testtable (id varchar(3), firstname varchar(25), lastname varchar(25) , age int(2), primary key (id));";
$result = mysqli_query($conn, $sql);
if ($result) {
    echo "Table created successfully <br/>";
} else {
    echo "Error creating Table: " . mysqli_error($conn);
}

//close connection database
mysqli_close($conn);
