<?php

session_start();

include('connection.php');
if($connection)
{
    //echo "Database Connected";
}
else
{
    header("Location: connection.php");
}

if(!$_SESSION['Username'])
{
    header("Location: login.php");
}


?>