<?php
    session_start();
    require_once('connectDB.php');
    $new_task = $_POST['new_task'];
    $id = $_POST['id'];
    if ($new_task == '') {
        $_SESSION['message'] = 'You must give a new task!';
        header("Location: ../adminpanel.php");
    } else {
        mysqli_query($connect, "UPDATE `task_list` SET `task` = '$new_task' WHERE `task_list`.`id` = $id");
        header("Location: ../adminpanel.php");
    }
?>