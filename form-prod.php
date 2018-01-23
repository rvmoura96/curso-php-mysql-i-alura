<?php include("header.php");?>
    <h1>Formulário de cadastro</h1>
    <form action="add-product.php">
        Nome:
        <input type="text" name="name"><br/>
        Preço:
        <input type="number" name="price"><br/>
        <input type="submit" value="Cadastrar">
    </form>
<?php include("footer.php");?>