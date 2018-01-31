<?php include("header.php");
include("connect.php");
include("crud-category.php");
include("user-logic.php");

validateUser();
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
                <td></td>
                <td><input type="checkbox" name="used" value="true"> Usado</td>
            </tr>
            <tr>
                <td>Categoria</td>
                <td>
                <select class="form-control" name="id_category" >
                <?php foreach($categories as $category): ?>
                    <option value="<?=$category['id']?>">
                            <?=$category['name']?>
                    </option>
                <?php endforeach ?>
                </select>
                </td>
            </tr>
            <tr>
                <td><button type="submit" class="btn btn-success">Cadastrar</button></td>
            </tr>
        </table>
    </form>
<?php include("footer.php");?>