<?php require("helpers/db.php");  ?>
<?php 
    function createColor($connection){
        $code = mysqli_real_escape_string($connection, $_POST["code"]);
        $title = mysqli_real_escape_string($connection, $_POST["title"]);
        $sql = "INSERT INTO color (title, code) VALUES ('$title', '$code');";
        return mysqli_query($connection, $sql);
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <?php require("html-components/head.php") ?>
    <link rel="stylesheet" href="./static/style.css">
    <title>เพิ่มสีใหม่ | Colorfull 09AF</title>
</head>
<body>
    <?php require("html-components/header.php") ?>
    <section class="section">
        <div class="container">
            <?php if($_SERVER["REQUEST_METHOD"] == "POST"): ?>
                <?php $result = createColor($connection) ?>

                <?php if($result): ?>
                    <h3>บันทึกสีเรียบร้อย</h3>
                    <p>
                        <a href="./">กลับหน้าแรก</a>
                    </p>
                <?php else:?>
                    <h3>บันทึกสีผิดพลาด</h3>
                    <p>
                        <a href="new-color.php">เพิ่มสีใหม่อีกครั้ง</a>
                    </p>
                <?php endif;?>

            <?php else: ?>
                <form method="post">
                    <p>
                        <label for="">โค้ดสี</label>
                        <input type="color" name="code">
                    </p>
                    <p>
                        <label for="">ชื่อสี</label> 
                        <input type="text" name="title">
                    </p>
                    <p>
                        <button type="submit">บันทึกสี</button>
                    </p>
                </form>  
            <?php endif; ?>    
        </div>
    </section>
</body>
</html>

<?php mysqli_close($connection) ?>


