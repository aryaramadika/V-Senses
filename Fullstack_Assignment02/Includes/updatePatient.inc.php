<?php

if (isset($_POST["patientUpdate"])){
    $symptoms = $_POST["symptoms"];
    $type= $_POST["types"];
    $status=$_POST["statusPatient"];

    
    require_once 'dbh.inc.php';
    require_once 'functionUpdate.inc.php';

    if(emptyInputPatientreg($symptoms, $type,$status )!==false){
        header("location: ../indexPatient.php?error=emptyinputlogin");
        exit();
    } 

    loginPatient($conn, $symptoms, $type, $status);
}
else{
    header("location: ../indexhome.php");
        exit();
}