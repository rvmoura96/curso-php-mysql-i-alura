<?php

function isLogged(){
    return isset($_COOKIE["logged_user"]);
}

function validateUser(){
    if(!isLogged()){
        header("Location: index.php?secFlaw=true");
        die();
    }
}

function loggedUser(){
    return $_COOKIE["logged_user"];
}

function userLogin($check){
    setcookie("logged_user", $check);
}