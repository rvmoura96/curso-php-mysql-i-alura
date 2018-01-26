<?php include("header.php");?>
<?php include("connect.php");
    $result = mysqli_query($connection, "select * from produtos");
    while($product = mysqli_fetch_assoc($result)){
        echo $product['name'] . "<br>";
    }
?>
<?php include("footer.php");?>