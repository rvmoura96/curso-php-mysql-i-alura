<?php include("connect.php");
include("crud-user.php");
include("user-logic.php");

$user = $_POST["user"];
$password = $_POST["password"];

$check = checkUser($connection, $user, $password);

if($check==null){
    header("Location: index.php?login=0");
} else {
    userLogin($check["email"]);
    header("Location: index.php?login=1");
} 
die();