<?php
require("db/db.php");

$sql = "SELECT * FROM guestdata ORDER BY date Desc;";
$result = mysqli_query($conn, $sql);
$dbarr_count = mysqli_num_rows($result);

echo "<a href='form_guest.html'>กลับสู่หน้าฟอร์มสมุดเยี่ยม</a><br>";

if ($dbarr_count > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        echo "<table border=1>";

        //แสดงชื่อ-สกุลของผู้เยี่ยม
        echo "<tr>";
        echo "<td><b>ชื่อ-สกุล: </b></td>";
        echo "<td>$row[name]</td>";
        echo "</tr>";

        //แสดงอีเมลล์
        echo "<tr>";
        echo "<td><b> E-Mail Address :</b></td>";
        echo "<td><a href=mailto:$row[email]>$row[email]</a></td>";
        echo "</tr>";

        //แสดงคำติชม
        echo "<tr>";
        echo "<td><b> คำติชม :</b></td>";
        echo "<td>$row[comment]</td>";
        echo "</tr>";

        //แสดงวันเวลาที่เข้าชม
        echo "<tr>";
        echo "<td><b> วันเวลาเข้ามาเยี่ยม :</b></td>";
        echo "<td>$row[date]</td>";
        echo "</tr>";

        //แสดงหมายเลขของ IP address ของเครื่องที่ใช้
        echo "<tr>";
        echo "<td><b> IP Address :</b></td>";
        echo "<td>$row[ip]</td>";
        echo "</tr>";
        echo "</table><br>";
    }
} else {
    echo "0 results";
}


echo "<a href='form_guest.html'>กลับสู่หน้าฟอร์มสมุดเยี่ยม</a><br>";

mysqli_close($conn);
