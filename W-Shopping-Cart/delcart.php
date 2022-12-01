<?php
$numcd = isset($_COOKIE['numcd']) ? $_COOKIE['numcd'] : 0;

for ($a = 0; $a < $numcd; $a++) {
    setcookie("cart[$a]", "");
    setcookie("price[$a]", "");
}
setcookie("numcd", "");
echo ("คุณได้ทำการยกเลิกการสั่งซื้อ CD ในตะกร้าทั้งหมด <br>");
echo "<a href='productform.html'>เลือกซื้อ CD อื่นอีก</a>";
