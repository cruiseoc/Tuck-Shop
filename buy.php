<?php
session_start();
print_r($_SESSION);

try{
	include_once('connection.php');
	array_map("htmlspecialchars", $_POST);
	$date=date_create()->format('Y-m-d H:i:s');
print_r($date);
    
	$stmt = $conn->prepare("INSERT INTO orders(OrderID,UserID,Date)VALUES (NULL,:userid,:date)");
	$stmt->bindParam(':userid', $_SESSION["loggedin"]);
    $stmt->bindParam(':date', $date);
   
    
	$stmt->execute();

    $last=$conn->lastInsertId();
	}
catch(PDOException $e)
{
    echo "error".$e->getMessage();
}
 


foreach ($_SESSION["tuck"] as $entry){
    $stmt = $conn->prepare("INSERT INTO baskets(OrderID,TuckID,Quantity)VALUES (:orderid,:tuckid,:quantity)");
	$stmt->bindParam(':orderid', $last);
    $stmt->bindParam(':tuckid', $entry["tuck"]);
    $stmt->bindParam(':quantity', $entry["qty"]);
	$stmt->execute();
    $stmt->closeCursor(); 
    
  
    $stmt = $conn->prepare("UPDATE tuck SET Quantity=Quantity-:bought WHERE TuckID=:tuckid");
	$stmt->bindParam(':tuckid', $entry["tuck"]);
	$stmt->bindParam(':bought', $entry["qty"]);
	$stmt->execute();
    $stmt->closeCursor(); 

}

    $stmt = $conn->prepare("UPDATE pupil SET Balance=Balance-:newbalance WHERE UserID=:userid");
	$stmt->bindParam(':userid', $_SESSION["loggedin"]);
	$stmt->bindParam(':newbalance', $_SESSION["totalcost"]);
	$stmt->execute();
    $stmt->closeCursor(); 
$conn=null;
unset($_SESSION["tuck"]);
header('Location: checkout.php');
?>