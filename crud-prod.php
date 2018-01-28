<?php include("connect.php");?>
<?php
function listProducts($connection){
    $products = [];
    $result = mysqli_query($connection, "select p.*, c.name as name_category from produtos as p join categorias as c on c.id=p.id_category");
    while($product = mysqli_fetch_assoc($result)){
        array_push($products, $product);
    }
    return $products;
}

function insertProduct($connection, $name, $price, $description, $id_category){
    $query = "insert into produtos (name, price, description, id_category) values ('{$name}', {$price}, '{$description}', {$id_category})";
    return mysqli_query($connection, $query);
}


function deleteProduct($connection, $id){
    $query = "delete from produtos where id='{$id}'";
    return mysqli_query($connection, $query);
}