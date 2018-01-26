<?php include("header.php");
include("connect.php");
include("crud-prod.php"); ?>

<?php

    $name = $_GET["name"];
    $price = $_GET["price"];
    
    if(insertProduct($connection, $name, $price)){ ?>
        <p class="text-success">Produto <?=  $name; ?>, <?= $price;?> adicionado com sucesso!</p>
<?php } else { 
        $msg = mysqli_error($connection);
?>      <p class="text-danger">Produto <?=  $name; ?>, não foi  adicionad:<?= $msg?></p>
    <?php
        }
    ?>
<?php include("footer.php");?>