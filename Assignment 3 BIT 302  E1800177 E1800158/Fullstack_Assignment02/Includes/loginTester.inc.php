<?php
if (isset($_POST["testerSubmit"])){
    $PTusername = $_POST["TesterUsername"];
    $PTpass = $_POST["TesterPass"];
    
    require_once 'dbh.inc.php';
    // require_once 'functionLoginPatient.inc.php';
    require_once 'functionTesterLogin.inc.php';

    if(emptyInputTesterLogin($PTusername,$PTpass)!==false){
        header("location: ../indexTesterLogin.php?error=emptyinputlogin");
        exit();
    } 
    
    loginTester($conn, $PTusername,$PTpass);
    }
else{
header("location: ../indexHome.php");
    exit();
}