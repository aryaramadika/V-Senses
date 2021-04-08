<?php
$serverName="localhost";
$dbUserName="root";
$dbPassword="";
$dbName="fullstack_assignment02";

$conn= mysqli_connect($serverName, $dbUserName , $dbPassword , $dbName);

if(!$conn)
{
    die("connection failed: ". mysqli_connect_error());
}
