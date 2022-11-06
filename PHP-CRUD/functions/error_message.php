<!-- Start session -->
<?php session_start(); ?>

<?php

$session_validation = isset($_SESSION["validation"]) ? $_SESSION["validation"] : [];

if ($session_validation) {
    echo  "<ul>";
    foreach ($session_validation as $validation => $value) :
        echo '<li class="error">' . $value . '</li>';
    endforeach;
    echo  "</ul>";
}
?>

<!-- Cookie session -->
<?php
require("../helper/db.php");
require("customer_function.php");
$isEdit = false;
if (isset($_GET["action"]) && $_GET["action"] == "edit") {
    $isEdit = true;
    $id = $_GET['id'];
    $customers = getCustomerByID($id, $conn);
    if (count($customers) > 0) {
        foreach ($customers as $customer) {
            // setcookie("id",$customer["id"], time()+(60*5), "/");
            // setcookie("firstname",$customer["firstname"], time()+(60*5), "/");
            // setcookie("surname",$customer["surname"], time()+(60*5), "/");
            // setcookie("phone",$customer["phone"], time()+(60*5), "/");
            // setcookie("email",$customer["email"], time()+(60*5), "/");

            $session_id = $customer["id"];
            $session_firstname = $customer["firstname"];
            $session_surname = $customer["surname"];
            $session_phone = $customer["phone"];
            $session_email = $customer["email"];
        }
    }
} else {
    // $cookie_firstname = isset($_COOKIE["firstname"])? $_COOKIE["firstname"] : "";
    // $cookie_surname = isset($_COOKIE["surname"])? $_COOKIE["surname"] : "";
    // $cookie_phone = isset($_COOKIE["phone"])? $_COOKIE["phone"] : "";
    // $cookie_email = isset($_COOKIE["email"])? $_COOKIE["email"] : "";

    $session_firstname = isset($_SESSION["firstname"]) ? $_SESSION["firstname"] : "";
    $session_surname = isset($_SESSION["surname"]) ? $_SESSION["surname"] : "";
    $session_phone = isset($_SESSION["phone"]) ? $_SESSION["phone"] : "";
    $session_email = isset($_SESSION["email"]) ? $_SESSION["email"] : "";
}
?>