<?php
header("Location: lunchform.php");
array_map("htmlspecialchars", $_POST);
include_once("connection.php");

$stmt = $conn->prepare("INSERT INTO orders (orderID, surname, location, date, time) VALUES (null,:surname,:location,:date,:time)");
$stmt->bindParam(':surname', $_POST["surname"]);
$stmt->bindParam(':location', $_POST["location"]);
$stmt->bindParam(':date', $_POST["date"]);
$stmt->bindParam(':time', $_POST["time"]);
$stmt->execute();
$conn=null;

echo $_POST["surname"]."<br>";
echo $_POST["location"]."<br>";
echo $_POST["date"]."<br>";
echo $_POST["time"]."<br>";
?>

