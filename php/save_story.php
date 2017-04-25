<?php

include_once('connect.php');
echo 'debug 1';

$stmt = $conn->prepare("INSERT INTO VeteranDetails (Name, Email, Tel, Story, DateAdded) VALUES (?, ?, ?, ?, NOW())");
$stmt->bind_param("ssis", $name, $email, $tel, $story);

$name=$_POST["name"];
$email=$_POST["email"];
$tel=$_POST["tel"];
$story=$_POST["story"];

$stmt->execute();
$stmt->close();
$conn->close();

echo 'all done!';
?>