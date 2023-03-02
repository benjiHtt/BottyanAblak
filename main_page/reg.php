<?php
session_start();
include "db_conn.php";


if(isset($_POST['rname']) && isset($_POST['priv']) && isset($_POST['num']) && isset($_POST['pass'])
&& isset($_POST['phone']) && isset($_POST['email']) && isset($_POST['uname'])) {
  
}

$rname = ($_POST['rname']);
$priv = ($_POST['priv']);
$num = ($_POST['num']);
$pass = ($_POST['pass']);
$phone = ($_POST['phone']);
$email = ($_POST['email']);
$uname = ($_POST['uname']);

if(empty($rname)) {
    header("Location: index.php?error=Real Name is required");
    exit();
}
else if(empty($priv)) {
       header("Location: index.php?error=Privilege is required");
       exit();

}
else if(empty($num)) {
    header("Location: index.php?error=Number is required");
    exit();

}
else if(empty($pass)) {
    header("Location: index.php?error=Password is required");
    exit();

}
else if(empty($phone)) {
    header("Location: index.php?error=Phone is required");
    exit();

}
else if(empty($email)) {
    header("Location: index.php?error=Email is required");
    exit();

}
else if(empty($uname)) {
    header("Location: index.php?error=UserName is required");
    exit();

}


$sql =" INSERT INTO users (name, privilege, number, password, mobile, email, user_name) VALUES ('$rname', '$priv', '$num', '$pass', '$phone', '$email', '$uname') ";

$result = mysqli_query($conn, $sql);

if(1 ==($priv)) {
    header("Location: ../admin_user_page/user.php ");
    exit();
}


