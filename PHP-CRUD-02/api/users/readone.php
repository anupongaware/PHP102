<?php
header("Access-Control-Allow-origin: *");
header("Content-type: application.json; charset=utf-8");
include("../db.php");

try {
    $stmt = $dbh->prepare("SELECT * FROM user WHERE id =?");
    $stmt->execute([$_GET['id']]);
    foreach ($stmt as $row) {
        $user = array(
            'id' => $row['id'],
            'fname' => $row['fname'],
            'lname' => $row['lname'],
            'email' => $row['email'],
            'avatar' => $row['avatar']
        );
        echo json_encode($user);
        break;
    }
} catch (PDOException $e) {
    print "Error!: " . $e->getMessage() . "<br/>";
    die();
}
