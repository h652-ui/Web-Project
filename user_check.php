<?php 
    include 'account/includes/connect.php';
    if(isset($_SESSION["user_id"])){
        $id = $_SESSION["user_id"];
    }
    $sql = mysqli_query($con, "SELECT * FROM blog;");
?>