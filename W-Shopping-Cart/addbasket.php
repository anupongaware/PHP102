<?php
$musiccd = $_POST['musiccd'];

//ตรวจสอบว่าตัวแปร $numcd มีอยู่จริงหรือไม่ ถ้าไม่มีให้กำหนดค่าเท่ากับศูนย์
$numcd = isset($_COOKIE['numcd']) ? $_COOKIE['numcd'] : 0;

//กำหนดค่าคุ้กกี้ของตัวแปรอาร์เรย์ cart เก็บค่าของชื่อ CD
setcookie("cart[$numcd]", $musiccd);

//กำหนดตัวแปร เก็บค่าราคาแผ่น cd
switch ($musiccd) {
    case "Christmas":
        $pr = 199;
        break;
    case "Rockconsert":
        $pr = 300;
        break;
    case "Acoustic";
        $pr = 499;
        break;
}


//กำหนดตัวแปร ราคาแผ่น cd ลงใน cookie
setcookie("price[$numcd]", $pr);
$numcd++;


//กำหนดค่าคุกกี้ของตัวแปร numcd เก็บค่าของจำนวน CD
setcookie("numcd", $numcd);
echo ("ท่านหยิบแผ่น CD $musiccd ลงในตะกร้า <br>");

echo "<a href='productform.html'> เลือกซื้อ CD อื่นอีก</a><br>";
echo "<a href='showcart.php'> แสดง CD ที่มีอยู่ในตะกร้า</a><br>";
echo "<a href='delcart.php'>ยกเลิก CD ในตะกร้า</a><br>";
