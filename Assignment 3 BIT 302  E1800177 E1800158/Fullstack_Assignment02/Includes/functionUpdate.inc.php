<?php
function updatePatient($conn, $symptoms, $type, $status)
{
    $sql="INSERT INTO patientrecord(symptoms, types, statusPatient) VALUES (?,?,?);";
    $stmt = mysqli_stmt_init($conn);
    if(!mysqli_stmt_prepare($stmt, $sql)){
        header("location: ../indexPatient.php?error=Patientstmtfailed");
        exit();
    }

    mysqli_stmt_bind_param($stmt,"sss", $symptoms, $type, $status);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    header("location: ../testerHome.php");
    exit();
}



function PatientUSnameExist($conn, $Pusername)
{
    $sql= "SELECT * FROM patientrecord WHERE patientUsername = ?;";
    $stmt = mysqli_stmt_init($conn);
    if(!mysqli_stmt_prepare($stmt, $sql)){
        header("location: ../indexPatient.php?error=Patientstmtfailed");
        exit();
    }

    mysqli_stmt_bind_param($stmt, "s", $Pusername);
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

function emptyInputPatientreg($symptoms,$type, $status)
{
    $result;
    if( empty($symptoms)|| empty($type)|| empty($status)){
        $result= true;
    }else{
        $result=false;
    }
    return $result;
}
