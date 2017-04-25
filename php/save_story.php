<?php

include_once('connect.php');

$stmt = $conn->prepare("INSERT INTO VeteranDetails (Name, Email, Tel, Story) VALUES (?, ?, ?, ?)");
$stmt->bind_param($name, $email, $tel, $story);

$name=$_POST["name"];
$email=$_POST["email"];
$tel=$_POST["tel"];
$story=$_POST["story"];

$stmt->execute();
$stmt->close();
$conn->close();
?>