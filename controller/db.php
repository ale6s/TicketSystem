<?php

//using loocal db to test out my comments section
$servername = "localhost";
$username = "Username Goes here";
$password = "Password goes here";
$db = "asanchez_ticketing_system";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $db);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

?>