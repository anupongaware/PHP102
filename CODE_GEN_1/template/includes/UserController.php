<?php

use LDAP\Result;

require("../helper/db.php");

class UserController
{

    const PER_PAGE = 5;

    private $firstname = 'firstname';


    public function index($conn)
    {
        $per_page = self::PER_PAGE;

        $page = isset($_SESSION["page"]) ? $_SESSION["page"] : 1;
        $start = ($page - 1) * $per_page;

        $sql = "SELECT id, {$this->firstname}, surname, phone, email, insert_time FROM customer";
        $result = $conn->query($sql);

        $customers = array();

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $customers_row = array(
                    "id" => $row["id"],
                    "firstname" => $row["firstname"],
                    "surname" => $row["surname"],
                    "phone" => $row["phone"],
                    "email" => $row["email"],
                    "insert_time" => $row["insert_time"]
                );
                array_push($customers, $customers_row);
            }
        } else {
            echo "0 Results";
        }

        $conn->close();
        return $customers;
    }


    public function store()
    {
    }

    public function update()
    {
    }

    public function search($name_search, $conn)
    {
        $sql = "SELECT * FROM customer WHERE `firstname` LIKE '%$name_search%' ";
        $result = $conn->query($sql);

        $customers = array();


        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $customer_row = array(
                    "id" => $row["id"],
                    "firstname" => $row["firstname"],
                    "surname" => $row["surname"],
                    "phone" => $row["phone"],
                    "email" => $row["email"],
                    "insert_time" => $row["insert_time"]
                );
                array_push($customers, $customer_row);
            }
        } else {
            echo "0 result";
        }



        $conn->close();
        return $customers;
    }
}
