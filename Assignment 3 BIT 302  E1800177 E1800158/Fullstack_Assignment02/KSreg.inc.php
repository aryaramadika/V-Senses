<?php

if (isset($_POST["KSsubmit"])){
    $KSname = $_POST["kitName"];
    $AvailableStock = $_POST["availableStock"];
    $KitType = $_POST["kitType"];

    require_once 'dbh.inc.php';
    require_once 'function.inc.php';

    if(emptyInputKSreg($KSname, $AvailableStock, $KitType)!==false){
        header("location: ../IndexReg.php?error=emptyinputKitStock");
        exit();
    } 

    loginUser($conn, $KSname, $AvailableStock, $KitType);
}
else{
    header("location: ../indexhome.php");
        exit();
}