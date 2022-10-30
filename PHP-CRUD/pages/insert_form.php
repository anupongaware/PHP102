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
<?php 
    
?>
   
    <div class="container">
        <h1>Insert New Customer</h1>
        <?php require("../functions/error_message.php") ?>
        <?php if($isEdit): ?>
            <form action="../functions/update_action.php" method="post">
        <?php else:?>    
            <form action="../functions/insert_action.php" method="post">
        <?php endif; ?>    
            <ul>
                <?php 
                    // if($isEdit)
                    // {
                    //     echo "<input type='hidden' name='id' value='$id;'/>";
                    // }
                ?>

                <?php if($isEdit): ?>
                    <input type="hidden" name="id" value="<?php echo $id ?>">
                <?php endif; ?>
                <li><label for="">Firstname :</label><br/><input type="text" name="firstname" value="<?php echo $cookie_firstname ?>"></li>
                <li><label for="">Surname :</label><br/><input type="text" name="surname" value="<?php echo $cookie_surname ?>"></li>
                <li><label for="">Phone :</label><br/><input type="text" name="phone" value="<?php echo $cookie_phone ?>"></li>
                <li><label for="">Email : </label><br/><input type="text" name="email" value="<?php echo $cookie_email?>"></li>
                <li><input type="submit" name="submit" value="Submit"></li>
            </ul> 
        </form>
        <p>
            <a href="../index.php">Back to Home Page</a>
        </p>
    </div>


</body>
</html>