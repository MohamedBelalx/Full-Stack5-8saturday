<?php

session_start();

if(isset($_SESSION['name']))
{
    echo 'u can access';
}else
{
    header('location:login.php');
}




?>


<h1>welcome to home page</h1>
<a href="logout.php">logout</a>