<!DOCTYPE html>
<html>
<?php
include_once('connection.php');
$stmt = $conn->prepare("INSERT INTO TblUsers (UserID, Name,Password,Role)VALUES (null,:name,:Password,:Role)");

?>
<head>

<title> Sign Up </title>
</head>
<body>
    <div class="login-page">
      <div class="form">
        <div class="login">
          <div class="login-header">
            <form action="addusers.php" method="Post">
            <h31>Welcome to Oli's Tuck Shop</h1>
            <p1>Please enter your credentials to sign up</p1>
          </div>
        </div>
        <form class="login-form">
          <input type="password" placeholder="create a password"/>
          <input type="text" placeholder="name"/>
          <input type="text" placeholder="balance"/>
          <button>Sign Up</button>
        </form>
</div>
</div>
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

