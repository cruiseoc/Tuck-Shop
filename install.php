<?php
include_once("connection.php");
$stmt = $conn->prepare("DROP TABLE IF EXISTS pupil;
CREATE TABLE pupil 
(UserID INT(4) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
Name VARCHAR(20) NOT NULL,
Balance VARCHAR(20) NOT NULL)");
$stmt->execute();
$stmt->closeCursor();

$stmt = $conn->prepare("DROP TABLE IF EXISTS Order;
CREATE TABLE Order
OrderID INT(20) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
UserID INT(4) NOT NULL, 
Date VARCHAR(20) NOT NULL
Processed VARCHAR(1) NOT NULL
Delivered VARCHAR(1) NOT NULL
Cancelled VARCHAR(1) NOT NULL)");
$stmt->execute();
$stmt->closeCursor();
?>
