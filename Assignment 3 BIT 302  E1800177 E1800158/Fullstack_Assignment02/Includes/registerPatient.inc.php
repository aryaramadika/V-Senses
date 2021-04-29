<?php

if (isset($_POST["patientSubmit"])){
    $Pname = $_POST["patientName"];
    $Pusername = $_POST["patientUsername"];
    $Ppass = $_POST["patientPass"];
    $symptoms = $_POST["symptoms"];
    $type= $_POST["types"];
    $status=$_POST["statusPatient"];

    
    require_once 'dbh.inc.php';
    require_once 'functionPatient.inc.php';

    if(emptyInputPatientreg($Pname, $Pusername,$Ppass, $symptoms, $type,$status )!==false){
        header("location: ../indexPatient.php?error=emptyinputlogin");
        exit();
    } 
    if(PatientUSnameExist($conn, $Pusername)!==false){
        header("location: ../indexPatient.php?error=usernametaken");
        exit();
    } 

    loginPatient($conn,$Pname, $Pusername,$Ppass, $symptoms, $type, $status);
}
else{
    header("location: ../indexhome.php");
        exit();
}