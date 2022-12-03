<form action="addusers.php">

<!DOCTYPE html>
<html>
<?php

include_once("connection.php");
$stmt = $conn->prepare("INSERT INTO pupil (PID,Names,Name,Password)VALUES (null,:gender,:surname,:forename,:password,:house,:year,:role)");


?>

<head>

<h1 style = background-color: #fff; height: 45px; width: 360px; padding: 8% 0 0; margin: auto;position: relative;z-index: 1;background: #FFFFFF;max-width: 360px;
  margin: 0 auto 100px;
  padding: 45px;
  text-align: center;
  box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.2), 0 5px 5px 0 rgba(0, 0, 0, 0.24)>


  <!DOCTYPE html>
<html>

<head>

<title> Login </title>
</head>
<body>
            <h1>Welcome to Oli's Tuck Shop</h1><br>
            <p>Please enter your credentials to login</p>
       
            <form action="loginprocess.php" method= "POST">
            <input type="text" placeholder="Name" name="Username"><br>
            <input type="password" placeholder="password" name="Pword"><br>
            <input type="submit" value="Login">
    
            </form>
<?php



