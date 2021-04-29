<?php
function emptyInputTester($Tusername, $Tname, $Tpass)
{
    $result;
    if(empty($Tusername) || empty($Tname) || empty($Tpass)){
        $result= true;
    }else{
        $result=false;
    }
    return $result;
}
function TesterNameExist($conn, $Tusername, $Tname, $Tpass)
{
    $Tsql= "SELECT * FROM tester WHERE Testerusername = ? OR Testername = ?;";
    $Tstmt = mysqli_stmt_init($conn);
    if(!mysqli_stmt_prepare($Tstmt, $Tsql)){
        header("location: ../IndexReg.php?error=Testerstmtfailed");
        exit();
    }

    mysqli_stmt_bind_param($Tstmt, "sss", $Tusername, $Tname, $Tpass);
    mysqli_stmt_execute($Tstmt);

    $TresultData = mysqli_stmt_get_result($Tstmt);

    if($Trow = mysqli_fetch_assoc($TresultData)){
        return $Trow;
    }
    else{
        $Tresult=false;
        return $Tresult;
    }

    mysqli_stmt_close($stmt);
}

function createTester($conn, $Tusername, $Tname, $Tpass)
{
    $Tsql="INSERT INTO tester (TesterUsername, TesterName, TesterPwd) VALUES (?,?,?);";
    $Tstmt = mysqli_stmt_init($conn);
    if(!mysqli_stmt_prepare($Tstmt, $Tsql)){
        header("location: ../IndexReg.php?error=Testerstmtfailed");
        exit();
    }

    $hashedTpass = password_hash($Tpass, PASSWORD_DEFAULT);

    mysqli_stmt_bind_param($Tstmt, "sss", $Tusername, $Tname, $hashedTpass);
    mysqli_stmt_execute($Tstmt);
    mysqli_stmt_close($Tstmt);
    header("location: ../indexHome.php");
    exit();
}


?>