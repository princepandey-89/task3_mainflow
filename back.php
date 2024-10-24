<?php
$servername = "localhost";
$username = "root"; // Change this as needed
$password = ""; // Change this as needed
$dbname = "userDB";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>