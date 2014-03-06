<?php 
    require("common.php"); 
     
    if(empty($_SESSION['user'])) 
    { 
        header("Location: login.php"); 
         
        die("Redirecting to login.php"); 
    } 
    session_destroy();

echo "<meta HTTP-EQUIV='REFRESH' content='1; url=login.php'> You have been successfully logged out! Redirecting to the login page!";

