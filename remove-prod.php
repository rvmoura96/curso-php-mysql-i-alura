<?php include("header.php");
include("connect.php");
include("crud-prod.php");

$id = $_POST['id'];
deleteProduct($connection, $id);
header("Location:list-prod.php?removed=true");
die();
?>
