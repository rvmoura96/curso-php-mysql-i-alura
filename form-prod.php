<?php include("header.php");?>
    <h1 class="text-center">Formulario de produto</h1>
    <form action="add-prod.php">
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
                <td><button type="submit" class="btn btn-success">Cadastrar</button></td>
            </tr>
        </table>
    </form>
<?php include("footer.php");?>