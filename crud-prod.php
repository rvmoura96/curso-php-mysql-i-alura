<?php include("connect.php");?>
<?php
function listProducts($connection){
    $products = [];
    $result = mysqli_query($connection, "select * from produtos");
    while($product = mysqli_fetch_assoc($result)){
        array_push($products, $product);
    }
    return $products;
}

function insertProduct($connection, $name, $price){
    $query = "insert into produtos (name, preco) values ('{$name}', {$price})";
    return mysqli_query($connection, $query);
}


function deleteProduct($connection, $id){
    $query = "delete from produtos where id='{$id}'";
    return mysqli_query($connection, $query);
}