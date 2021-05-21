<?php
    session_start();
    if (isset($_SESSION['admin'])) header('Location: adminpanel.php');
    ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" href="styles/style.css" type="text/css">
    <title>Login.</title>
</head>

<header>
    <center>
        <h1>Login.</h1>
        <div>
            <a href="newtask.php" id="button">
                New task
            </a>
            <a href="index.php" id="button">
                Main Page
            </a>
        </div>
    </center>
</header>

<body>
    <form action="include/signin.php" method="post">
        <center>
            <label>Admin Login:</label><br>
            <input type="text" name="login" placeholder="Please, input Admin Login:" />
            <br><br>
        </center>
        <center>
            <label>Password:</label><br>
            <input type="password" name="password" placeholder="Admin Password:" />
            <br><br>
            <button type="submit">Submit</button><br><br>
        </center>
        <?php
            if (isset($_SESSION['message'])) echo '<center><p style="color: red">' . $_SESSION['message'] . '</p><center>';
            unset($_SESSION['message']);
        
        ?>

    </form>
    
</body>
</html>