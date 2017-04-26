<?php
include_once('connect.php');
$stmt = $conn->prepare("SELECT Name, Story FROM VeteranDetails WHERE VetID = :VetID ORDER BY DateAdded DESC");
$stmt->bindParam(':VetID', $_GET['id']);
$stmt->execute();
if ($stmt->execute()) {
    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
        echo '<h1 style="font-size: 26pt;margin-top: 0;padding-top: 30px;padding-bottom:30px;text-align: center;">';
        echo $row['Name'];
        echo '</h1>';
        echo '</div>';
        echo '<div class="row">';
        echo '<p>'.$row['Story'].'</p>';
        echo '</div>';
    }
}
$conn = null;
$stmt = null;
?>