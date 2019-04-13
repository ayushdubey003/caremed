<?php
    session_start();
    require 'header.html';
    @$username=$_SESSION['username'];
    @$password=$_SESSION['password'];
    if($username=="admin"&&$password=="1234")
    {
        echo "$username";
    }
    else
        die('You are not authorized to access this page');
    
?>