<?php

if (isset($_POST["TSubmit"])){
    $Tusername = $_POST["testerID"];
    $Tname = $_POST["testerName"];
    $Tpass = $_POST["testerPass"];

    require_once 'dbh.inc.php';
    require_once 'functionTester.inc.php';

    if(emptyInputTester($Tusername, $Tname, $Tpass)!==false){
        header("location: ../IndexReg.php?error=emptyinputTester");
        exit();
    } 

    createTester($conn, $Tusername, $Tname, $Tpass);
}
else{
    header("location: ../indexhome.php");
        exit();
}