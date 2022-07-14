<?php
session_start();
$connection = mysqli_connect("localhost","root","","adminpanel");
if(isset($_POST['logout_btn']))
{
    session_destroy();
    unset($_SESSION['Username']);
    header('Location:login.php');
}


?>