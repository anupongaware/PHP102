<?php
require("db.php")
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Select</title>
    <style>
        table,
        th,
        td {
            border: 1px solid black;
            border-collapse: collapse;
        }
    </style>
</head>

<body>
    <table>
        <tr>
            <th>ID</th>
            <th>Firstname</th>
            <th>Lastname</th>
            <th>Age</th>
            <th>Manage</th>
        </tr>
        <?php
        $sql = "USE testdb";
        $result = mysqli_query($conn, $sql);
        $sql = "SELECT *  from testtable;";
        $result = mysqli_query($conn, $sql);
        while ($row = mysqli_fetch_array($result)) {
            echo "<tr>
                    <td>" . $row['id'] . "</td>
                    <td>" . $row['firstname'] . "</td>
                    <td>" . $row['lastname'] . "</td>
                    <td>" . $row['age'] . "</td>
                    <td>" . "<a href='update.php?id_val=$row[id]'>Edit</a>" . "\t" . "<a href='delete.php?id_val=$row[id]'>delete</a>" . "</td>
                  </tr>";
        }
        mysqli_close($conn);
        ?>
    </table>
    <a href='mainfunction.html'> กลับสู่หน้าหลัก </a>
</body>

</html>