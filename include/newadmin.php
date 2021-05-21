<?php
    session_start();
    require_once('connectDB.php');

    $login = $_POST['login'];
    $password = $_POST['password'];
    $passwordConfirm = $_POST['password_confirm'];
    
    if ($password === $passwordConfirm) {
        $password = md5($password);
        mysqli_query($connect, "INSERT INTO `admin_list` (`id`, `login`, `password`) VALUES (NULL, '$login', '$password')");

        

        $_SESSION['message'] = 'You registered a new admin.';
        header('Location: ../login.php');
    } else {
        $_SESSION['message'] = "Password and password confirm are not similar.";
        header('Location: ../registration.php');
    }
