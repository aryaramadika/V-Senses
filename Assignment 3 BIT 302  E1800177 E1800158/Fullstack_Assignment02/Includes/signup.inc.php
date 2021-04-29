<?php

if(isset($_POST["submit"]))
{
 $name=$_POST["newuserID"];
 $email=$_POST["emailID"];
 $pass=$_POST["newpassID"];

 require_once 'dbh.inc.php';
 require_once 'function.inc.php';

 if(emptyInputSignup($name, $email, $pass)!==false){
    header("location: ../Index.php?error=emptyinput");
    exit();
} 
if(invalidUid($name)!==false){
    header("location: ../Index.php?error=invaliduid");
    exit();
} 
if(invalidEmail($email)!==false){
    header("location: ../Index.php?error=invalidemail");
    exit();
} 
if(uidExist($conn, $name, $email)!==false){
    header("location: ../Index.php?error=usernametaken");
    exit();
} 
createUser($conn, $name, $email, $pass);

}
else
{
    header("location: ../Index.php");
    exit();
}