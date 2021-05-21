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
    <title>Change task.</title>
</head>

<header>
    <center>
        <h1>Change task.</h1>
        <div>
            <a href="index.php" id="button">
                Main Page
            </a>
        </div>
    </center>
</header>

<body>
    <form action="include/updateTask.php" method="post">                                              <!-- enctype="multipart/form-data"  для картинок -->
        <center>
            <label>ID of task you editing:</label>
            <?php
                echo $_POST['id'];
                $id = $_POST['id'];
            ?>
            
            <br><br>
        </center>
        <center>
            <label>Please, input new task:</label><br>
            <input type="text" name="new_task" placeholder="New task here:" />
            <br><br>
            <button type="submit" name="id" value=<?php echo $id ?>>Submit</button>
            <br><br>
        </center>
    </form>
    
</body>
</html>