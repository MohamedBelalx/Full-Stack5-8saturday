<?php

include('db.php');
if(isset($_GET['id']))
{
    $id = $_GET['id'];
    $sql = "DELETE FROM books WHERE id='$id'";


    $connection->query($sql);
}



?>