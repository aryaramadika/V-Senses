<?php

if (isset($_POST["TCsubmit"])){
    // echo "wtf its works , good alden" ;
    $TCaddress = $_POST["TestCentreAddress"];
    $TCname = $_POST["TCenterName"];

    require_once 'dbh.inc.php';
    require_once 'functionTC.inc.php';

    if(emptyInputTCreg($TCaddress, $TCname)!==false){
        header("location: ../IndexReg.php?error=emptyinputlogin");
        exit();
    } 

    createTC($conn, $TCaddress, $TCname);
}
else{
    // echo "goblok lu den";
    header("location: ../indexhome.php");
        exit();
}