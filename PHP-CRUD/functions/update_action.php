<?php
    require("../helper/db.php");
    require("../functions/customer_function.php");
    
    $id = isset($_POST["id"]) ? trim($_POST["id"]) : "";
    $firstName = isset($_POST["firstname"]) ? trim($_POST["firstname"]) : "";
    $surName = isset($_POST["surname"]) ?  trim($_POST["surname"]) : "";
    $phone = isset($_POST["phone"]) ?  trim($_POST["phone"]) : "";
    $email = isset($_POST["email"]) ?  trim($_POST["email"]) : "";
    $submit = isset($_POST["submit"]) ?  trim($_POST["submit"]) : "";

    setcookie("id", $id, time()+(60*5), "/");
    setcookie("firstname", $firstName, time()+(60*5), "/");
    setcookie("surname", $surName, time()+(60*5), "/");
    setcookie("phone", $phone, time()+(60*5), "/");
    setcookie("email", $email, time()+(60*5), "/");


    if(!$submit)
    {
        header("location:/PHP102/PHP-CRUD/pages/insert_form.php");
    }   

    if($firstName == "")
    {
        header("location:/PHP102/PHP-CRUD/pages/insert_form.php?return=1");
        exit;
        
    }

    if($surName == "")
    {
        header("location:/PHP102/PHP-CRUD/pages/insert_form.php?return=2");
        exit;
    }

    if($phone == "")
    {
        header("location:/PHP102/PHP-CRUD/pages/insert_form.php?return=3");
        exit;
    }

    if($email == "")
    {
        header("location:/PHP102/PHP-CRUD/pages/insert_form.php?return=4");
        exit;
    }

    if(!filter_var($email, FILTER_VALIDATE_EMAIL))
    {
        header("location:/PHP102/PHP-CRUD/pages/insert_form.php?return=5");
        exit;
    }
    
   

    
    updateCustomer($id, $firstName, $surName, $phone, $email,$conn);
    setcookie("id", "", time()-3600, "/");
    setcookie("firstname", "", time()-3600, "/");
    setcookie("surname", "", time()-3600, "/");
    setcookie("phone", "", time()-3600, "/");
    setcookie("email", "", time()-3600, "/");
?>