<?php

if (isset($_POST["patientSubmit"])){
    $Pname = $_POST["patientName"];
    $Pusername = $_POST["patientUsername"];
    $Ppass = $_POST["patientPass"];
    $symptoms = $_POST["symptoms"];
    $type= $_POST["types"];

    
    require_once 'dbh.inc.php';
    require_once 'functionPatient.inc.php';

    if(emptyInputPatientreg($Pname, $Pusername,$Ppass, $symptoms, $type)!==false){
        header("location: ../indexPatient.php?error=emptyinputlogin");
        exit();
    } 

    loginPatient($conn,$Pname, $Pusername,$Ppass, $symptoms, $type );
}
else{
    header("location: ../indexhome.php");
        exit();
}