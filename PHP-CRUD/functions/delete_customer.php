<?php
    // Delete Data function
    require("../helper/db.php");
    require("./customer_function.php");

    $id = $_GET["id"];
    deleteCustomer($id,$conn);
      

?>