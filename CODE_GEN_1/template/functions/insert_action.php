<!-- Start session -->
<?php session_start(); ?>
<?php include("customer_function.php") ?>
<?php

// $id = isset($_POST["id"]) ? trim($_POST["id"]) : "";
$firstName = isset($_POST["firstname"]) ? trim($_POST["firstname"]) : "";
$surName = isset($_POST["surname"]) ?  trim($_POST["surname"]) : "";
$phone = isset($_POST["phone"]) ?  trim($_POST["phone"]) : "";
$email = isset($_POST["email"]) ?  trim($_POST["email"]) : "";
$submit = isset($_POST["submit"]) ?  trim($_POST["submit"]) : "";


// <---------- Set-Cookie --------------->
// setcookie("id", $id, time()+(60*5), "/");
// setcookie("firstname", $firstName, time()+(60*5), "/");
// setcookie("surname", $surName, time()+(60*5), "/");
// setcookie("phone", $phone, time()+(60*5), "/");
// setcookie("email", $email, time()+(60*5), "/");

// Set Session
$_SESSION["firstname"] = $firstName;
$_SESSION["surname"] = $surName;
$_SESSION["phone"] = $phone;
$_SESSION["email"] = $email;



function requiredMessage($field)
{
    return 'Please fill out ' . $field . ' field.';
}


function requireField($value)
{
    if (empty($value)) return true;
    return;
}


$validate = array();


if (requireField($firstName)) $validate['firstname'] = requiredMessage('Firstname');
if ($surName == "") $validate['surname'] = requiredMessage('Surname');
if ($phone == "") $validate['phone'] = requiredMessage('Phone');
if ($email == "") $validate['email'] = requiredMessage('Email');
if (!empty($email) && !filter_var($email, FILTER_VALIDATE_EMAIL)) $validate['email'] = 'Please fill out Email Correctly.';

if (!$submit) {
    header("location:/PHP102/PHP-CRUD/pages/insert_form.php");
}

if ($validate) {
    header("location:/PHP102/PHP-CRUD/pages/insert_form.php");
    $_SESSION["validation"] =  $validate;
    exit;
}

insertNewCustomer($firstName, $surName, $phone, $email, $conn);

// Delete cookies
// setcookie("id", "", time()-3600, "/");
// setcookie("firstname", "", time()-3600, "/");
// setcookie("surname", "", time()-3600, "/");
// setcookie("phone", "", time()-3600, "/");
// setcookie("email", "", time()-3600, "/");


//Remove all session variables
session_unset();

//Destroy SESSION
session_destroy();


?>