<?php

    $connect = mysqli_connect('127.0.0.1', 'lomatt', 'Lomatt321', 'lomatt');

    if (mysqli_connect_errno())
    {
    echo "Failed to connect to MySQL: " . mysqli_connect_error() ."<br>";
}