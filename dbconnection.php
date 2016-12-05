<?php
// LOGIN INFO
$servername = "127.0.0.1";
$username = "mark";
$password = "hjzeecomh";

// Create connection
$conn = new mysqli($servername, $username, $password);
        
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
// checks if connection is successful 
//echo "Connected successfully";




