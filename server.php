<?php
session_start();

$username = "";
$email = "";
$errors = array();

$db = mysqli_connect('localhost', 'root', '', 'bcl');
if (isset($_POST['register'])) {
    $username = mysqli_real_escape_string($db, $_POST['username']);
    $email = mysqli_real_escape_string($db, $_POST['email']);
    $password_1 = mysqli_real_escape_string($db, $_POST['password_1']);
    $password_2 = mysqli_real_escape_string($db, $_POST['password_2']);
    if (empty($username)) {
        array_push($errors, "Username is required");
    }
    if (empty($email)) {
        array_push($errors, "Email is required");
    }
    if (empty($password_1)) {
        array_push($errors, "Password is required");
    }
    if ($password_1 != $password_2) {
        array_push($errors, "The two password do not match");
    }
    if (count($errors) == 0) {
        $password = md5($password_1);
        $sql = "INSERT INTO users (username, email, Password) VALUES('$username','$email','$password')";
        mysqli_query($db, $sql);
        $_SESSION['username'] = $username;
        $_SESSION['success'] = "you are now logged in";
        header('location:index.php');

    }
}
if (isset($_POST['login'])) {
    $email = mysqli_real_escape_string($db, $_POST['email']);
    $password = mysqli_real_escape_string($db, $_POST['password']);
    if (empty($email)) {
        array_push($errors, "email is required");
    }
    if (empty($password)) {
        array_push($errors, "Password is required");
    }
    if (count($errors) == 0) {
        $password = md5($password);
        $query = "SELECT * FROM users WHERE email='$email' AND Password='$password'";
        $result = mysqli_query($db, $query);

        if (mysqli_num_rows($result) == 1) {
            while ($rw = mysqli_fetch_array($result)) {
                $username = $rw[1];
            }
            $_SESSION['username'] = $username;

            header('location:index.php');

        } else {
            array_push($errors, "Wrong username/password combinatin");
        }
    }
}

if (isset($_GET['logout'])) {
    session_destroy();
    unset($_SESSION['username']);
    header('location: login.php');
}
