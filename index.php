<?php
    session_start();
    if(isset($_SESSION['admin'])) header('Location: adminpanel.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" href="styles/style.css" type="text/css">
    <title>To-Do List.</title>
    
</head>

<header>
    <center>
        <h1>To-Do List.</h1>
        <div>
            <a href="login.php" id="button">
                Login as administator
            </a>
            <a href="newtask.php" id="button">
                New task
            </a>
    
        </div>
    </center>
</header>

<body>
    <div class="row" align="center" id="headOfToDo">
        <div class="col-sm-6 col-md-4"> Username: </div>
        <div class="col-sm-6 col-md-4"> E-mail: </div>
        <div class="col-sm-6 col-md-4"> To-Do: </div>
    </div>
    
    <?php
    require_once('include/takeTasks.php');
    if (isset($_SESSION['page'])) {$page = $_SESSION['page'];}
    else {$page = 0;}
       
    take_user_tasks($connect, $page);
    
    $all_tasks = mysqli_query($connect, "SELECT * FROM `task_list`");
    $rows = mysqli_num_rows($all_tasks);
    
    if ($rows % 3 != 0) $max_pages = intdiv($rows, 3) + 1;
    else $max_pages = $rows / 3;
    ?>

    <br><br>
    <div class="navigation">
        <?php
        if ($page != 0) {
        echo '<form method="post" action="include/updatePage.php"><button name="id" value=' . $page . '>Back.</button><input type="hidden" name="move" value="-"></form>';
        
        }
        ?>
        
        <?php
        if ($page != $max_pages - 1) {
        echo '<form method="post" action="include/updatePage.php"><button name="id" value=' . $page . '>Next.</button><input type="hidden" name="move" value="+"></form>';
            
        }
        ?>
    </div>
    


      
</body>
</html>