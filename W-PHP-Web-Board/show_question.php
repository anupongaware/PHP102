<?php
require('./db/db.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Web Board | Show questions</title>
</head>

<body>
    <div class="container">
        <div>
            <div class="header">
                <h1>กระทู้ทั้งหมด</h1>
            </div>
            <?php
            $sql = "SELECT * From question Order by qno Desc;";
            $result = mysqli_query($conn, $sql);
            $dbarr = mysqli_fetch_array($result);

            // วนลูปเพื่อพิมพ์เรคอร์ด
            while ($dbarr) {
                echo $dbarr['qno'];
                echo "&nbsp;<a href='show.detail.php?item=$dbarr[qno]'> ";
                echo "$dbarr[qtopic]</a>&nbsp;";
                echo $dbarr['qname'];
                echo "$nbsp;[" . $dbarr['qcount'] . "]<br>\n";
            }
            mysqli_close($conn);
            ?>
        </div>
    </div>

</body>

</html>