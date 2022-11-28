<?php
include_once("connection.php");
$stmt = $conn->prepare("DROP TABLE IF EXISTS pupil;
CREATE TABLE pupil 
(UserID INT(4) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
Name VARCHAR(20) NOT NULL,
Password VARCHAR(20) NOT NULL,
Balance VARCHAR(20) NOT NULL)");
$stmt->execute();
$stmt->closeCursor();

$stmt1 = $conn->prepare("DROP TABLE IF EXISTS Orders;
CREATE TABLE Orders
(OrderID INT(20) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
UserID INT(4) NOT NULL, 
Date VARCHAR(20) NOT NULL,
Processed VARCHAR(1) NOT NULL,
Delivered VARCHAR(1) NOT NULL,
Cancelled VARCHAR(1) NOT NULL)");
$stmt1->execute();
$stmt1->closeCursor();

$stmt1 = $conn->prepare("DROP TABLE IF EXISTS Baskets;
CREATE TABLE Baskets
(OrderID INT(20) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
TuckID INT(4) NOT NULL, 
QTY INT(3) NOT NULL)");
$stmt1->execute();
$stmt1->closeCursor();

$stmt1 = $conn->prepare("DROP TABLE IF EXISTS Tuck;
CREATE TABLE Tuck
(TuckID INT(20) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
Name VARCHAR(20) NOT NULL, 
Cost INT(20) NOT NULL,
QTY INT(3) NOT NULL)");
$stmt1->execute();
$stmt1->closeCursor();
?>