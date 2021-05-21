<?php

    session_start();
    require_once('connectDB.php'); 
    
    if (empty($_POST['username']) || empty($_POST['email']) || empty($_POST['task'])) {
        $_SESSION['message'] = 'All columns must be filled.';
        header('Location: ../newtask.php');
    } else {
        $username = $_POST['username'];
        $email = $_POST['email'];
        $task = htmlspecialchars($_POST['task']);
        mysqli_query($connect, "INSERT INTO `task_list` (`id`, `username`, `email`, `task`, `isComplete`) VALUES (NULL, '$username', '$email', '$task', '0')");
        $_SESSION['message'] = 'You added a new task';
        header('Location: ../newtask.php');
    }
    

?>
