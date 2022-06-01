<?php
include 'account/includes/connect.php';
$product_id = $_GET['deal'];
$desc = $_GET['message'];
if (isset($_SESSION["user_id"])) {
    $id = $_SESSION["user_id"];
    $sql = mysqli_query($con, "SELECT * FROM Users where id=$id;");
    $row = mysqli_fetch_assoc($sql);
    $sql_1 = mysqli_query($con, "SELECT * FROM items where id=$product_id;");
    $row_1 = mysqli_fetch_assoc($sql_1);
    if (($con->query("INSERT INTO orders(customer_id, address, description, payment_type, total, Status, deleted) Values($id, '".$row['address']."', '$desc', 'Cash on Delivery', ".$row_1['price'].", 'Yet to be Delivered', 0)")==true)){
        mysqli_query($con, "INSERT INTO order_details(order_id, item_id, quantity, price) Values($con->insert_id, $product_id, 1, ".$row_1['price'].")");
    }
    header('Location: ./index.php');
} else {
    header('Location: ./account/register.php');
}
