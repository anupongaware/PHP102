<?php
require("db/db.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Poll | Home Page</title>
</head>

<body>
    <form action="poll_result.php" method="post">
        <?php

        $flag = 1;
        //ดึงเรคอร์ดจากตาราง Pollquestion และ ตาราง Pollchoice
        //โดยดึงเฉพาะเรคอร์ดที่เป็นคำถามหมายเลข 1 เท่านั้น
        $sql = "SELECT * FROM pollquestion PQ, pollchoice PC " .
            "Where PQ.QuestionNo = PC.QuestionNo " .
            "AND PQ.QuestionNo = 1 " .
            "ORDER BY PQ.QuestionNo, PC.ChoiceNo;";

        $result = mysqli_query($conn, $sql);

        $dbarr_count = mysqli_num_rows($result);

        if ($dbarr_count > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                $Questionno = $row['QuestionNo'];
                $Questionname = $row['QuestionName'];
                $Choiceno = $row['ChoiceNo'];
                $Choicename = $row['ChoiceName'];

                if ($flag == 1) {
                    echo "<b>$Questionname</b><br>";
                    echo "<input type='hidden' name='Number' value='$Questionno'>";
                    $flag = 0;
                }
                echo "<input type='radio' name='Choice' value='$Choiceno'>$Choicename<br>";
            }
        }
        echo  "<button type='submit' name='submit'>ให้คะแนน</button>";
        echo  "<button type='reset' name='reset'>ยกเลิก</button>";
        mysqli_close($conn);
        ?>
    </form>

</body>

</html>