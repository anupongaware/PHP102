<?php
echo "ทดลองใช้ OB Start แลพ OB flush และสร้าง \$username และ \$password";
setcookie("username", "icekub", time() + 60);
setcookie("password", "1234", time() + 60);

echo "<a href='showcookie.php'>คลิกที่นี้ เพิ่อตรวจสอบค่าคุกกี้</a>";
