<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Counter Visitor</title>
</head>

<body>
    <div>
        <h2>หน้าเว็บหลัก</h2>
    </div>
    <?php

    require("db/db.php");

    $sql = "SELECT * FROM countertbl";
    $result = mysqli_query($conn, $sql);
    $dbarr_count = mysqli_num_rows($result);

    if ($dbarr_count > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            $pgcount = $row["countnum"];
        }
    }

    $pgcount = $pgcount + 1;
    $pgcount = "0000" . $pgcount;
    $pgcount = substr($pgcount, -6);
    echo "<b>You are visitor number $pgcount</b>";

    $sql = "UPDATE countertbl SET countnum = '$pgcount' WHERE idcount=1;";
    $result = mysqli_query($conn, $sql);
    mysqli_close($conn);
    ?>


</body>

</html>