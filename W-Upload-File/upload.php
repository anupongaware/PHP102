<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload file | Home page</title>
</head>

<body>
    <div class="container">
        <h2>โปรแกรม Upload ไฟล์</h2>
        <ol>
            <li> คลิกปุ่ม browse.. เพื่อเลือกไฟล์ที่ต้องการ Upload</li>
            <li> หลังจากเลือกไฟล์ได้แล้วให้ทำการคลิกที่ปุ่ม Upload</li>
            <li> ถ้าขึ้นข้อความว่า Upload Complete แสดงว่าการ upload เสร็จสมบูรณ์</li>
            <li>
                ถ้าต้องการดูว่าไฟล์ได้ถูก upload จริงหรือไม่
                <a href="<?php echo dirname($_SERVER['REQUEST_URI']); ?>">
                    คลิกดูที่นี่
                </a>
            </li>
        </ol>
        <?php if (!isset($_POST['send'])) : ?>
            <div style="border:1px solid black; padding: 20px 20px;">
                <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" enctype="multipart/form-data">
                    <label for=""> ไฟล์ที่ต้องการ Upload : </label>
                    <input type="file" name="ufile">
                    <div>
                        <button type="submit" name="send">Submit</button>
                    </div>
                </form>
            </div>
        <?php elseif (!file_exists($_FILES['ufile']['tmp_name'])) : ?>
            <p style="color:red;">กรุณาเลือกไฟล์ครับ!!</p>
        <?php elseif (copy($_FILES['ufile']['tmp_name'], $_FILES['ufile']['name'])) : ?>
            <div>
                <b>รายละเอียดไฟล์ที่ได้รับ</b>
                <ul>
                    <li>ชื่อไฟล์ : <?php echo $_FILES['ufile']['name'] ?></li>
                    <li>ชื่อพาธ : <?php echo $_FILES['ufile']['tmp_name'] ?></li>
                    <li>ขนาดไฟล์ : <?php echo $_FILES['ufile']['size']  ?> ไบต์</li>
                    <li>ประเภทไฟล์ : <?php echo $_FILES['ufile']['type'] ?></li>
                </ul>
                <h2 style="color:green;">Upload Complete!!</h2>
            </div>
            <a href="upload.php">อัพโหลดไฟล์ใหม่</a>
        <?php endif; ?>
    </div>
</body>

</html>