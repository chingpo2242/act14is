<?php
// Establish database connection
$servername = "localhost";
$username = "root";
$password = "";
$database = "isordering";

$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

?>
