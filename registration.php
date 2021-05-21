<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" href="styles/style.css" type="text/css">
    <title>New admin.</title>
</head>

<header>
    <center>
        <h1>Admin registation.</h1>
        <div>
            <a href="index.php" id="button">
                Main Page
            </a>
        </div>
    </center>
</header>

<body>
    <form action="include/newadmin.php" method="post">                                              <!-- enctype="multipart/form-data"  для картинок -->
        <center>
            <label>Admin Login:</label><br>
            <input type="text" name="login" placeholder="Please, input new Admin Login:" />
            <br><br>
        </center>
        <center>
            <label>Password:</label><br>
            <input type="password" name="password" placeholder="Admin new Password:" />
            <br><br>
        </center>
        <center>
            <label>Password confirm:</label><br>
            <input type="password" name="password_confirm" placeholder="Admin new Password:" />
            <br><br>
            <button type="submit">Submit</button>
            <br><br>
        </center>
        <?php 
        if (isset($_SESSION['message'])) 
            echo '<center><p style="color:red;">' . $_SESSION['message'] . '</p></center>'; unset($_SESSION['message']); 
        ?>
    </form>
    
</body>
</html>