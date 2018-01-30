<?php include("header.php");
include("connect.php");
include("crud-prod.php");
include("user-logic.php");

validateUser();
$name = $_POST["name"];
$price = $_POST["price"];
$description = $_POST["description"];
$id_category = $_POST["id_category"];
if(array_key_exists('used', $_POST)){
    $used = "true";
} else {
    $used = "false";
}
    
if(insertProduct($connection, $name, $price, $description, $id_category, $used)){ ?>
    <p class="text-success">Produto <?=  $name; ?>, <?= $price;?> adicionado com sucesso!</p>
<?php } else { 
    $msg = mysqli_error($connection);
?>  <p class="text-danger">Produto <?=  $name; ?>, não foi  adicionad:<?= $msg?></p>
<?php
    }
?>
<?php include("footer.php");?>