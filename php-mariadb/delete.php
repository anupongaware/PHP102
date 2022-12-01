<?php
require('db.php');
$id = isset($_GET['id_val']) ? $_GET['id_val'] : '';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delete</title>
</head>

<body>

    <?php if (!isset($_POST['send'])) : ?>
        <form method="post" action="<?php echo $_SERVER['PHP_SELF'] ?>">
            <b>
                <u>
                    แบบฟอร์มการแก้ไขข้อมูล
                </u>
            </b>
            <div>
                <p>กรุณากรอกรหัสพนักงานที่ต้องการแก้ไข</p>
                <label for="">รหัสพนักงานที่ต้องการแก้ไข :</label>
                <input type="text" name="id_val" value="<?php echo $id ?>">
            </div>
            <button type="submit" name="send">Submit</button>
            <button type="reset">ยกเลิก</button>
            <a href='mainfunction.html'> กลับสู่หน้าหลัก </a>
        </form>
    <?php else : ?>
        <?php
        $id_val = $_POST['id_val'];
        $sql = "DELETE FROM testtable WHERE id='$id_val';";
        $result = mysqli_query($conn, $sql);
        if ($result) {
            echo "ลบข้อมูลในฐานข้อมูลสำเร็จ <br>";
            mysqli_close($conn);
        } else {
            echo "ไม่สามารถลบข้อมูลในฐานข้อมูลได้ <br>";
        }
        echo "<a href='mainfunction.html'>กลับสู่หน้าแรก</a> <br/>";
        ?>
    <?php endif; ?>

</body>

</html>