
<?php if(isset($_GET["return"]) && $_GET["return"]==1): ?>
                <ul>
                    <li class="error">Please fill out Firstname field.</li>
                </ul>
            <?php elseif(isset($_GET["return"]) && $_GET["return"]==2): ?>  
                <ul>
                    <li class="error">Please fill out Surname field.</li>
                </ul>
            <?php elseif(isset($_GET["return"]) && $_GET["return"]==3): ?>
                <ul>
                    <li class="error">Please fill out Phone field.</li>
                </ul>
            <?php elseif(isset($_GET["return"]) && $_GET["return"]==4): ?>
                <ul>
                    <li class="error">Please fill out Email field.</li>
                </ul>
            <?php elseif(isset($_GET["return"]) && $_GET["return"]==5): ?>
                <ul>
                    <li class="error">Please fill out Email Correctly. .</li>
                </ul>
 <?php endif; ?>   

<!-- Cookie session -->
<?php 
    require("../helper/db.php");
    require("customer_function.php");
    $isEdit = false;
    if(isset($_GET["action"]) && $_GET["action"] == "edit")
    {
        $isEdit = true;
        $id = $_GET['id'];
        $customers = getCustomerByID($id,$conn);
        if(count($customers) > 0)
        {
            // $firstname = $customers[0]["firstname"];
            // $surname = $customers[0]["surname"];
            // $phone = $customers[0]["phone"];
            // $email = $customers[0]["email"];


            // setcookie("firstname",$firstname, time()+(60*5), "/");
            // setcookie("surname",$surname, time()+(60*5), "/");
            // setcookie("phone",$phone, time()+(60*5), "/");
            // setcookie("email",$email, time()+(60*5), "/");

            // $cookie_firstname = $firstname;
            // $cookie_surname = $surname;
            // $cookie_phone = $phone;
            // $cookie_email = $email;

            foreach($customers as $customer)
            {
                setcookie("id",$customer["id"], time()+(60*5), "/");
                setcookie("firstname",$customer["firstname"], time()+(60*5), "/");
                setcookie("surname",$customer["surname"], time()+(60*5), "/");
                setcookie("phone",$customer["phone"], time()+(60*5), "/");
                setcookie("email",$customer["email"], time()+(60*5), "/");

                $cookie_id = $customer["id"];
                $cookie_firstname = $customer["firstname"];
                $cookie_surname = $customer["surname"];
                $cookie_phone = $customer["phone"];
                $cookie_email = $customer["email"];
            }
        }
    }else
    {
        $cookie_firstname = isset($_COOKIE["firstname"])? $_COOKIE["firstname"] : "";
        $cookie_surname = isset($_COOKIE["surname"])? $_COOKIE["surname"] : "";
        $cookie_phone = isset($_COOKIE["phone"])? $_COOKIE["phone"] : "";
        $cookie_email = isset($_COOKIE["email"])? $_COOKIE["email"] : "";
    }  
?>

