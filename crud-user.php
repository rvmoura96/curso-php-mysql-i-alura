<?php include("connect.php");

function checkUser($connection, $user, $password){
    $nPassword = md5($password);
    $query = "select * from usuarios where email='{$user}' and password='{$nPassword}'";
    $result = mysqli_query($connection, $query);
    $credentials = mysqli_fetch_assoc($result);
    return $credentials;
}