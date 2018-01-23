<?php include("header.php");?>
    <?php
        $name = $_GET["name"];
        $price = $_GET["price"];
        $connection = mysqli_connect('localhost', 'root', '', 'loja');
        $query = "insert into produtos (name, preco) values ('{$name}', {$price})";
        if(mysqli_query($connection, $query)){ ?>
             <p class="alert-success">Produto <?=  $name; ?>, <?= $price;?> adicionado com sucesso!</p>
    <?php } else{ ?>
            <p class="alert-danger">Produto <?=  $name; ?>, não foi  adicionado.</p>
    <?php
        }
    ?>
<?php include("footer.php");?>