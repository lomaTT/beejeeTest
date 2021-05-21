<?php

    session_start();
    require_once('../connectDB.php');

    $login = $_POST['login'];
    $password = $_POST['password'];            

    $check_user = mysqli_query($connect, "SELECT * FROM `admin_list` WHERE `login` = '$login' AND `password` = '$password'");
    if (mysqli_num_rows($check_user) > 0) {
        
        $admin = mysqli_fetch_assoc($check_user);
        $_SESSION['message'] = 'You succesufully login as admin.';
        $_SESSION['admin'] = [
            "id" => $admin["id"],
            "login" => $admin['login']
        ];

        header('Location: ../adminpanel.php');
    } else {
        $_SESSION['message'] = 'Incorrect admin login or password';
        header('Location: ../login.php');
    }

    ?>