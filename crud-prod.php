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

function selectProduct($connection, $id){
    $query = "select * from produtos where id = {$id}";
    $result = mysqli_query($connection, $query);
    return mysqli_fetch_assoc($result);
}

function updateProduct($connection, $id, $name, $price, $description, $id_category, $used){
    $query = "update produtos set name='{$name}', price={$price}, description='{$description}', id_category={$id_category}, used={$used} where id={$id}";
    return mysqli_query($connection, $query);
}

function insertProduct($connection, $name, $price, $description, $id_category, $used){
    $query = "insert into produtos (name, price, description, id_category, used) values ('{$name}', {$price}, '{$description}', {$id_category}, {$used})";
    return mysqli_query($connection, $query);
}


function deleteProduct($connection, $id){
    $query = "delete from produtos where id='{$id}'";
    return mysqli_query($connection, $query);
}