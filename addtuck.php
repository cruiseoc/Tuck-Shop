<?php
try{
  include_once('connection.php');
  array_map("htmlspecialchars", $_POST);

  header('Location:Tuck.php');
  //print_r($_POST);


  $stmt = $conn->prepare("INSERT INTO tuck(TuckID,Name,Cost,Quantity)VALUES (null,:Name,:Cost,:Quantity)");
  $stmt->bindParam(':Name', $_POST["name"]);
  $stmt->bindParam(':Cost', $_POST["cost"]);
  $stmt->bindParam(':Quantity', $_POST["quantity"]);
  $stmt->execute();

	  }
    catch(PDOException $e)
      {
       echo "error".$e->getMessage();
     }
   $conn=null;
  
  
?>