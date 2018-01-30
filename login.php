<?php include("connect.php");
include("crud-user.php");

$user = $_POST["user"];
$password = $_POST["password"];

$check = checkUser($connection, $user, $password);

if($check==null){
    header("Location: index.php?login=0");
} else {
    setcookie("logged_user", $check["email"], time() + 60);
    header("Location: index.php?login=1");
} 
die();