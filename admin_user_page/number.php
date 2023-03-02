<?php
session_start();
include "db_conn.php";
//sorszam ujrakuldese

if(isset($_POST['email']) ) {

    
}

$email = ($_POST['email']);

if(empty($email)) {
    header("Location: index.php?error=Real Name is required");
    exit();
}



$sql =" SELECT number FROM users WHERE email = '$email' ";

$result = mysqli_query($conn, $sql);

header("Location: admin.php");


