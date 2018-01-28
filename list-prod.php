<?php include("header.php");
include("connect.php");
include("crud-prod.php");?>

<?php
    if(array_key_exists('removed', $_GET) && $_GET['removed']=='true'){
?>
    <p class="alert-success">Produto removido com sucesso!</p>
<?php
    }
?>
<meta charset="UTF-8">
<table class="table table-hover">
    <tr>
        <th>Produto</th>
        <th>Valor</th>
        <th>Descrição</th>
        <th>Categoria</th>
        <th>Status</th>
        <th></th>
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
            <td><?=$product['price']?></td>
            <td><?=substr($product['description'], 0, 40);?></td>
            <td><?=$product['name_category']?></td>
            <td><?php if($product['used']==true){ echo "Usado"; } 
                      else{ echo "Novo"; }
                    ?>
            </td>
            <td><a href="update-prod-form.php?id=<?=$product['id'];?>" class="btn btn-primary">Editar</a></td>
            <td>
                <form action="remove-prod.php" method="post">
                    <input type="hidden" name="id" value="<?=$product['id']?>">
                    <button class="btn btn-danger" type="submit">Remover</button>
                </form>
            </td>
        </tr>
    <?php
        endforeach
    ?>
</table>
<?php include("footer.php");?>