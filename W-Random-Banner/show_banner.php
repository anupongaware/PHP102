<?php
require("db/db.php");

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Random Banner | Home page</title>
</head>

<body>
    <?php
    //ดึงหมายเลขภาพที่ต่ำที่สุดออกมาจาก banner_picture
    $sql = "SELECT Min(no) minimum FROM banner_picture;";
    $result = mysqli_query($conn, $sql);
    $dbarr_count = mysqli_num_rows($result);
    if ($dbarr_count > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            $min = $row['minimun'];
        }
    }

    //ดึงหมายเลขภาพที่สูง ที่สุดออกมาจาก banner_picture
    $sql = "SELECT Max(no) maximum FROM banner_picture";
    $result = mysqli_query($conn, $sql);
    $dbarr_count = mysqli_fetch_assoc($result);
    if ($dbarr_count > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            $max = $row['maximum'];
        }
    }

    $random_banner = rand($min, $max);

    //ดึงเรคอร์ดจากตาราง banner_picture โดยดึงเฉพาะหมายเลขภาพที่ได้จากการสุ่ม
    $sql = "SELECT * FROM banner_picture WHERE no = $random_banner;";
    $result = mysqli_query($conn, $result);
    $dbarr_count = mysqli_fetch_assoc($result);
    if ($dbarr_count > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            $picture_file = $row['picture'];
        }
    }
    echo "<img src='./asset/$picture_file' border=0><br>;";
    ?>

    <img src='./asset/$picture_file' border=0><br>
</body>

</html>