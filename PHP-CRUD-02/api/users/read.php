<?php
header("Access-Control-Allow-origin: *");
header("Content-type: application.json; charset=utf-8");
include("../db.php");

$users = array();
try {
    foreach ($dbh->query('SELECT * from user') as $row) {
        array_push($users, array(
            'id' => $row['id'],
            'fname' => $row['fname'],
            'lname' => $row['lname'],
            'email' => $row['email'],
            'avatar' => $row['avatar']
        ));
    }
    //encode to json format;
    $json = json_encode($users);
    echo $json;
    $dbh = null;
} catch (PDOException $e) {
    print "Error!: " . $e->getMessage() . "<br/>";
    die();
}
