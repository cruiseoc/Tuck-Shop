<?php
include_once("connection.php");
$stmt = $conn->prepare("DROP TABLE IF EXISTS pupils;
CREATE TABLE pupils
(UserID INT(4) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
PID VARCHAR(1) NOT NULL,
Name VARCHAR(20) NOT NULL,
Balance VARCHAR(20) NOT NULL,");
$stmt->execute();
$stmt->closeCursor();
?>
