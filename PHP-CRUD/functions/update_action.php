<?php
// Start Session
session_start();
require("../helper/db.php");
require("../functions/customer_function.php");

$id = isset($_POST["id"]) ? trim($_POST["id"]) : "";
$firstName = isset($_POST["firstname"]) ? trim($_POST["firstname"]) : "";
$surName = isset($_POST["surname"]) ?  trim($_POST["surname"]) : "";
$phone = isset($_POST["phone"]) ?  trim($_POST["phone"]) : "";
$email = isset($_POST["email"]) ?  trim($_POST["email"]) : "";
$submit = isset($_POST["submit"]) ?  trim($_POST["submit"]) : "";

//<---------- Set Cookies ----------------->
// setcookie("id", $id, time()+(60*5), "/");
// setcookie("firstname", $firstName, time()+(60*5), "/");
// setcookie("surname", $surName, time()+(60*5), "/");
// setcookie("phone", $phone, time()+(60*5), "/");
// setcookie("email", $email, time()+(60*5), "/");

// <---------- Set Session ---------------->
$_SESSION["id"] = $id;
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



if (!$submit) {
    header("location:/PHP102/PHP-CRUD/pages/insert_form.php");
}

if ($firstName == "") {
    header("location:/PHP102/PHP-CRUD/pages/insert_form.php?return=1");
    exit;
}

if ($surName == "") {
    header("location:/PHP102/PHP-CRUD/pages/insert_form.php?return=2");
    exit;
}

if ($phone == "") {
    header("location:/PHP102/PHP-CRUD/pages/insert_form.php?return=3");
    exit;
}

if ($email == "") {
    header("location:/PHP102/PHP-CRUD/pages/insert_form.php?return=4");
    exit;
}

if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    header("location:/PHP102/PHP-CRUD/pages/insert_form.php?return=5");
    exit;
}




updateCustomer($id, $firstName, $surName, $phone, $email, $conn);

// <-------------- Set cookies ------------------>
// setcookie("id", "", time()-3600, "/");
// setcookie("firstname", "", time()-3600, "/");
// setcookie("surname", "", time()-3600, "/");
// setcookie("phone", "", time()-3600, "/");
// setcookie("email", "", time()-3600, "/");


// <------------- Set Session ------------------->
//remove all session 
session_unset();

//Destroy session
session_destroy();
