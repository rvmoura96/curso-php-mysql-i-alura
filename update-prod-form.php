<?php include("header.php");
      include("connect.php");
      include("crud-category.php");
      include("crud-prod.php");
      
      $id = $_GET['id'];
      $product = selectProduct($connection, $id);
      $categories = listCategories($connection);
      $used = $product['used'] ? "checked='checked'" : "";
    ?>
    <h1 class="text-center">Editando  produto</h1>
    <form method="post" action="update-prod.php">
        <input type="hidden" name="id" value="<?=$product['id']?>">
        <table class="table">
            <tr>
                <td>Produto</td>
                <td><input type="text" class="form-control form-control-sm" name="name" value="<?=$product['name']?>"></td>
            </tr>
            <tr>
                <td>Preço do Produto</td>
                <td><input type="number" class="form-control form-control-sm" name="price" value="<?=$product['price']?>"></td>
            </tr>
            <tr>
                <td>Descricao</td>
                <td><textarea class="form-control form-control-sm" name="description"><?=$product['description']?>  </textarea></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="checkbox" name="used" <?=$used?> value="true"> Usado</td>
            </tr>
            <tr>
                <td>Categoria</td>
                <td>
                <select class="form-control" name="id_category">
                <?php foreach($categories as $category): 
                    $isCategory = $product['id_category'] == $category['id'];
                    $select = $isCategory ? "selected='selected'" : "";
                    ?>
                    <option value="<?=$category['id']?>" <?=$select?>>
                            <?=$category['name']?>
                    </option>
                <?php endforeach ?>
                </select>
                </td>
            </tr>
            <tr>
                <td><button type="submit" class="btn btn-success">Editar</button></td>
            </tr>
        </table>
    </form>
<?php include("footer.php");?>