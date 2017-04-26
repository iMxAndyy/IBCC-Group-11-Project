<div class="mySlides" style="background-image:url(http://placehold.it/100x150)"></div>

<?php

include_once('connect.php');

$stmt = $conn->prepare("SELECT ImgID, ImgDir FROM Images ORDER BY DateUploaded DESC");
$stmt->execute();

// set the resulting array to associative
$result = $stmt->setFetchMode(PDO::FETCH_ASSOC);


if ($stmt->execute()) {
    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
        echo '<div class="mySlides" style="background-image:url('.$row[ImgDir].'"></div>';
    }
}

$conn = null;
$stmt = null;


?>