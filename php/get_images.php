<?php

include_once('connect.php');

$stmt = $conn->prepare("SELECT ImgID, ImgDir FROM Images ORDER BY DateUploaded DESC");
$stmt->execute();


if ($stmt->execute()) {
    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
        echo $row[ImgDir];
        echo '<div class="mySlides" style="background-image:url('.$row[ImgDir].'"></div>';
    }
}

$conn = null;
$stmt = null;


?>