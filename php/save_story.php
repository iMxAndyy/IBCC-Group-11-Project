<?php

include_once('connect.php');

$stmt = $conn->prepare("INSERT INTO VeteranDetails (Name, Email, Tel, Story, DateAdded) VALUES (:name, :email, :tel, :story, NOW())");


$stmt->bindParam(':name', $name);
$stmt->bindParam(':email', $email);
$stmt->bindParam(':tel', $tel);
$stmt->bindParam(':story', $story);

$name=$_POST["name"];
$email=$_POST["email"];
$tel=$_POST["tel"];
$story=$_POST["story"];

$stmt->execute();
$conn = null;
$stmt = null;

header('Location:/contact.php');
?>