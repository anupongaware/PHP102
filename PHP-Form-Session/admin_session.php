<?php
session_start();
if (($_SESSION['username'] === "root") && ($_SESSION['password'] === "1234")) {

    echo "ยินดีต้อนรับสู่หน้าจอของผู้ดูแลระบบ <br/>";
    echo "<a href='#'>เพิ่มข้อมูล</a> <br/>";
    echo "<a href='#'>ลบช้อมูล</a> <br/>";
    echo "<a href='#'>แก้ไขข้อมูล</a> <br/>";
    echo "<a href='#'>จัดทำรายงาน</a> <br/>";
    echo "<a href='login_session.html'> กลับสู่หน้าหลัก </a>";
} else {
    echo "Invalid to entry the admin page";
    echo "<a href='login_session.html'> กลับสู่หน้าหลัก </a>";
}
