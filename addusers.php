<?php
try{
  include_once('connection.php');
  array_map("htmlspecialchars", $_POST);

  header('Location:users.php');



  $stmt = $conn->prepare("INSERT INTO pupil(UserID,Name,Password,Balance)VALUES (null,:Name,:Password,:Balance)");
  $stmt->bindParam(':Name', $_POST["name"]);
  $stmt->bindParam(':Password', $_POST["password"]);
  $stmt->bindParam(':Balance', $_POST["balance"]);
  $stmt->execute();

	  }
    catch(PDOException $e)
      {
       echo "error".$e->getMessage();
     }
   $conn=null;
?>

