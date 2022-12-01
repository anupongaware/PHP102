<?php

echo "<u><b> ตรวจสอบค่าของคุกกี้ </b></u>";

echo "ชื่อผู้ใช้ คือ : " . $_COOKIE['username'] . "<br/>";
echo "รหัส คือ : " . $_COOKIE['password'] . "<br/>";

echo "<a href='delcookie.php'>ล้าง cookie </a>";
