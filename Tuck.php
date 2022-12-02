<!DOCTYPE html>
<html>

<head>

<title> Add Tuck</title>
</head>
<body>
            <h1>Add Tuck</h1><br>
            <p>Enter the details of the tuck you want to add</p>
       
        <form action="addusers.php" method="POST">
          <input type="text" placeholder="Tuck name" name="Name">
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
echo($row["Name"].' '.$row["Cost"].' '.$row["Quantity"]."<br>");
}


?>   
</body>
</html>
