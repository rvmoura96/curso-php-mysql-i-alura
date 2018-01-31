<?php
session_start();
function isLogged(){
    return isset($_SESSION["logged_user"]);
}

function validateUser() {
    if(!isLogged() ){
        $_SESSION["danger"] = "Você não tem acesso a esta funcionalidade.";
        header("Location: index.php");
        die();
    }
}

function loggedUser(){
    return $_SESSION["logged_user"];
}

function userLogin($check){
    $_SESSION["logged_user"] = $check;
}

function logout(){
    session_destroy();
    session_start();
}