<?php
function db_connect(){
    $servername = "localhost";
    $username = "root";
    $password = "ibcc";
    $dbname = "ibcc";
    $conn = new mysqli($servername, $username, $password, $dbname);
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    return $conn;
}

$conn = db_connect();