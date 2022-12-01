<?php
require("db/db.php");

$guest_name = $_POST['guest_name'];
$guest_email = $_POST['guest_email'];
$guest_comment = $_POST['guest_comment'];
$remote_addr = $_SERVER['REMOTE_ADDR'];

//ตรวจสอบดูว่า ชื่อ อีเมลล์ และคำแนะนำ เป็นช่องว่างหรือไม่
if ($guest_name == "" || $guest_email == "" || $guest_comment == "") {
    echo "<p> คุณกรอกข้อมูลไม่ครบ กรุณากลับไปกรอกใหม่ด้วย </p>";
    echo "<button onClick='history.back();'>ย้อนกลับไปแก้ไข</button>";
    exit();
}

$currentdatetime = (date("Y") + 543) . date("-m-d G:i:s");
$sql = "INSERT INTO guestdata values ('$guest_name', '$guest_email', '$guest_comment', '$currentdatetime', '$remote_addr');";
$result = mysqli_query($conn, $sql);

if ($result) {
    echo "ส่งข้อมูลลงในสมุดเยี่ยมแล้ว <br>";
} else {
    echo "ไม่สามารถส่งข้อมูลในสมุดเยี่ยมได้ <br>";
}

echo "<a href='show_guest.php'>แสดงข้อมูลทั้งหมดในสมุดเยี่ยม</a><br>";
echo "<a href='form_guest.html'>กลับสู่หน้าฟอร์ม</a><br>";
