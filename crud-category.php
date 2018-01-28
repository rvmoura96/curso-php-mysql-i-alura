<?php include("connect.php");

function listCategories($connection){
    $categories = [];
    $result = mysqli_query($connection,"select * from categorias");
    while($category = mysqli_fetch_assoc($result)){
        array_push($categories, $category);
    }
    return $categories;
}

