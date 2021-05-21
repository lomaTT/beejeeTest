<?php    
    session_start();
    require_once('connectDB.php');
    include('../index.php');
    print_r($_POST);
    if ($_POST['move'] == '+') {$_SESSION['page'] = $_POST['id'] + 1; header("Location: ../index.php");}
    if ($_POST['move'] == '-') {$_SESSION['page'] = $_POST['id'] - 1; header("Location: ../index.php");}
    
    
    ?>