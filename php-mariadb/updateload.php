<?php
require('db.php');
$id = $_POST['id'];
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$age = $_POST['age'];

$sql = "UPDATE testtable set firstname ='$firstname', lastname ='$lastname', age='$age' WHERE id='$id';";
$result = mysqli_query($conn, $sql);

if ($result) {
    echo "การแก้ไขข้อมูลในฐานข้อมูลประสพความสำเร็จ <br/>";
    mysqli_close($conn);
} else {
    echo "ไม่สามารถแก้ไขข้อมูลในฐานข้อมูลได้ <br/>";
}

echo "<a href='update.php'>หน้าจอการแก้ไขข้อมูล</a> <br/>";
echo "<a href='mainfunction.html'>กลับสู่หน้าแรก</a> <br/>";
