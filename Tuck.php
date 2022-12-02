<!DOCTYPE html>
<html>

<head>

<title> Sign Up </title>
</head>
<body>
            <h1>Welcome to Oli's Tuck Shop</h1><br>
            <p>Please enter your credentials to sign up</p>
       
        <form action="addusers.php" method="POST">
          <input type="text" placeholder="Name" name="Name">
          <input type="text" placeholder="Cost"  name="Cost">
          <input type="text" placeholder="Quantity"  name="Quanitity">
          <input type="submit" value="Add Tuck">
        </form>
<?php

include_once('connection.php');
$stmt = $conn->prepare("SELECT * FROM tuck");
$stmt->execute();

while ($row = $stmt->fetch(PDO::FETCH_ASSOC))
{
echo($row["Name"].' '.$row["Cost"].' '.$row["Quantity"]"<br>");
}


?>   
</body>
</html>
