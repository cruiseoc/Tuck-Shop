<?php
session_start();
if($_SESSION["loggedin"]!=7){
    header('Location:menu.php');
}

?>

<!DOCTYPE html>
<html>

<head>

<title> Add Tuck </title>
</head>
<body>
            <h1>Add Tuck</h1><br>
            <p>Enter the details of the tuck:</p>
       
        <form action="addtuck.php" method="POST">
          <input type="text" placeholder="Name" name="name">
          <input type="text" placeholder="Cost"  name="cost">
          <input type="text" placeholder="Quantity"  name="quantity">
          <input type="submit" value="Add Tuck">
        </form>
<?php

include_once('connection.php');
$stmt = $conn->prepare("SELECT * FROM tuck");
$stmt->execute();

while ($row = $stmt->fetch(PDO::FETCH_ASSOC))
{
echo($row["Name"].' '.$row["Cost"].$row["Quantity"].' '."<br>");
}


?>   
</body>
</html>
