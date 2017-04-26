<?php

include_once('connect.php');

$stmt = $conn->prepare("SELECT ImgID, ImgDir FROM Images ORDER BY DateUploaded DESC");
$stmt->execute();

if ($stmt->execute()) {
    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
        echo '<div class="mySlides" style="cursor:pointer;background-image:url('.$row[ImgDir].'" onclick="changeLargeImage('."'".$row[ImgDir]."'".')"></div>';
    }
}

$conn = null;
$stmt = null;

?>