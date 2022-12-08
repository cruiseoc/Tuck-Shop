<?php
session_start();
include_once ("connection.php");
array_map("htmlspecialchars", $_POST);
$stmt = $conn->prepare("SELECT * FROM pupil WHERE Name =:username ;" );

$stmt->bindParam(':username', $_POST['Username']);
$stmt->execute();
while ($row = $stmt->fetch(PDO::FETCH_ASSOC))
{ 
    if($row['Password']==$_POST['Pword']){
        $_SESSION["loggedin"]=$row["UserID"];
        header('Location: menu.php');
    }else{

        header('Location: login.php');
    }
}
$conn=null;
?>
