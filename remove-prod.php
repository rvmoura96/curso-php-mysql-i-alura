<?php include("header.php");
include("connect.php");
include("crud-prod.php");
include("user-logic.php");

$id = $_POST['id'];
deleteProduct($connection, $id);
$_SESSION["success"]="Produto removido com sucesso.";
header("Location:list-prod.php");
die();
?>
