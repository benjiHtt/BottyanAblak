<?php
session_start();

include "db_conn.php";

$insert = "INSERT INTO users (email) VALUES ('" . $_POST["email"] . "', '".$_POST["email"]."',112,)";    // INSERT INTO users (email, privilege, number, password) VALUES ('a@a.hu', 99, 5, 'alma')
$result = mysqli_query($conn, $insert);

header("Location: admin.php");
?>
