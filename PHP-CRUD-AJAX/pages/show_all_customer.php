<?php
require("../includes/UserController.php");

$users = new UserController();

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
    <title>PHP-CRUD</title>
</head>

<body>
    <?php
    if (isset($_GET['page'])) {
        $_SESSION["page"] = $_GET['page'];
    }
    ?>
    <div class="container">
        <h1>All customers</h1>
        <div id="data"> </div>
        <div id="table"></div>
    </div>
    <script>
        $(document).ready(function() {
            loadTable();
        })

        const loadTable = () => {
            $("#table").load("show_all_customer_table.php", function(responseTxt, statusTxt, xhr) {

            })
        }

        function deleteCustomerPopup(id) {
            if (confirm("Would you like to delete table id : " + id + " ?")) {
                // window.open("../functions/delete_customer.php?id=" + id, "_self")

                // set ajax
                $("#data").load("../functions/delete_customer.php?id=" + id, function(responseTxt, statusTxt, xhr) {
                    console.log("b");
                    if (statusTxt == "success") loadTable();
                    else if (statusTxt == "error") alert("Error: " + xhr.status + ": " + xhr, statusTxt);
                });
            }
        }

        function editCustomer(id) {
            window.open("../pages/insert_form.php?action=edit&id=" + id);
        }
    </script>
</body>

</html>