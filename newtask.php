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
    <title>New task.</title>
</head>

<header>
    <center>
        <h1>New task.</h1>
        <div>
            <a href="login.php" id="button">
                Login as administator
            </a>
            <a href="index.php" id="button">
                Main Page
            </a>
    
        </div>
    </center>
</header>

<body>
    <form action="include/taskcreating.php" method="post">
        <center>
            <label>Username:</label><br>
            <input type="text" name="username" placeholder="Please, input your username:" />
            <br><br>
        </center>
        <center>
            <label>E-mail:</label><br>
            <input type="email" name="email" placeholder="Please, input e-mail:" />
            <br><br>
        </center>
        <center>
            <label>New task:</label><br>
            <textarea name="task"></textarea>
            <br><br>
            <button>Submit</button><br>
        </center>
        <?php
        if (isset($_SESSION['message'])) echo '<center><p style="color: red">' . $_SESSION['message'] . '</p></center>';
            unset($_SESSION['message']);
        
        
        ?>
    </form>
</body>
</html>