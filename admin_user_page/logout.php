<?php
session_start();

unset($_SESSION["user_name"]);
unset($_SESSION["name"]);
unset($_SESSION["email"]);
unset($_SESSION["id"]);
session_destroy();

header("Location: ../main_page/index.php");
?>
