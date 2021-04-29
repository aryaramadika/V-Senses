<?php
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

function createKS($conn, $KSname, $AvailableStock, $KitType)
{
    $Tsql="INSERT INTO kitstock (kitName, availableStock, typeStock) VALUES (?,?,?);";
    $Tstmt = mysqli_stmt_init($conn);
    if(!mysqli_stmt_prepare($Tstmt, $Tsql)){
        header("location: ../IndexReg.php?error=Testerstmtfailed");
        exit();
    }

    // $hashedTpass = password_hash($Tpass, PASSWORD_DEFAULT);

    mysqli_stmt_bind_param($Tstmt, "sss",$KSname, $AvailableStock, $KitType);
    mysqli_stmt_execute($Tstmt);
    mysqli_stmt_close($Tstmt);
    header("location: ../indexHome.php");
    exit();
}
?>