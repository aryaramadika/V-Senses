<?php
// function loginPatient($conn, $PTname, $PTusername,$PTpass)
// {
//     $sql="INSERT INTO patientrecord(patientTesterName, patientTesterUsername, patientTesterPass) VALUES (?,?,?);";
//     $stmt = mysqli_stmt_init($conn);
//     if(!mysqli_stmt_prepare($stmt, $sql)){
//         header("location: ../indexPatient.php?error=Patientstmtfailed");
//         exit();
//     }
//     mysqli_stmt_bind_param($stmt,"ssss", $PTname, $PTusername,$PTpass);
//     mysqli_stmt_execute($stmt);
//     mysqli_stmt_close($stmt);
//     header("location: ../patientHome.php");
//     exit();
// }

function loginPatient($conn, $PTusername,$PTpass){
    $PatientUSnameExist= PatientUSnameExist($conn, $PTusername,$PTpass);

    if($PatientUSnameExist === false)
    {
        header("location: ../indexPatientTester.php?error=errorloginpatient");
        exit();
    }

    $passHashed = $PatientUSnameExist["patientPass"];
    $checkPass = password_verify($PTpass, $passHashed);

    if($checkPass === false){
        header("location: ../indexPatientTester.php?error=errorloginpass");
        exit();
    }
    else if($checkPass === true)
    {
        session_start();
        // $_SESSION["userid"] = $uidExist["usersId"];
        $_SESSION["patientUserName"] = $PatientUSnameExist["patientUserName"];
        header("location: ../patientHome.php");
        exit();
    }
}

function PatientUSnameExist($conn, $PTusername)
{
    $sql= "SELECT * FROM patientrecord WHERE patientUsername = ?  ;";
    $stmt = mysqli_stmt_init($conn);
    if(!mysqli_stmt_prepare($stmt, $sql)){
        header("location: ../indexPatientTester.php?error=Patientstmtfailed");
        exit();
    }

    mysqli_stmt_bind_param($stmt, "s", $PTusername);
    mysqli_stmt_execute($stmt);

    $resultData = mysqli_stmt_get_result($stmt);

    if($row = mysqli_fetch_assoc($resultData)){
        return $row;
    }
    else{
        $result=false;
        return $result;
    }

    mysqli_stmt_close($stmt);

}

function emptyInputPatientLogin($PTusername,$PTpass)
{
    $result;
    if(empty($PTusername)|| empty($PTpass)){
        $result= true;
    }else{
        $result=false;
    }
    return $result;
}
