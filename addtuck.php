<?php
try{
  include_once('connection.php');
  array_map("htmlspecialchars", $_POST);

  header('Location:users.php');
  //print_r($_POST);


  $stmt = $conn->prepare("INSERT INTO tuck(TuckID, Name, Cost, Quantity)VALUES (null,:Name,:Cost,:Quantity)");
  $stmt->bindParam(':Name', $_POST["name"]);
  $stmt->bindParam(':Cost', $_POST["cost"]);
  $stmt->bindParam(':Quanity', $_POST["Quantity"]);
  $stmt->execute();

	  }
    catch(PDOException $e)
      {
       echo "error".$e->getMessage();
     }
   $conn=null;
  
  
?>