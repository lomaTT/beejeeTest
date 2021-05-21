<?php
    session_start();
    if (!$_SESSION['admin']) header('Location: login.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" href="styles/style.css" type="text/css">
    <title>Admin panel.</title>
    
</head>

<header>
    <center>
        <h1>Admin panel.</h1>
        <div>
            <a href="include/logout.php" id="button">
                Log out.
            </a>
            <a href="newtask.php" id="button">
                New task.
            </a>
        
        <?php
        if (isset($_SESSION['admin'])) {
            echo '<center><p> You id: ' . $_SESSION['admin']['id'] . '. Your login: ' . $_SESSION['admin']['login'] . '</p></center>';
            
        }

        if (isset($_SESSION['message'])) {
            echo '<center><p style="color:orange">' . $_SESSION['message'] . '</p></center>';
            unset($_SESSION['message']);
        }
            

        ?>
        </div>
    </center>
</header>

<body>
    <div class="row" align="center" id="headOfToDo">
        <div class="col"> Username: </div>
        <div class="col"> E-mail: </div>
        <div class="col"> Task: </div>
        <div class="col"> Editing: </div>
        <div class="col"> Is complete?: </div>
    </div>
    
    <?php
    require_once('include/takeTasks.php');
    take_all_tasks($connect);
    ?>

    


      
</body>
</html>