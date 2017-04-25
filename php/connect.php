<?php
function db_connect(){
    $servername = "localhost";
    $username = "root";
    $password = "ibcc";
    $dbname = "ibcc";
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    return $conn;
}

$conn = db_connect();