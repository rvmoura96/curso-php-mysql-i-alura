<?php include("header.php");
include("connect.php");
include("crud-prod.php");

$id = $_POST["id"];
$name = $_POST["name"];
$price = $_POST["price"];
$description = $_POST["description"];
$id_category = $_POST["id_category"];
if(array_key_exists('used', $_POST)){
    $used = "true";
} else {
    $used = "false";
}

if(updateProduct($connection, $id, $name, $price, $description, $id_category, $used)){ ?>
    <p class="text-success">Produto <?=  $name; ?>, <?= $price;?> alterado com sucesso!</p>
<?php } else { 
    $msg = mysqli_error($connection);
?>  <p class="text-danger">Produto <?=  $name; ?>, não foi  alterado:<?= $msg?></p>
<?php
    }
?>
<?php include("footer.php");?>