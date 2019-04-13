<?php
    require 'connect.php';
    $query="CREATE DATABASE medanta";
    if(mysqli_query($conn,$query))
    {

    }
    else
       // echo "Error connecting to database";
?>