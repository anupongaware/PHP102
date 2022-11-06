<?php
require("../helper/db.php");


// Add customer function
function insertNewCustomer($firstname, $surname, $phone, $email, $conn)
{
    $sql = "INSERT INTO customer (id, firstname, surname, phone, email) VALUES (0, ?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ssss", $firstname, $surname, $phone, $email);

    if ($stmt->execute() === TRUE) {
        echo "New record created successfully" . "</br>";
        echo "<a href='../pages/insert_form.php'>Back to Inesert Form</a>" . "</br>";
        echo "<a href='../index.php'>Back to Home Page</a>";
    } else {
        echo "Error : " . $sql . "<br>" . $conn->error;
    }
    $stmt->close();
    $conn->close();
}


// Get All data function
function getAllCustomer($conn)
{
    $sql = "SELECT id,firstname, surname, phone, email, insert_time FROM customer";
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


// Delete data by id function 
function deleteCustomer($id, $conn)
{

    $sql = "DELETE FROM customer WHERE id=?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $id);

    if ($stmt->execute() === TRUE) {
        echo "Deleted tabel id: $id successfully" . "</br>" . "</br>";
        echo "<a href='../pages/show_all_customer.php'>Back to All Customer Table</a>" . "</br>";
        echo "<a href='../index.php'>Back to Home Page</a>" . "</br>";
    } else {
        echo "Error : " . $sql . "<br>" . $conn->error;
    }
    $stmt->close();
    $conn->close();
}

//Get Customer by id function
function getCustomerByID($id, $conn)
{
    $sql = "SELECT * FROM customer WHERE id=$id";
    $result = $conn->query($sql);
    $customers = array();

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $customers_row = array(
                "id" => $row["id"],
                "firstname" => $row["firstname"],
                "surname" => $row["surname"],
                "phone" => $row["phone"],
                "email" => $row["email"]
            );
            array_push($customers, $customers_row);
        }
    } else {
        echo "0 Results";
    }

    $conn->close();
    return $customers;
}


//Update data function
function updateCustomer($id, $firstname, $surname, $phone, $email, $conn)
{
    $sql = "UPDATE customer SET firstname = ?, 
        surname= ?, 
        phone = ?, 
        email = ?
        WHERE id =? ";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ssssi", $firstname, $surname, $phone, $email, $id);

    if ($stmt->execute() === TRUE) {
        echo "Update successfully" . "</br>";
        echo "<a href='../pages/insert_form.php'>Back to Inesert Form</a>" . "</br>";
        echo "<a href='../pages/show_all_customer.php'>Back to Show All Customer</a>" . "</br>";
        echo "<a href='../index.php'>Back to Home Page</a>";
    } else {
        echo "Error : " . $sql . "<br>" . $conn->error;
    }
    $stmt->close();
    $conn->close();
}
