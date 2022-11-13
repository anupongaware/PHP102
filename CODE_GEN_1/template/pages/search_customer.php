<?php
require("../includes/UserController.php");

$users = new UserController();

var_dump($_POST["text_to_seach"]);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP-CRUD</title>
</head>

<body>
    <div class="container">
        <h1>All Customers</h1>
        <table>
            <tr>
                <th>ID</th>
                <th>Firstname</th>
                <th>Surname</th>
                <th>Phone</th>
                <th>Email</th>
                <th>Insert Time</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
            <?php foreach ($customers as $customer) : ?>
                <tr>
                    <td><?php echo $customer["id"] ?></td>
                    <td><?php echo $customer["firstname"] ?></td>
                    <td><?php echo $customer["surname"] ?></td>
                    <td><?php echo $customer["phone"] ?></td>
                    <td><?php echo $customer["email"] ?></td>
                    <td><?php echo $customer["insert_time"] ?></td>
                    <td><button onclick="editCustomer(<?php echo $customer['id'] ?>)">Edit</button></td>
                    <td><button onclick="deleteCustomerPopup(<?php echo $customer['id'] ?>)">Delete</button></td>
                </tr>
            <?php endforeach; ?>
        </table>
        <a href="../index.php">Back to homepage</a>
    </div>
    <script>
        function deleteCustomerPopup(id) {
            if (confirm("Would you like to delete table id : " + id + " ?")) {
                window.open("../functions/delete_customer.php?id=" + id, "_self")
            }
        }

        function editCustomer(id) {
            window.open("../pages/insert_form.php?action=edit&id=" + id);
        }
    </script>
    </div>
</body>

</html>