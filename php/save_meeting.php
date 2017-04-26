<?php

include_once('connect.php');

$stmt = $conn->prepare("INSERT INTO MeetingRequests (Name, Tel, Data) VALUES (:name, :tel, :data)");


$stmt->bindParam(':name', $name);
$stmt->bindParam(':tel', $tel);
$stmt->bindParam(':data', $data);

$name=$_POST["name"];
$email=$_POST["tel"];
$data=$_POST["data"];

$stmt->execute();

$conn = null;
$stmt = null;

header('Location:/contact.php');
?>