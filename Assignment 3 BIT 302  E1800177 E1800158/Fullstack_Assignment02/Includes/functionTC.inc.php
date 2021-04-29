<?php
function createTC($conn, $TCaddress, $TCname)
{
    $sql="INSERT INTO testcentre (TSaddress, TSname) VALUES (?,?);";
    $stmt = mysqli_stmt_init($conn);
    if(!mysqli_stmt_prepare($stmt, $sql)){
        header("location: ../IndexReg.php?error=TCstmtfailed");
        exit();
    }
    mysqli_stmt_bind_param($stmt,"ss", $TCaddress, $TCname);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    header("location: ../indexHome.php");
    exit();
}



function TCnameExist($conn, $TCaddress, $TCname)
{
    $sql= "SELECT * FROM testcentre WHERE TSaddress = ? OR TSname = ?;";
    $stmt = mysqli_stmt_init($conn);
    if(!mysqli_stmt_prepare($stmt, $sql)){
        header("location: ../IndexReg.php?error=TCstmtfailedLOL");
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
