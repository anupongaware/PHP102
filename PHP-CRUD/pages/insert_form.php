<?php
$isEdit = isset($_GET["action"]) && $_GET["action"] == "edit";
$form_action = $isEdit ? "../functions/update_action.php" : "../functions/insert_action.php";
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../static/style.css">
    <title>PHP-CRUD</title>
</head>

<body>
    <div class="container">
        <h1>Insert New Customer</h1>
        <?php require("../functions/error_message.php") ?>
        <form action=<?php echo $form_action; ?> method="post">
            <ul>
                <?php if ($isEdit) echo '<input type="hidden" name="id" value=" ' . $id . '">'; ?>
                <li><label for="">Firstname :</label><br /><input type="text" name="firstname" value="<?php echo $session_firstname ?>"></li>
                <li><label for="">Surname :</label><br /><input type="text" name="surname" value="<?php echo $session_surname ?>"></li>
                <li><label for="">Phone :</label><br /><input type="text" name="phone" value="<?php echo $session_phone ?>"></li>
                <li><label for="">Email : </label><br /><input type="text" name="email" value="<?php echo $session_email ?>"></li>
                <li><input type="submit" name="submit" value="Submit"></li>
            </ul>
        </form>
        <p>
            <a href="../index.php">Back to Home Page</a>
        </p>
    </div>


</body>

</html>