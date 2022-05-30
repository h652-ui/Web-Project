<?php
include '../includes/connect.php';

$image = addslashes(file_get_contents($_FILES['image']['tmp_name']));
$sql = "Update items set image=$image where id=2";
$con->query($sql);
header("location: ../admin-page.php");
?>