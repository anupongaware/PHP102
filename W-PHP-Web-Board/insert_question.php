<?php

require('./db/db.php');

$topic = $_POST['topic'];
$detail = $_POST['detail'];
$name = $_POST['name'];

$sql = "SELECT * FROM question";
$result = mysqli_query($conn, $sql);
$count = 0;
$dbarr = mysqli_fetch_array($result);
while ($dbarr) {
    $count++;
}
$itemno = $count + 1;
//เพิ่มข้อมูลลงไปในฐานข้อมูล
$sql = "INSERT INTO question values ($itemno,'$topic', '$detail', '$name', 0);";
$result = mysqli_query($conn, $sql);


if ($result) {
    echo "เพิ่มกระทู้ใหม่สำเร็จ <br>";
    mysqli_close($conn);
} else {
    echo "ไม่สามารถเพิ่มกระทู้ได้ <br>";
}

echo "<a href='show_question.php'>แสดงกระทู้ทั้งหมด</a> <br>";
echo "<a href='form_question.html'>กลับสู่หน้าฟอร์มตั้งกระทู้ใหม่</a> <br>";
