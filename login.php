<?php include("connect.php");
include("crud-user.php");
include("user-logic.php");

$user = $_POST["user"];
$password = $_POST["password"];

$check = checkUser($connection, $user, $password);

if($check==null){
    $_SESSION["danger"] = "Usuário ou senha inválida.";
    header("Location: index.php");
} else {
    $_SESSION["success"] = "Logado com sucesso.";
    userLogin($check["email"]);
    header("Location: index.php?");
} 
die();