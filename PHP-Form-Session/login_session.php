<?php
session_start();

$username = isset($_POST['username']) ? $_POST['username'] : "";
$password = isset($_POST['password']) ? $_POST['password'] : "";

if (($username === "root") && ($password === "1234")) {
    //เก็บ ไอดี และ พาสเวิด ลง session 
    $_SESSION['username'] = $username;
    $_SESSION['password'] = $password;
    echo "<a href='admin_session.php'> เข้าสู่ระบบ </a>";
} else {
    echo "Error Login <br/>";
    echo "<a href='login_session.html'> กลับสู่หน้าหลัก </a>";
}
