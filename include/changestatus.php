<?php
    session_start();
    require_once('connectDB.php');

    $id = $_POST['id'];
    $status = mysqli_query($connect, "SELECT `isComplete` FROM `task_list` WHERE `id`='$id'");
    $status = mysqli_fetch_object($status);
    $status = (array) $status;
    echo $status['isComplete'];
    if ($status['isComplete'] == 1) {
        mysqli_query($connect, "UPDATE `task_list` SET `isComplete` = '0' WHERE `task_list`.`id` = $id"); 
        header("Location: ../adminpanel.php");
    } 
    if ($status['isComplete'] == 0)  
    {
        mysqli_query($connect, "UPDATE `task_list` SET `isComplete` = '1' WHERE `task_list`.`id` = $id"); 
        header("Location: ../adminpanel.php");
    }
?>