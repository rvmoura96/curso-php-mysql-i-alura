<?php include("header.php");
      include("connect.php");
      include("crud-category.php");
      
      $categories = listCategories($connection);
?>
    <h1 class="text-center">Formulario de produto</h1>
    <form method="post" action="add-prod.php">
        <table class="table">
            <tr>
                <td>Produto</td>
                <td><input type="text" class="form-control form-control-sm" name="name"></td>
            </tr>
            <tr>
                <td>Preço do Produto</td>
                <td><input type="number" class="form-control form-control-sm" name="price"></td>
            </tr>
            <tr>
                <td>Descricao</td>
                <td><textarea class="form-control form-control-sm" name="description" ></textarea></td>
            </tr>
            <tr>
                <td>Categoria</td>
                <td>
                <?php 
                    foreach($categories as $category):
                ?>
                    <input type="radio" name="id_category" value="<?=$category['id']?>"><?=$category['name']?><br/>
                <?php 
                    endforeach 
                ?>
                </td>
            </tr>
            <tr>
                <td><button type="submit" class="btn btn-success">Cadastrar</button></td>
            </tr>
        </table>
    </form>
<?php include("footer.php");?>