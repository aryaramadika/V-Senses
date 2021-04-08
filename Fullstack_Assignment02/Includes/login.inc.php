<?php

if (isset($_POST["submit"])){
    $name = $_POST["newuserID"];
    $pass = $_POST["newpassID"];

    require_once 'dbh.inc.php';
    require_once 'function.inc.php';

    if(emptyInputLogin($name, $pass)!==false){
        header("location: ../Index.php?error=emptyinputlogin");
        exit();
    } 

    loginUser($conn, $name, $pass);
}
else{
    header("location: ../indexhome.php");
        exit();
}