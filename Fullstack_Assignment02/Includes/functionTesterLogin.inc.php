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

function loginTester($conn, $PTusername,$PTpass){
    $TesterUSnameExist= TesterUSnameExist($conn, $PTusername,$PTpass);

    if($TesterUSnameExist === false)
    {
        header("location: ../indexTesterLogin.php?error=errorlogintester");
        exit();
    }

    $passHashed = $TesterUSnameExist["TesterPwd"];
    $checkPass = password_verify($PTpass, $passHashed);

    if($checkPass === false){
        header("location: ../indexTesterLogin.php?error=errorloginpasstester");
        exit();
    }
    else if($checkPass === true)
    {
        session_start();
        $_SESSION["TesterUserName"] = $TesterUSnameExist["TesterUserName"];
        header("location: ../testerHome.php");
        exit();
    }
}

function TesterUSnameExist($conn, $PTusername)
{
    $sql= "SELECT * FROM tester WHERE TesterUsername = ? ;";
    $stmt = mysqli_stmt_init($conn);
    if(!mysqli_stmt_prepare($stmt, $sql)){
        header("location: ../indexPatientTester.php?error=Testerstmtfailed");
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

function emptyInputTesterLogin($PTusername,$PTpass)
{
    $result;
    if(empty($PTusername)|| empty($PTpass)){
        $result= true;
    }else{
        $result=false;
    }
    return $result;
}
