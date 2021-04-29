<?php

function emptyInputSignup($name, $email, $pass)
{
    $result;
    if(empty($name) || empty($email) || empty($pass)){
        $result= true;
    }else{
        $result=false;
    }
    return $result;
}

function invalidUid($name)
{
    $result;
    if(!preg_match("/^[a-zA-Z0-9]*$/", $name)){
        $result= true;
    }else{
        $result=false;
    }
    return $result;
}

function invalidEmail($email)
{
    $result;
    if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
        $result= true;
    }else{
        $result=false;
    }
    return $result;
}

function uidExist($conn, $name, $email)
{
    $sql= "SELECT * FROM users WHERE usersName = ? OR usersEmail = ?;";
    $stmt = mysqli_stmt_init($conn);
    if(!mysqli_stmt_prepare($stmt, $sql)){
        header("location: ../Index.php?error=stmtfailed");
        exit();
    }

    mysqli_stmt_bind_param($stmt, "ss", $name, $email);
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

function createUser($conn, $name, $email, $pass)
{
    $sql="INSERT INTO users (usersName, usersEmail, usersPwd) VALUES (?,?,?);";
    $stmt = mysqli_stmt_init($conn);
    if(!mysqli_stmt_prepare($stmt, $sql)){
        header("location: ../Index.php?error=stmtfailed");
        exit();
    }

    $hashedPwd = password_hash($pass, PASSWORD_DEFAULT);

    mysqli_stmt_bind_param($stmt, "sss", $name, $email, $hashedPwd);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    header("location: ../Index.php?error=none");
    exit();
}

function emptyInputLogin($name, $pass)
{
    $result;
    if(empty($name) || empty($pass)){
        $result= true;
    }else{
        $result=false;
    }
    return $result;
}

function loginUser($conn, $name, $pass){
    $uidExist= uidExist($conn, $name, $name);

    if($uidExist === false)
    {
        header("location: ../Index.php?error=errorlogin");
        exit();
    }

    $passHashed = $uidExist["usersPwd"];
    $checkPass = password_verify($pass, $passHashed);

    if($checkPass === false){
        header("location: ../Index.php?error=errorloginpass");
        exit();
    }
    else if($checkPass === true)
    {
        session_start();
        // $_SESSION["userid"] = $uidExist["usersId"];
        $_SESSION["userName"] = $uidExist["usersName"];
        header("location: ../indexhome.php");
        exit();
    }
}

function emptyInputTCreg($TCaddress, $TCname)
{
    $result;
    if(empty($TCaddress) || empty($TCname)){
        $result= true;
    }else{
        $result=false;
    }
    return $result;
}

function TCnameExist($conn, $TCaddress, $TCname)
{
    $sql= "SELECT * FROM test centre WHERE TSaddress = ? OR TSname = ?;";
    $stmt = mysqli_stmt_init($conn);
    if(!mysqli_stmt_prepare($stmt, $sql)){
        header("location: ../IndexReg.php?error=TCstmtfailed");
        exit();
    }

    mysqli_stmt_bind_param($stmt, "ss", $TCaddress, $TCname);
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



function createTC($conn, $TCaddress, $TCname)
{
    $sql="INSERT INTO test centre (TSaddress, TSname) VALUES (?,?);";
    $stmt = mysqli_stmt_init($conn);
    if(!mysqli_stmt_prepare($stmt, $sql)){
        header("location: ../IndexReg.php?error=TCstmtfailed");
        exit();
    }

    // $hashedName = name_hash($TCname);

    mysqli_stmt_bind_param($stmt, "ss", $TCaddress, $TCname);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    header("location: ../IndexReg.php?error=none");
    exit();
}

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
    $Tsql= "SELECT * FROM tester WHERE Tusername = ? OR Tname = ?;";
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
    $Tsql="INSERT INTO test centre (Tusername, Tname, Tpass) VALUES (?,?,?);";
    $Tstmt = mysqli_stmt_init($conn);
    if(!mysqli_stmt_prepare($Tstmt, $Tsql)){
        header("location: ../IndexReg.php?error=Testerstmtfailed");
        exit();
    }

    $hashedTpass = password_hash($Tpass, PASSWORD_DEFAULT);

    mysqli_stmt_bind_param($Tstmt, "sss", $Tusername, $Tname, $hashedTpass);
    mysqli_stmt_execute($Tstmt);
    mysqli_stmt_close($Tstmt);
    header("location: ../IndexReg.php?error=none");
    exit();
}
function emptyInputKSreg($KSname, $AvailableStock, $KitType)
{
    $result;
    if(empty($KSname) || empty($AvailableStock) || empty($KitType)){
        $result= true;
    }else{
        $result=false;
    }
    return $result;
}