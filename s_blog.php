<?php
include 'account/includes/connect.php';
$name = $_POST['name'];
$date = $_POST['date'];
$subject = $_POST['subject'];
$blog = $_POST['blog'];
$image = addslashes(file_get_contents($_FILES['image']['tmp_name']));
$sql = "INSERT INTO blog (Heading, Date, Writer, Blog, Image) VALUES ('$subject', '$date','$name', '$blog', '$image')";
$con->query($sql);

header("location: ../blog.php");
?>