<?php
session_start();
if(isset($_SESSION['loggedin']))
{
    unset($_SESSION['loggedin']);
}
if(isset($_SESSION['tuck']))
{
    unset($_SESSION['tuck']);
}
header("Location:menu.php");
?>

