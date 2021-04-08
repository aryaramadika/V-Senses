<?php

if (isset($_POST["pasientSubmit"])){
    $PTusername = $_POST["patientUsername"];
    $PTpass = $_POST["patientPass"];
    
    require_once 'dbh.inc.php';
    require_once 'functionLoginPatient.inc.php';
    // require_once ' functionTesterLogin.inc.php';

    if(emptyInputPatientLogin($PTusername,$PTpass)!==false){
        header("location: ../indexPatientTester.php?error=emptyinputlogin");
        exit();
    } 

    loginPatient($conn, $PTusername,$PTpass);
}
else{
    header("location: ../patientHome.php");
        exit();
}

