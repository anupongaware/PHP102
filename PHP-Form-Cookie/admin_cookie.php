<?php
session_start();
if (($_COOKIE['username'] === "root") && ($_COOKIE['password'] === "1234")) {

    echo $_COOKIE['username'] . "<br/>";
    echo $_COOKIE['password'] . "<br/>";

    echo "ยินดีต้อนรับสู่หน้าจอของผู้ดูแลระบบ <br/>";
    echo "<a href='#'>เพิ่มข้อมูล</a> <br/>";
    echo "<a href='#'>ลบช้อมูล</a> <br/>";
    echo "<a href='#'>แก้ไขข้อมูล</a> <br/>";
    echo "<a href='#'>จัดทำรายงาน</a> <br/>";
    echo "<a href='login_cookie.html'> กลับสู่หน้าหลัก </a>";
} else {
    echo "Invalid to entry the admin page (Cookie)";
    echo "<a href='login_cookie.html'> กลับสู่หน้าหลัก </a>";
}
