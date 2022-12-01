<?php
require("db.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insert Formม</title>
</head>

<body>
    <?php if (!isset($_POST['send'])) : ?>
        <p>
            <b><u>แบบฟอร์มเพิ่มข้อมูล</u></b>
        </p>
        <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
            <div>
                <p>
                    <label for="">รหัสพนักงาน : </label>
                    <input type="text" name="id">
                </p>
            </div>
            <div>
                <p>
                    <label for="">ชื่อ : </label>
                    <input type="text" name="firstname">
                </p>
                <p>
                    <label for="">นามสกุล : </label>
                    <input type="text" name="lastname">
                </p>
            </div>
            <div>
                <p>
                    <label for="">อายุ : </label>
                    <input type="text" name="age">
                </p>
            </div>
            <button type="submit" name="send">Submit</button>
            <button type="reset">ยกเลิก</button>
            <button>
                <a href='select.php'> ไปหน้าตารางรวม</a> <br />
            </button>
            <button>
                <a href='mainfunction.html'> กลับไปหน้าแรก</a><br />
            </button>
        </form>
    <?php else : ?>
        <?php
        $id = $_POST['id'];
        $firstname = $_POST['firstname'];
        $lastname = $_POST['lastname'];
        $age = $_POST['age'];

        $sql = "USE testdb";
        $result = mysqli_query($conn, $sql);
        $sql = "INSERT INTO testtable values('$id', '$firstname', '$lastname', '$age');";
        $result = mysqli_query($conn, $sql);

        if ($result) {
            echo "เพิ่มข้อมูลลงฐานข้อมูลสำเร็จ <br/>";
        } else {
            echo "ไม่สามารถเพิ่มฐานข้อมูลได้ <br/>";
        }

        echo "<a href='insert.php'> กลับไปหน้าเพิ่มข้อมูล</a> <br/>";
        echo "<a href='select.php'> ไปหน้าตารางรวมม</a> <br/>";
        echo "<a href='mainfunction.html'> กลับไปหน้าแรก</a><br/>";
        mysqli_close($conn);
        ?>
    <?php endif; ?>

</body>

</html>