<?php require("helpers/db.php");  ?>
<?php
function getColors ($connection) {
    $sql ="SELECT * FROM color ";
    if(isset($_GET["search"])){
        $searchSafeValue =mysqli_real_escape_string($connection, $_GET["search"]) ;
        $sql .= "WHERE title LIKE '%$searchSafeValue%' "; 
    }
    $sql .= "ORDER BY id DESC";
    $result = mysqli_query($connection, $sql);
    return mysqli_fetch_all($result, MYSQLI_ASSOC); 
}

$searchTitle = "";
$searchValue ="";
if(isset($_GET["search"]))
{
    $searchTitle = "ค้นหา \"$_GET[search]\" | ";
    $searchValue = $_GET["search"];
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <?php require("./html-components/head.php"); ?>
    <link rel="stylesheet" href="./static/style.css">
    <title><?php echo $searchTitle ?>Colorfull 09AF</title>
</head>
<body>
    <?php require("html-components/header.php"); ?>
    <section class="section">
        <div class="container">
            <?php $rows = getColors($connection)  ?>
            <!-- input for seaching colors -->
            <form>
                <p>
                    <input type="search" name="search" value="<?php echo $searchValue; ?>">
                    <button type ="submit">ค้นหา</button>
                </p>
            </form>

            <h3> พบสี  <?php echo count($rows)?> รายการ</h3>

            <?php foreach($rows as $row): ?>
                <div class="color-item" style="border-color:<?php echo $row['code'];?>">
                    <h4><?php  echo $row["title"]?></h4>
                    <h4><?php  echo $row["code"]?></h4>
                </div>

            <?php endforeach; ?>
        </div>
    </section>
</body>
</html>

<?php mysqli_close($connection) ?>
