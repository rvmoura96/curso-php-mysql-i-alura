<?php include("header.php");?>
<?php include("connect.php");?>
<?php

    function insertProduct($connection, $name, $price){
        $query = "insert into produtos (name, preco) values ('{$name}', {$price})";
        return mysqli_query($connection, $query);
    }

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