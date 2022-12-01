<?php
$username = isset($_POST['username']) ? $_POST['username'] : "";
$password = isset($_POST['password']) ? $_POST['password'] : "";

if (($username === "root") && ($password === "1234")) {
    //เก็บ ไอดี และ พาสเวิด ลง session 
    setcookie('username', $username, time() + 3600);
    setcookie('password', $password, time() + 3600);
    echo "<a href='admin_cookie.php'> เข้าสู่ระบบ </a>";
} else {
    echo "Error Login (Cookie) <br/>";
    echo "<a href='login_cookie.html'> กลับสู่หน้าหลัก </a>";
}
