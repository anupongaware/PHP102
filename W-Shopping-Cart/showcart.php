<?php
$cart = isset($_COOKIE['cart']) ? $_COOKIE['cart'] : "";
$price = isset($_COOKIE['price']) ? $_COOKIE['price'] : "";
$numcd = isset($_COOKIE['numcd']) ? $_COOKIE['numcd'] : 0;
$total = isset($_COOKIE['total']) ? $_COOKIE['total'] : 0;

if ($numcd == 0) {
    echo "ไม่พบสินค้าในตะกร้า <br>";
    echo "<a href='productform.html'>เลือกซื้อ CD อื่นอีก</a><br>";
} else {

    echo "<b><u>จำนวน CD ในตะกร้า เท่ากับ $numcd แผ่น</u></b><br>";
    for ($i = 0; $i < $numcd; $i++) {
        $count = $i + 1;
        echo ("CD แผ่นที่ $count คือ $cart[$i] " . " <b>ราคา $price[$i] บาท</b> <br>");
        $total = (int)$total + (int)$price[$i];
    }
    //Add commas in number
    $total = number_format($total);
    echo "<hr>";
    print("ราคาสินค้าสุทธิ เท่ากับ <b> $total บาท </b><br>");
    echo "<hr>";

    echo "<a href='productform.html'>เลือกซื้อ CD อื่นอีก</a><br>";
    echo "<a href='delcart.php'>ยกเลิก CD ในตะกร้า</a><br>";
}
