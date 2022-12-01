
<?php

try{
  include_once('connection.php');
  array_map("htmlspecialchars", $_POST);

  header('Location: users.php');
  //print_r($_POST);


  $hashed_password = password_hash($_POST["password"], PASSWORD_DEFAULT);
	$stmt = $conn->prepare("INSERT INTO pupil(UserID,Name,Password,Balance)VALUES (NULL,:Name,:Password,:Balance)");
    $stmt->bindParam(':name', $_POST["name"]);
    $stmt->bindParam(':password', $hashed_password);
    $stmt->bindParam(':balance', $_POST["balance"]);

    $stmt->execute();
	}
catch(PDOException $e)
{
    echo "error".$e->getMessage();
}
$conn=null;
?>
