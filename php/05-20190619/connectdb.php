<?php
$servername = "localhost";
$username = "root";
$password = "sidao240896";
$dbname = "ap_18_4";
// Create connection
$conn = mysqli_connect($servername, $username, $password,$dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
?>  