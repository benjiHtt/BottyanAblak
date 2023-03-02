<?php
session_start();
include "db_conn.php";

function validate($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}



if (isset($_POST['uname']) && isset($_POST['password']) && isset($_POST['email'])) {

    $uname = validate($_POST['uname']);
    $pass = validate($_POST['password']);
    $email = validate($_POST['email']);


    if (empty($uname)) {
        header("Location: index.php?error=User Name is required");
        exit();
    } else if (empty($pass)) {
        header("Location: index.php?error=Password is required");
        exit();

    } else if (empty($email)) {
        header("Location: index.php?error=Email is required");
        exit();

    }

    $sql = "SELECT * FROM users WHERE user_name='$uname' AND password='$pass' AND email='$email' ";

    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) == 1) {
        $row = mysqli_fetch_assoc($result);
        if ($row['user_name'] === $uname && $row['password'] === $pass && $row['email'] === $email) {
            echo "Logged In!";
            $_SESSION['user_name'] = $row['user_name'];
            $_SESSION['name'] = $row['name'];
            $_SESSION['email'] = $row['email'];
            $_SESSION['id'] = $row['id'];
            $_SESSION['home'] = "user.php";

            if ($row['privilege'] == 10) {
                $_SESSION['home'] = "admin.php";
                header("Location: ../admin_user_page/admin.php");
                exit();
            }
            header("Location: ../admin_user_page/user.php");
            exit();
        } else {
            header("Location: index.php?error=Incorrect User Name or Password or Email");
            exit();
        }
    }
}

header("Location: index.php");
exit();
