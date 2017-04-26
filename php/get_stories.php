<?php

include_once('connect.php');

$stmt = $conn->prepare("SELECT VetID, Name, Story FROM VeteranDetails ORDER BY DateAdded DESC");
$stmt->execute();


if ($stmt->execute()) {
    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
        echo '<div class="mySlides" style="background-color:#004579;color:#fff;height:222px!important;">';
        echo $row[Name];
        echo '<br /><p style="padding:0px;">';
        echo $row[Story]; echo '</p>';
        echo '<br /><a href="story.php?id='.$row[VetID].'">READ MORE</a></div>';
    }
}

$conn = null;
$stmt = null;
?>