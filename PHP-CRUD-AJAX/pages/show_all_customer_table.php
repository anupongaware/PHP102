<?php
require("../includes/UserController.php");

$users = new UserController();

?>

<!--Deleted success alert -->
<form action="../pages/show_all_customer.php" method="post">
    <label for="">Search :</label>
    <input type="text" name="text_to_search" value="">
    <input type="submit" value="SEARCH" name="btn">
</form>

<?php
$text_to_seach = isset($_POST["text_to_search"]) ? trim($_POST["text_to_search"]) : "";
$customers = $text_to_seach ? $users->search($text_to_seach, $conn) : $users->index($conn);
?>

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
            <td><button id="data" onclick="deleteCustomerPopup(<?php echo $customer['id'] ?>)">Delete</button></td>
        </tr>
    <?php endforeach; ?>
</table>
<?php if ($text_to_seach)
    echo
    '<p>
                <a href="../pages/show_all_customer.php">Back to All Customes page</a>
            </p>'
?>



<p>
    <a href="../index.php">Back to homepage</a>
</p>