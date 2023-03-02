<?php
session_start();

include "db_conn.php";

$delete = "DELETE FROM users WHERE email='".$_POST["email"]."'";
$result = mysqli_query($conn, $delete);

header("Location: admin.php");
?>
