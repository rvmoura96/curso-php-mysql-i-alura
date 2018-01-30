<?php
session_start();
function isLogged(){
    return isset($_SESSION["logged_user"]);
}

function validateUser(){
    if(!isLogged()){
        header("Location: index.php?secFlaw=true");
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
}