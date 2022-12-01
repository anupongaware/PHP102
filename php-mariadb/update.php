<?php
require("db.php");
$id = isset($_GET['id_val']) ? $_GET['id_val'] : ''; ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update</title>
</head>

<body>
    <?php if (!isset($_POST['send'])) : ?>
        <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
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
        $sql = "SELECT * from testtable WHERE id='$id_val';";
        $result = mysqli_query($conn, $sql);
        echo "<form action='updateload.php?Empno=$id_val' method=post>";
        $dbarr = mysqli_fetch_array($result);
        // echo "รหัสพนักงาน : " . $id_val . "<br>";
        // echo "ชื่อพนักงาน : ";
        // echo "<input type='text' name='firstname' value=$dbarr[firstname]>";
        // echo "นามสกุลพนักงาน : ";
        // echo "<input type='text' name='lastname' value=$dbarr[lastname]>";
        // echo "อายุ : ";
        // echo "<input type='text' name='age' value=$dbarr[age]>";
        // echo "</form>";
        // mysqli_close($conn);
        ?>
        <form action='updateload.php?Empno=<?php echo $id_val ?>' method=post>
            <p>
                <b><u>แบบฟอร์มแก้ไขข้อมูล</u></b>
            </p>
            <div>
                <p>
                    <label for="">รหัสพนักงาน : </label>
                    <input type="text" name="id" value="<?php echo $id_val ?>">
                </p>
            </div>
            <div>
                <p>
                    <label for="">ชื่อ : </label>
                    <input type="text" name="firstname" value="<?php echo $dbarr['firstname'] ?>">
                </p>
                <p>
                    <label for="">นามสกุล : </label>
                    <input type="text" name="lastname" value="<?php echo $dbarr['lastname'] ?>">
                </p>
            </div>
            <div>
                <p>
                    <label for="">อายุ : </label>
                    <input type="text" name="age" value="<?php echo $dbarr['age'] ?>">
                </p>
            </div>
            <button type="submit" name="submit">Submit</button>
            <button type="reset">ยกเลิกก</button>
            <a href='mainfunction.html'> กลับสู่หน้าหลัก </a>
        </form>
        <?php mysqli_close($conn) ?>
    <?php endif; ?>
</body>

</html>


<!-- <form action='updateload.php?Empno=<?php echo $id_val ?>' method=post>
            <p>
                <b><u>แบบฟอร์มแก้ไขข้อมูล</u></b>
            </p>
            <div>
                <p>
                    <label for="">รหัสพนักงาน : </label>
                    <input type="text" name="id" value="<?php echo $id_val ?>">
                </p>
            </div>
            <div>
                <p>
                    <label for="">ชื่อ : </label>
                    <input type="text" name="firstname" value="<?php echo $dbarr['firstname'] ?>">
                </p>
                <p>
                    <label for="">นามสกุล : </label>
                    <input type="text" name="lastname" value="<?php echo $dbarr['lastname'] ?>">
                </p>
            </div>
            <div>
                <p>
                    <label for="">อายุ : </label>
                    <input type="text" name="age" value="<?php echo $dbarr['age'] ?>">
                </p>
            </div>
            <button type="submit" name="submit">Submit</button>
            <button type="reset">ยกเลิก</button>
        </form> -->