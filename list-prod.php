<?php include("header.php");
include("connect.php");
include("crud-prod.php");?>

<table class="table table-hover">
    <tr>
        <th>Produto</th>
        <th>Valor</th>
        <th></th>
    </tr>
    <?php
        $products = listProducts($connection);
    ?>
    <?php
        foreach($products as $product):
    ?>

        <tr>
            <td><?=$product['name']?></td>
            <td><?=$product['preco']?></td>
            <td><a href="remove-prod.php?id=<?=$product['id']?>" class="text-danger">Remover</a></td>
        </tr>
    <?php
        endforeach
    ?>
</table>
<?php include("footer.php");?>