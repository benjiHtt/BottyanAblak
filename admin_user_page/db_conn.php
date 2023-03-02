<?php


$sname ="localhost";
$unmae ="root";
$password= "";

$db_name= "bottyanablak";


/*
$sname ="localhost";
$unmae ="toussel";
$password= "123toussel123";

$db_name= "toussel";

$conn = mysqli_connect($sname, $unmae, $password, $db_name);
*/

$conn = mysqli_connect($sname, $unmae, $password, $db_name);

if(!$conn) {
    echo "Connection Failed";
}