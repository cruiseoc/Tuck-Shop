<!DOCTYPE html>
<html>

<head>

<title> Sign Up </title>
</head>
<body>
            <h1>Welcome to Oli's Tuck Shop</h1><br>
            <p>Please enter your credentials to sign up</p>
       
        <form action="addusers.php" method="POST">
          <input type="password" placeholder="create a password" name="password">
          <input type="text" placeholder="name"  name="name">
          <input type="text" placeholder="balance"  name="balance">
          <input type="submit" value="Sign Up">
        </form>
<?php

include_once('connection.php');
$stmt = $conn->prepare("SELECT * FROM pupil");
$stmt->execute();

while ($row = $stmt->fetch(PDO::FETCH_ASSOC))
{
echo($row["Name"].' '.$row["Balance"]."<br>");
}


?>   
</body>
</html>

